<?php
// Fuellt die Demo: Theme, Seiten, Mitteilungen, Anlaesse, Menue.
define( 'WP_USE_THEMES', false );
$_SERVER['HTTP_HOST'] = '127.0.0.1:8080';
require ( getenv( 'WP_PFAD' ) ?: __DIR__ . '/wp' ) . '/wp-load.php';
wp_set_current_user( 1 );

// Das Theme muss schon beim Laden aktiv sein, sonst fehlen Inhaltsart und
// Felder fuer die Anlaesse. Also erst umschalten, dann einmal neu starten.
if ( wp_get_theme()->get_stylesheet() !== 'lindenfeld' ) {
	switch_theme( 'lindenfeld' );
	passthru( PHP_BINARY . ' ' . escapeshellarg( __FILE__ ), $rc );
	exit( $rc );
}
update_option( 'blogname', 'Sportcenter Lindenfeld' );
update_option( 'blogdescription', 'Tennis, Squash, Badminton und Pickleball, rund um die Uhr' );
update_option( 'timezone_string', 'Europe/Zurich' );
update_option( 'date_format', 'j. F Y' );
update_option( 'time_format', 'H:i' );
update_option( 'start_of_week', 1 );
update_option( 'permalink_structure', '/%postname%/' );
update_option( 'default_comment_status', 'closed' );

// Beispielinhalte von WordPress weg.
foreach ( array( 1, 2 ) as $id ) { if ( get_post( $id ) ) { wp_delete_post( $id, true ); } }

function seite( $titel, $slug, $inhalt, $vorlage = '' ) {
	$vorhanden = get_page_by_path( $slug );
	if ( $vorhanden ) { return $vorhanden->ID; }
	$id = wp_insert_post( array( 'post_type' => 'page', 'post_status' => 'publish', 'post_title' => $titel, 'post_name' => $slug, 'post_content' => $inhalt ) );
	if ( $vorlage ) { update_post_meta( $id, '_wp_page_template', $vorlage ); }
	return $id;
}
function absatz( $t ) { return "<!-- wp:paragraph -->\n<p>$t</p>\n<!-- /wp:paragraph -->\n"; }
function titel( $t, $id = '' ) { $a = $id ? " id=\"$id\"" : ''; $j = $id ? "{\"anchor\":\"$id\"}" : ''; return "<!-- wp:heading $j -->\n<h2 class=\"wp-block-heading\"$a>$t</h2>\n<!-- /wp:heading -->\n"; }

$start_halle = seite( 'Startseite', 'start', '', 'startseite-halle' );
$start_tafel = seite( 'Startseite Tafel', 'start-tafel', '', 'startseite-tafel' );
$aktuell = seite( 'Aktuell', 'aktuell', '' );
seite( 'Sportangebot', 'sportangebot',
	titel( 'Tennis', 'tennis' ) . absatz( 'Fünf Hallenplätze mit neuem Teppichbelag, im Sommer vier Aussenplätze auf Sand. Reservation über GotCourts, Zugang mit Code rund um die Uhr.' ) .
	titel( 'Squash', 'squash' ) . absatz( 'Zwei Courts mit Glasrückwand. Schläger und Bälle gibt es an der Rezeption.' ) .
	titel( 'Badminton', 'badminton' ) . absatz( 'Fünf Felder in der beheizten Halle. Matten gegen rutschige Sohlen sind inklusive.' ) .
	titel( 'Pickleball', 'pickleball' ) . absatz( 'Drei Felder, das Netz ist mit zwei Handgriffen umgestellt. Paddel zum Mieten für 6 Franken.' ) .
	titel( 'Fitness', 'fitness' ) . absatz( 'Zumba am Montag, Body Workout am Dienstag, Aerobic am Mittwoch und Freitag. Schnuppertraining auf Anfrage.' )
);
seite( 'Preise', 'preise', titel( 'Winter 2026/27' ) . absatz( 'Gültig vom 14. September 2026 bis 18. April 2027. Die vollständige Preisliste mit Winterpass, Freistunden-Abo und Clubangebot steht hier als Tabelle, nicht mehr als PDF.' ) );
seite( 'Restaurant', 'restaurant', absatz( 'Täglich 11 bis 22 Uhr. Mittagsmenü ab 11.30 Uhr, Terrasse mit Blick auf die Aussenplätze. Reservation unter 062 200 00 00.' ) );
seite( 'Kontakt', 'kontakt', absatz( 'Sportcenter Lindenfeld AG, Hallenstrasse 7, 4699 Lindenfeld. Telefon 062 200 00 00, info@sportcenter-lindenfeld.ch.' ) );
seite( 'Impressum', 'impressum', absatz( 'Fiktiver Betrieb. Diese Seite ist eine Demo von formateins.' ) );
seite( 'Datenschutz', 'datenschutz', absatz( 'Fiktiver Betrieb. Diese Seite ist eine Demo von formateins.' ) );

