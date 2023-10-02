<?php 

/**
 * Display Post Blocks 
 *
 */
function dev_display_post_blocks() {
	global $post;
	print_r( esc_html( $post->post_content ) );
}
add_action( 'wp_footer', 'dev_display_post_blocks' );