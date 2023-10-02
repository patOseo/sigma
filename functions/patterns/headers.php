<?php

// Register patterns
function sigma_register_headers_patterns() {
	register_block_pattern(
	    'sigma/page-header',
	    array(
	        'title'       => __( 'Page Header', 'sigma' ),
	        'categories'  => array('headers', 'sigma-all'),
	        'content'     => '<!-- wp:acf/header {"name":"acf/header","data":{"bg_img":4656,"_bg_img":"field_650b146f0c88e"},"mode":"preview"} -->
            <!-- wp:group {"style":{"color":{"background":"#0000004d"}},"className":"w-100 py-5 text-center text-white"} -->
            <div class="wp-block-group w-100 py-5 text-center text-white has-background" style="background-color:#0000004d"><!-- wp:heading {"level":1,"className":"mb-0 text-uppercase text-white text-shadow display-3"} -->
            <h1 class="wp-block-heading mb-0 text-uppercase text-white text-shadow display-3">Heading Title</h1>
            <!-- /wp:heading --></div>
            <!-- /wp:group -->
            <!-- /wp:acf/header -->',
	    )
	);
    register_block_pattern(
	    'sigma/page-header-w-subheading',
	    array(
	        'title'       => __( 'Page Header with Subheading', 'sigma' ),
	        'categories'  => array('headers', 'sigma-all'),
	        'content'     => '<!-- wp:acf/header {"name":"acf/header","data":{"bg_img":"","_bg_img":"field_650b146f0c88e"},"mode":"preview"} -->
            <!-- wp:group {"style":{"color":{"background":"#0000004d"}},"className":"w-100 py-5 text-center text-white","layout":{"type":"constrained"}} -->
            <div class="wp-block-group w-100 py-5 text-center text-white has-background" style="background-color:#0000004d"><!-- wp:heading {"className":"text-uppercase text-white text-shadow display-3"} -->
            <h2 class="wp-block-heading text-uppercase text-white text-shadow display-3">Heading Title</h2>
            <!-- /wp:heading -->
            
            <!-- wp:heading {"textColor":"white","className":"mt-4 mb-0"} -->
            <h2 class="wp-block-heading mt-4 mb-0 has-white-color has-text-color">This is where the subheading goes.</h2>
            <!-- /wp:heading --></div>
            <!-- /wp:group -->
            <!-- /wp:acf/header -->',
	    )
	);
}
add_action( 'init', 'sigma_register_headers_patterns' );