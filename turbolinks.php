<?php
/**
 * @package   Turbolinks
 * @author    Barry Ceelen <b@rryceelen.com>
 * @license   GPL-2.0+
 * @link      https://github.com/barryceelen/wp-turbolinks
 * @copyright 2016 Barry Ceelen
 *
 * @wordpress-plugin
 * Plugin Name: Turbolinks
 * Plugin Name: Turbolinks
 * Plugin URI:  https://github.com/barryceelen/wp-turbolinks
 * Description: Use turbolinks for faster page loads.
 * Version:     0.0.1
 * Author:      Barry Ceelen
 * Author URI:  https://github.com/barryceelen
 * Text Domain: turbolinks
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! is_admin() ) {
	require_once( 'includes/functions.php' );
	add_action( 'template_redirect', 'turbolinks_add_xhr_location' );
	add_action( 'wp_enqueue_scripts', 'turbolinks_enqueue_scripts', 999 );
}