update_option( 'show_on_front', 'page' );
update_option( 'page_on_front', $start_halle );
update_option( 'page_for_posts', $aktuell );

// Mitteilungen.
$beitraege = array(
	array( 'Preisliste Winter 2026/27 ist da', '2026-09-09 10:00:00', 'Alle Preise für Halle, Squash, Badminton und Pickleball sowie Winterpass und Abos sind aufgeschaltet. Neu steht alles direkt auf der Seite statt im PDF.', 'Die Preisliste für die Wintersaison vom 14. September 2026 bis 18. April 2027 ist aufgeschaltet. Winterpass ohne Prime Time 725 Franken, mit Prime Time 825 Franken. Wer Guthaben auflädt, bekommt zehn Prozent dazu.' ),
	array( 'Pickleball neu auf drei Feldern', '2026-10-02 09:00:00', 'Das Netz auf Feld 3 lässt sich jetzt ebenfalls umstellen. Dazu gibt es neue Paddel zum Mieten und leichte Banden gegen Störbälle.', 'Ab sofort kann Pickleball zusätzlich zu den Feldern 4 und 5 auch auf Feld 3 gespielt werden. Die Linien für die Non-Volley-Zone sind aufgemalt, verstellbare Banden trennen Pickleball von Badminton. Hochwertige Paddel gibt es für 6 Franken zum Mieten, Bezahlung beim Personal oder per Twint.' ),
	array( 'Clubangebot: Hallenplätze an 25 Wochenenden', '2026-10-18 16:00:00', 'Vereine reservieren ihre Hallenstunden für die ganze Saison zum Pauschalpreis. Meldefrist für Änderungen ist der 21. August.', 'Für die Wintersaison bieten wir den Tennisclubs die Hallenplätze an 25 Wochenenden als Clubangebot an: 730 Franken pro Platz und Stunde für die ganze Saison, also 29.20 Franken pro Stunde. Die Reservation läuft über den Club, die Rechnung geht direkt an den Club.' ),
);
foreach ( $beitraege as $b ) {
	if ( get_page_by_path( sanitize_title( $b[0] ), OBJECT, 'post' ) ) { continue; }
	wp_insert_post( array( 'post_type' => 'post', 'post_status' => 'publish', 'post_title' => $b[0], 'post_date' => $b[1], 'post_excerpt' => $b[2], 'post_content' => absatz( $b[3] ) ) );
}

