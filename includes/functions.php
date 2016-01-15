<?php
/**
 * Plugin functions.
 *
 * @package   Turlobinks
 * @author    Barry Ceelen <b@rryceelen.com>
 * @license   GPL-2.0+
 * @link      https://github.com/barryceelen/wp-turlobinks
 * @copyright 2016 Barry Ceelen
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Add header.
 *
 * @since 0.0.1
 */
function turlobinks_add_xhr_location() {
	header( "X-XHR-Current-Location: ". turlobinks_self_url() );
}

/**
 * Get the full URL of the current page.
 *
 * @since 0.0.1
 *
 * @see http://stackoverflow.com/questions/2236873/getting-the-full-url-of-the-current-page-php
 *
 * @return string URL of the current page.
 */
function turlobinks_self_url() {
	$s = empty( $_SERVER["HTTPS"] ) ? '' : ( $_SERVER["HTTPS"] == "on" ) ? "s" : "";
	$protocol = "http" . $s;
	$port = ( $_SERVER["SERVER_PORT"] == "80" ) ? "" : ( ":".$_SERVER["SERVER_PORT"] );
	return $protocol . "://" . $_SERVER['SERVER_NAME'] . $port . $_SERVER['REQUEST_URI'];
}

/**
 * Enqueue scripts.
 *
 * @since 0.0.1
 *
 * @todo Check what's what with jquery.turbolinks
 * @todo Load minified file(s)
 *
 * @see wp_enqueue_script()
 * @see wp_register_script()
 * @see plugins_url()
 */
function turlobinks_enqueue_scripts() {

	// wp_register_script(
	// 	'turbolinks',
	// 	plugins_url( '/js/turbolinks.js' , __FILE__ ),
	// 	false,
	// 	null,
	// 	false
	// );

	// wp_enqueue_script(
	// 	'jquery-turbolinks',
	// 	plugins_url( '/js/jquery.turbolinks.js' , __FILE__ ),
	// 	array( 'jquery', 'turbolinks' ),
	// 	null,
	// 	false
	// );

	wp_enqueue_script(
		'turbolinks',
		plugins_url( '/js/turbolinks.js' , dirname( __FILE__ ) ),
		false,
		null,
		false
	);
}
