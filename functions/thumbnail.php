<?php
/**
 * Add Abillty to View Thumbnails
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


function hiwebp_media($result, $path) {
    if ($result === false) {
		
        $displayable_image_types = array( IMAGETYPE_WEBP );
        $info = @getimagesize( $path );

        if (empty($info)) {
			
            $result = false;
        } 
		elseif (!in_array($info[2], $displayable_image_types)) {
            $result = false;
        } 
		else {
            $result = true;
        }
    }

    return $result;
}
add_filter('file_is_displayable_image', 'hiwebp_media', 10, 2);