// Anlaesse mit Datum, Ort und Link.
$anlaesse = array(
	array( 'Senioren-Turnier Herbst', '2026-11-02', '2. bis 7. November 2026', 'Tennishalle, Plätze 1 bis 3', 'https://www.mytennis.ch/', 'Einzel und Doppel in den Kategorien 45+ bis 70+. Anmeldung über mytennis bis 26. Oktober.' ),
	array( 'Schnuppertag Pickleball', '2026-11-15', 'Sonntag, 15. November 2026', 'Badmintonhalle, Felder 3 bis 5', '/kontakt/', 'Von 10 bis 16 Uhr, Paddel und Bälle stehen bereit. Kostenlos, keine Anmeldung nötig.' ),
	array( 'Senioren-Turnier Advent', '2026-11-30', '30. November bis 5. Dezember 2026', 'Tennishalle', 'https://www.mytennis.ch/', 'Zweites Seniorenturnier der Saison. Anmeldung über mytennis.' ),
	array( 'Lindenfeld Cup 2027', '2027-01-09', '9. bis 17. Januar 2027', 'Tennishalle, alle Plätze', 'https://www.mytennis.ch/', 'Das Hallenturnier des Jahres, N4 bis R9. Festwirtschaft am Finalwochenende.' ),
	array( 'Clubmeisterschaft Squash', '2027-02-06', 'Samstag, 6. Februar 2027', 'Squash-Courts', '/kontakt/', 'Offene Clubmeisterschaft, Anmeldung an der Rezeption bis 30. Januar.' ),
	array( 'Saisonstart Aussenplätze', '2027-04-19', 'Montag, 19. April 2027', 'Aussenplätze 1 bis 4', '/preise/', 'Die Sandplätze öffnen. Sommerpass ab sofort an der Rezeption.' ),
);
foreach ( $anlaesse as $a ) {
	if ( get_page_by_path( sanitize_title( $a[0] ), OBJECT, 'anlass' ) ) { continue; }
	$id = wp_insert_post( array( 'post_type' => 'anlass', 'post_status' => 'publish', 'post_title' => $a[0], 'post_content' => absatz( $a[5] ) ) );
	update_post_meta( $id, 'anlass_datum', $a[1] );
	update_post_meta( $id, 'anlass_datum_text', $a[2] );
	update_post_meta( $id, 'anlass_ort', $a[3] );
	update_post_meta( $id, 'anlass_link', $a[4] );
}

// Menue als Navigations-Beitrag. WordPress legt beim ersten Aufruf selbst einen
// mit der Seitenliste an; den ueberschreiben wir, der Navigation-Block ohne ref nimmt ihn.
$links = array( array( 'Aktuell', '/aktuell/' ), array( 'Sportangebot', '/sportangebot/' ), array( 'Anlässe', '/anlaesse/' ), array( 'Preise', '/preise/' ), array( 'Restaurant', '/restaurant/' ), array( 'Kontakt', '/kontakt/' ) );
$inhalt = '';
foreach ( $links as $l ) {
	$inhalt .= sprintf( '<!-- wp:navigation-link {"label":"%s","url":"%s","kind":"custom"} /-->' . "\n", esc_attr( $l[0] ), esc_url( $l[1] ) );
}
$navs = get_posts( array( 'post_type' => 'wp_navigation', 'post_status' => 'any', 'numberposts' => -1 ) );
if ( $navs ) {
	wp_update_post( array( 'ID' => $navs[0]->ID, 'post_title' => 'Hauptmenü', 'post_content' => $inhalt, 'post_status' => 'publish' ) );
	foreach ( array_slice( $navs, 1 ) as $n ) { wp_delete_post( $n->ID, true ); }
} else {
	wp_insert_post( array( 'post_type' => 'wp_navigation', 'post_status' => 'publish', 'post_title' => 'Hauptmenü', 'post_name' => 'hauptmenue', 'post_content' => $inhalt ) );
}

flush_rewrite_rules( false );
echo "Theme: " . wp_get_theme()->get( 'Name' ) . "\n";
echo "Seiten: " . wp_count_posts( 'page' )->publish . ", Beitraege: " . wp_count_posts( 'post' )->publish . ", Anlaesse: " . ( wp_count_posts( 'anlass' )->publish ?? '?' ) . "\n";
