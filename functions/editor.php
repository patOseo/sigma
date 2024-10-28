<?php

/* NOT CURRENTLY IN USE */


add_filter( 'wp_theme_json_data_theme', 'custom_dynamic_content_size', 10, 2 );

function custom_dynamic_content_size( $theme_json, $context ) {
    // Get the current post object
    $post_id = null;

    // Check if we're in the editor and get the post ID
    if ( isset( $context ) && isset( $context->post ) ) {
        $post_id = $context->post->ID;
    } else {
        // Fallback for the frontend
        $post_id = get_the_ID();
    }

    if ( $post_id && get_post_type( $post_id ) === 'page' ) {
        // Get the ACF field value
        $content_size = get_field( 'max_width', $post_id );

        // Set content width based on the ACF field value
        if ( $content_size === 'narrow' ) {
            $max_width = '1076px';
        } else {
            $max_width = '1370px';
        }

        // Ensure the settings array exists
        if ( ! isset( $theme_json->settings ) ) {
            $theme_json->settings = array();
        }

        // Update the contentSize in theme.json layout settings
        $theme_json->settings['layout']['contentSize'] = $max_width;
    }

    return $theme_json;
}