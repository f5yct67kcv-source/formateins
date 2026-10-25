#!/usr/bin/env bash
# Baut die WordPress-Demo «Sportcenter Lindenfeld» lokal auf:
# WordPress holen (quellen/wordpress-lokal.sh), Theme einhaengen, Server mit
# schoenen Adressen starten, Inhalte einfuellen. Danach: http://127.0.0.1:8080
#
#   entwurf-wordpress/demo-lokal.sh [zielordner]     Standard: ../wordpress-lokal
set -euo pipefail
HIER="$(cd "$(dirname "$0")" && pwd)"
ZIEL="$(realpath -m "${1:-$HIER/../../wordpress-lokal}")"
"$HIER/../quellen/wordpress-lokal.sh" "$ZIEL" >/dev/null
WP="$ZIEL/wp"
ln -sfn "$HIER/lindenfeld" "$WP/wp-content/themes/lindenfeld"
cp "$HIER/router.php" "$ZIEL/router.php"
# Server mit Router neu starten, damit /anlaesse/ und Co. ohne .htaccess gehen.
if [ -f "$ZIEL/server.pid" ] && kill -0 "$(cat "$ZIEL/server.pid")" 2>/dev/null; then
  kill "$(cat "$ZIEL/server.pid")"; sleep 1
fi
( cd "$ZIEL" && nohup php -S 127.0.0.1:8080 -t wp router.php > server.log 2>&1 < /dev/null & echo $! > server.pid )
sleep 1
( cd "$ZIEL" && WP_PFAD="$WP" php "$HIER/demo-fuellen.php" )
echo "Demo laeuft: http://127.0.0.1:8080  (Tafel-Variante: /start-tafel/)"
echo "Redaktion:   http://127.0.0.1:8080/wp-login.php  adrian / demo-lokal-2026"
