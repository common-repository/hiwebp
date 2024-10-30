<?php
/*
Plugin Name: 	HiWebP
Plugin URI:		http://wordpress.org/plugins/hiwebp/
Description: 	Safe & Upload WebP files to the Media Library WordPress.
Version: 		1.3.1
Author: 		Masoud Darvishi
Author URI: 	https://profiles.wordpress.org/themefour/
Text Domain: 	hi-webp
Domain Path:	/languages
License: 		GPLv2 or later
License URI:	http://www.gnu.org/licenses/gpl-2.0.html

Copyright 2020 Masoud Darvishi

*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Variables
 */
$plugin_file = plugin_basename(__FILE__);
define( 'HIWEBP_VER', '1.3.1' );
define( 'HIWEBP_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );	
define( 'HIWEBP_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'HIWEBP_ASSETS_PATH', HIWEBP_PLUGIN_PATH . 'assets/' );	
define( 'HIWEBP_ASSETS_URL', HIWEBP_PLUGIN_URL . 'assets/' );	

/**
 * Includes / Core
 */
include( HIWEBP_PLUGIN_PATH . 'admin/admin-settings.php' );
include( HIWEBP_PLUGIN_PATH . 'functions/enqueue.php' );	
include( HIWEBP_PLUGIN_PATH . 'functions/mime_types.php' );		
include( HIWEBP_PLUGIN_PATH . 'functions/thumbnail.php' );

/**
 * Setup Localization
 */
add_action( 'init', 'hiwebp_lang_load_plugin' );
function hiwebp_lang_load_plugin() {
	load_plugin_textdomain( 'hi-webp', false, basename( dirname( __FILE__ ) ) . '/languages' );

}