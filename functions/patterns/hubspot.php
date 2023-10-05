<?php

// Register patterns
function sigma_register_hubspot_patterns() {
    $site_url = get_site_url();
	register_block_pattern(
	    'sigma/request-more-info',
	    array(
	        'title'       => __( 'Request More Information', 'sigma' ),
	        'categories'  => array('hubspot', 'sigma-all'),
	        'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading"><strong>Request More Information</strong></h3>
            <!-- /wp:heading -->
            
            <!-- wp:html -->
            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
            <script>
              hbspt.forms.create({
                region: "na1",
                portalId: "23966676",
                formId: "8cf7fc4d-c21e-4bcb-b54e-deca8ff9d5ec"
              });
            </script>
            <!-- /wp:html --></div>
            <!-- /wp:group -->',
	    )
	);
}
add_action( 'init', 'sigma_register_hubspot_patterns' );