#!/usr/bin/env bash
# Stellt ein lokales WordPress auf, ohne MySQL und ohne Docker: PHP 8 mit
# SQLite genuegt. Gedacht fuer die WordPress-Demo (Themes bauen, Bilder
# rendern), nicht fuer den Betrieb.
#
#   quellen/wordpress-lokal.sh [zielordner]      Standard: ../wordpress-lokal
#
# Danach laeuft die Seite unter http://127.0.0.1:8080, Anmeldung im
# Redaktionsbereich unter /wp-login.php mit adrian / demo-lokal-2026.
# Server anhalten: kill $(cat <zielordner>/server.pid)
#
# Quellen: wordpress.org ist aus der Cloud-Sitzung nicht erreichbar, die
# Spiegel auf GitHub schon. Deshalb kommen Kern und SQLite-Treiber per git.
# Der Kern liegt als Tag vor, der Treiber wird aus dem Monorepo zusammengelegt
# (das Plugin verweist per Symlink auf das Paket mysql-on-sqlite).
set -euo pipefail

VERSION="${WP_VERSION:-6.9.9}"
ZIEL="$(realpath -m "${1:-$(dirname "$0")/../../wordpress-lokal}")"
WP="$ZIEL/wp"
ADRESSE="http://127.0.0.1:8080"

if [ -e "$WP/wp-config.php" ]; then
  echo "WordPress liegt schon unter $WP, nichts aufgesetzt." >&2
else
  mkdir -p "$ZIEL"
  echo "Hole WordPress $VERSION ..."
  git -c advice.detachedHead=false clone -q --depth 1 --branch "$VERSION" https://github.com/WordPress/WordPress.git "$WP"
  echo "Hole SQLite-Treiber ..."
  git clone -q --depth 1 https://github.com/WordPress/sqlite-database-integration.git "$ZIEL/sqlite-repo"
  PLUGIN="$WP/wp-content/plugins/sqlite-database-integration"
  cp -rL "$ZIEL/sqlite-repo/packages/plugin-sqlite-database-integration" "$PLUGIN"
  sed -e "s#{SQLITE_IMPLEMENTATION_FOLDER_PATH}#$PLUGIN#" \
      -e "s#{SQLITE_PLUGIN}#sqlite-database-integration/load.php#" \
      "$PLUGIN/db.copy" > "$WP/wp-content/db.php"

  cat > "$WP/wp-config.php" <<KONFIG
<?php
// Lokale Demo: SQLite statt MySQL, die Datenbank liegt in wp-content/database/.
define( 'DB_NAME', 'demo' );
define( 'DB_USER', '' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );
define( 'DB_ENGINE', 'sqlite' );
define( 'AUTH_KEY',         'lokal-demo-1' );
define( 'SECURE_AUTH_KEY',  'lokal-demo-2' );
define( 'LOGGED_IN_KEY',    'lokal-demo-3' );
define( 'NONCE_KEY',        'lokal-demo-4' );
define( 'AUTH_SALT',        'lokal-demo-5' );
define( 'SECURE_AUTH_SALT', 'lokal-demo-6' );
define( 'LOGGED_IN_SALT',   'lokal-demo-7' );
define( 'NONCE_SALT',       'lokal-demo-8' );
\$table_prefix = 'wp_';
define( 'WP_HOME', '$ADRESSE' );
define( 'WP_SITEURL', '$ADRESSE' );
// Kein Weg nach draussen: api.wordpress.org ist gesperrt, und jeder Versuch
// haelt den Einzelprozess-Server auf.
define( 'WP_HTTP_BLOCK_EXTERNAL', true );
define( 'AUTOMATIC_UPDATER_DISABLED', true );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );
if ( ! defined( 'ABSPATH' ) ) { define( 'ABSPATH', __DIR__ . '/' ); }
require_once ABSPATH . 'wp-settings.php';
KONFIG
  php -l "$WP/wp-config.php" >/dev/null
fi

# Server starten, falls er nicht schon laeuft.
if ! curl -s -o /dev/null "$ADRESSE/"; then
  nohup php -S 127.0.0.1:8080 -t "$WP" > "$ZIEL/server.log" 2>&1 &
  echo $! > "$ZIEL/server.pid"
  for i in 1 2 3 4 5 6 7 8 9 10; do
    curl -s -o /dev/null "$ADRESSE/" && break
    sleep 1
  done
fi

# Einrichten, falls die Seite noch auf die Einrichtung umleitet.
if curl -s -o /dev/null -w '%{redirect_url}' "$ADRESSE/" | grep -q install.php; then
  echo "Richte WordPress ein ..."
  curl -s -o /dev/null -X POST "$ADRESSE/wp-admin/install.php?step=2" \
    --data-urlencode "weblog_title=Demo" \
    --data-urlencode "user_name=adrian" \
    --data-urlencode "admin_password=demo-lokal-2026" \
    --data-urlencode "admin_password2=demo-lokal-2026" \
    --data-urlencode "pw_weak=on" \
    --data-urlencode "admin_email=adrian@formateins.ch" \
    --data-urlencode "blog_public=0" \
    --data-urlencode "Submit=Install WordPress"
fi

TITEL="$(curl -s "$ADRESSE/" | grep -o '<title>[^<]*</title>' || true)"
echo "Laeuft: $ADRESSE  $TITEL"
echo "Redaktion: $ADRESSE/wp-login.php  (adrian / demo-lokal-2026)"
echo "Themes: $WP/wp-content/themes"
