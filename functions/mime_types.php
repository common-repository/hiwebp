<?php
/**
 * Add WebP mime types to WordPress
 *
 * Allows you to upload WebP files to the Media library like any other image.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Add Mime Types
 */
function hiwebp_upload_mimes( $mimes = array() ) {
     
	 /* For Setting Options (Coming Soon) */
	global $hiwebp_options;

	if ( empty( $hiwebp_options['restrict'] ) || current_user_can( 'administrator' ) ) {

		/* Allow WebP file upload */
		
		$mimes['webp'] = 'image/webp';

		return $mimes;

	} else {

		return $mimes;

	}

}
add_filter( 'upload_mimes', 'hiwebp_upload_mimes', 99 );

/**
 * Check Mime Types
 */
function hiwebp_upload_check( $checked, $file, $filename, $mimes ) {

	if ( ! $checked['type'] ) {

		$check_filetype		= wp_check_filetype( $filename, $mimes );
		$ext				= $check_filetype['ext'];
		$type				= $check_filetype['type'];
		$proper_filename	= $filename;

		if ( $type && 0 === strpos( $type, 'image/' ) && $ext !== 'webp' ) {
			$ext = $type = false;
		}

		$checked = compact( 'ext','type','proper_filename' );
	}

	return $checked;

}
add_filter( 'wp_check_filetype_and_ext', 'hiwebp_upload_check', 10, 4 );