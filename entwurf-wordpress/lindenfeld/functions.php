<?php
/**
 * Lindenfeld: Demo-Theme fuer ein Sportcenter.
 *
 * Alles, was sich laufend aendert (Aktuelles, Anlaesse, Preise, Hinweise),
 * pflegt das Center im Editor. Das Theme liefert dafuer die Formen:
 * eine eigene Inhaltsart «Anlass» mit Datum, Muster fuer die Startseite
 * und eine Hinweis-Leiste als Vorlagenteil.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'LINDENFELD_VERSION', '0.1.0' );

/* Grundausstattung. */
add_action( 'after_setup_theme', function () {
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/theme.css' );
	load_theme_textdomain( 'lindenfeld', get_template_directory() . '/languages' );
} );

/* Eigene Styles, vorne und im Editor dieselben. */
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'lindenfeld', get_template_directory_uri() . '/assets/theme.css', array(), LINDENFELD_VERSION );
} );

/* Musterkategorie, damit die Bausteine im Einfuegen-Dialog beisammen stehen. */
add_action( 'init', function () {
	register_block_pattern_category( 'lindenfeld', array(
		'label'       => __( 'Sportcenter', 'lindenfeld' ),
		'description' => __( 'Bausteine der Startseite: Hero, Sportarten, Tafel, Anlässe, Preise.', 'lindenfeld' ),
	) );
} );

/*
 * Inhaltsart «Anlass»: Turniere, Schnuppertage, Vereinsanlaesse.
 * Datum und Ort sind eigene Felder, damit die Liste nach Datum sortiert
 * und vergangene Anlaesse von selbst verschwinden.
 */
add_action( 'init', function () {
	register_post_type( 'anlass', array(
		'labels' => array(
			'name'               => __( 'Anlässe', 'lindenfeld' ),
			'singular_name'      => __( 'Anlass', 'lindenfeld' ),
			'add_new'            => __( 'Neuer Anlass', 'lindenfeld' ),
			'add_new_item'       => __( 'Anlass erfassen', 'lindenfeld' ),
			'edit_item'          => __( 'Anlass bearbeiten', 'lindenfeld' ),
			'all_items'          => __( 'Alle Anlässe', 'lindenfeld' ),
			'search_items'       => __( 'Anlässe suchen', 'lindenfeld' ),
			'not_found'          => __( 'Keine Anlässe gefunden.', 'lindenfeld' ),
		),
		'public'        => true,
		'show_in_rest'  => true,
		'has_archive'   => 'anlaesse',
		'rewrite'       => array( 'slug' => 'anlass', 'with_front' => false ),
		'menu_icon'     => 'dashicons-calendar-alt',
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' ),
		'template'      => array(
			array( 'core/paragraph', array( 'placeholder' => 'Worum geht es, wer kann mitmachen, wie meldet man sich an?' ) ),
		),
	) );

	$felder = array(
		'anlass_datum'      => __( 'Datum fuer die Sortierung (JJJJ-MM-TT)', 'lindenfeld' ),
		'anlass_datum_text' => __( 'Datum, wie es auf der Seite steht', 'lindenfeld' ),
		'anlass_ort'        => __( 'Ort oder Halle', 'lindenfeld' ),
		'anlass_link'       => __( 'Link zur Anmeldung', 'lindenfeld' ),
	);
	foreach ( $felder as $schluessel => $beschreibung ) {
		register_post_meta( 'anlass', $schluessel, array(
			'type'              => 'string',
			'description'       => $beschreibung,
			'single'            => true,
			'default'           => '',
			'show_in_rest'      => true,
			'sanitize_callback' => 'sanitize_text_field',
			'auth_callback'     => function () { return current_user_can( 'edit_posts' ); },
		) );
	}
} );

/*
 * Query-Loop fuer Anlaesse: nach Datum aufsteigend, nur Kuenftiges.
 * Greift bei jedem Query-Loop-Block, der Anlaesse zeigt.
 */
add_filter( 'query_loop_block_query_vars', function ( $query, $block ) {
	if ( isset( $query['post_type'] ) && 'anlass' === $query['post_type'] ) {
		$query['meta_key'] = 'anlass_datum';
		$query['orderby']  = 'meta_value';
		$query['order']    = 'ASC';
		$query['meta_query'] = array(
			array(
				'key'     => 'anlass_datum',
				'value'   => wp_date( 'Y-m-d' ),
				'compare' => '>=',
				'type'    => 'DATE',
			),
		);
	}
	return $query;
}, 10, 2 );

/* Dasselbe fuer das Archiv unter /anlaesse. */
add_action( 'pre_get_posts', function ( $query ) {
	if ( is_admin() || ! $query->is_main_query() || ! $query->is_post_type_archive( 'anlass' ) ) {
		return;
	}
	$query->set( 'meta_key', 'anlass_datum' );
	$query->set( 'orderby', 'meta_value' );
	$query->set( 'order', 'ASC' );
	$query->set( 'posts_per_page', 24 );
} );

/* Datum im Deutsch der Seite, ohne Plugin. */
add_filter( 'option_date_format', function ( $format ) {
	return $format ? $format : 'j. F Y';
} );

/*
 * Monats- und Tagesnamen auf Deutsch, falls kein deutsches Sprachpaket
 * installiert ist. Live kommt de_CH ueber WordPress selbst, dann greift
 * dieser Filter nicht.
 */
$lindenfeld_deutsch = function ( $datum ) {
	if ( str_starts_with( get_locale(), 'de' ) ) {
		return $datum;
	}
	static $karte = array(
		'January' => 'Januar', 'February' => 'Februar', 'March' => 'März', 'May' => 'Mai', 'June' => 'Juni',
		'July' => 'Juli', 'October' => 'Oktober', 'December' => 'Dezember',
		'Monday' => 'Montag', 'Tuesday' => 'Dienstag', 'Wednesday' => 'Mittwoch', 'Thursday' => 'Donnerstag',
		'Friday' => 'Freitag', 'Saturday' => 'Samstag', 'Sunday' => 'Sonntag',
	);
	return strtr( $datum, $karte );
};
add_filter( 'date_i18n', $lindenfeld_deutsch );
add_filter( 'wp_date', $lindenfeld_deutsch );
