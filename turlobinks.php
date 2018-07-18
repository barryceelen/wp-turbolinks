<?php
/**
 * @package   Turlobinks
 * @author    Barry Ceelen <b@rryceelen.com>
 * @license   GPL-2.0+
 * @link      https://github.com/barryceelen/wp-turlobinks
 * @copyright 2016 Barry Ceelen
 *
 * Plugin Name: Turlobinks
 * Plugin URI:  https://github.com/barryceelen/wp-turlobinks
 * Description: Use turbolinks for faster page loads.
 * Version:     0.0.2
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
}
