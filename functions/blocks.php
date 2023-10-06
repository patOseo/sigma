<?php

// Create custom Gutenberg block category for ACF Blocks
function sigma_block_category( $categories, $post ) {
    array_unshift( $categories, array(
		'slug'	=> 'sigma-blocks',
		'title' => 'SIGMA Blocks'
	) );

	return $categories;
}
add_filter( 'block_categories_all', 'sigma_block_category', 1, 2);


/**
 * Registers custom ACF blocks.
 */
add_action( 'init', 'register_acf_blocks' );
function register_acf_blocks() {
    register_block_type( __DIR__ . '/../blocks/page-header' );
    register_block_type( __DIR__ . '/../blocks/blog-feed' );
    register_block_type( __DIR__ . '/../blocks/resources-feed' );
    register_block_type( __DIR__ . '/../blocks/assessments-feed' );
    register_block_type( __DIR__ . '/../blocks/accordion' );
    register_block_type( __DIR__ . '/../blocks/accordion-item' );
    register_block_type( __DIR__ . '/../blocks/timeline' );
    register_block_type( __DIR__ . '/../blocks/stages' );
    register_block_type( __DIR__ . '/../blocks/shadowbox' );
    register_block_type( __DIR__ . '/../blocks/testimonials' );
    register_block_type( __DIR__ . '/../blocks/image-grid-slider' );
    register_block_type( __DIR__ . '/../blocks/team-members' );
    register_block_type( __DIR__ . '/../blocks/multipart' );
    register_block_type( __DIR__ . '/../blocks/multipart-section' );
    register_block_type( __DIR__ . '/../blocks/modal-popup' );
}
