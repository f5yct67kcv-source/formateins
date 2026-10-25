<?php
// Router fuer php -S: schoene Adressen wie auf einem Apache mit .htaccess.
$root = $_SERVER['DOCUMENT_ROOT'];
$pfad = urldecode( parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ) );
if ( $pfad !== '/' && is_file( $root . $pfad ) ) {
	return false;
}
if ( is_dir( $root . $pfad ) && is_file( $root . rtrim( $pfad, '/' ) . '/index.php' ) ) {
	$_SERVER['SCRIPT_NAME'] = rtrim( $pfad, '/' ) . '/index.php';
	$_SERVER['SCRIPT_FILENAME'] = $root . $_SERVER['SCRIPT_NAME'];
	require $_SERVER['SCRIPT_FILENAME'];
	return true;
}
$_SERVER['SCRIPT_NAME'] = '/index.php';
$_SERVER['PHP_SELF'] = '/index.php';
$_SERVER['SCRIPT_FILENAME'] = $root . '/index.php';
require $root . '/index.php';
