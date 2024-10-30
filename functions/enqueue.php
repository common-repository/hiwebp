<?php
/**
 * Enqueue scripts and styles
 * This file is to enqueue the scripts and styles both admin and front end
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function hiwebp_enqueue_style_scripts() {
    wp_enqueue_style( 'hiwebp-plugin-styles', HIWEBP_ASSETS_URL.('css/hiwebp_admin.css')); // Style
}
add_action( 'admin_enqueue_scripts', 'hiwebp_enqueue_style_scripts' );