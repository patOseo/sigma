<?php

// Register patterns
function sigma_register_cta_patterns() {
    $site_url = get_site_url();
	register_block_pattern(
	    'sigma/call-to-action',
	    array(
	        'title'       => __( 'Call-to-action', 'sigma' ),
	        'categories'  => array('ctas', 'sigma-all'),
	        'content'     => '<!-- wp:group {"className":"py-6","layout":{"type":"constrained"}} -->
            <div class="wp-block-group py-6"><!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"width":"15%"} -->
            <div class="wp-block-column" style="flex-basis:15%"></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"width":"70%"} -->
            <div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"textAlign":"center","textColor":"sigmadarkgreen"} -->
            <h2 class="wp-block-heading has-text-align-center has-sigmadarkgreen-color has-text-color"><strong>Need Help Getting Started?</strong></h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">SIGMA’s&nbsp;<a href="https://www.sigmaassessmentsystems.com/succession/succession-planning-launch-series/" target="_blank" rel="noreferrer noopener">Succession Planning Launch</a>&nbsp;is an efficient and affordable solution designed to establish a strong succession planning process and fortify leadership for optimal performance, even in unpredictable circumstances. Contact our team today to learn how we can deliver a full-year, custom succession plan in just two half-day workshops.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"className":"mt-3"} -->
            <div class="wp-block-button mt-3"><a class="wp-block-button__link wp-element-button" href="https://www.sigmaassessmentsystems.com/succession/succession-planning-launch-series/">SUCCESSION PLANNING LAUNCH</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"width":"15%"} -->
            <div class="wp-block-column" style="flex-basis:15%"></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns --></div>
            <!-- /wp:group -->',
	    )
	);
    register_block_pattern(
	    'sigma/call-to-action-w-divider',
	    array(
	        'title'       => __( 'Call-to-action with Divider', 'sigma' ),
	        'categories'  => array('ctas', 'sigma-all'),
	        'content'     => '<!-- wp:group {"className":"py-6","layout":{"type":"constrained"}} -->
            <div class="wp-block-group py-6"><!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"width":"15%"} -->
            <div class="wp-block-column" style="flex-basis:15%"></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"width":"70%"} -->
            <div class="wp-block-column" style="flex-basis:70%"><!-- wp:separator -->
            <hr class="wp-block-separator has-alpha-channel-opacity"/>
            <!-- /wp:separator -->
            
            <!-- wp:heading {"textAlign":"center","textColor":"sigmadarkgreen"} -->
            <h2 class="wp-block-heading has-text-align-center has-sigmadarkgreen-color has-text-color"><strong>Build on the strength of your leadership.</strong></h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">Contact us to discuss how we can help your organization prepare for the future.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"className":"mt-3"} -->
            <div class="wp-block-button mt-3"><a class="wp-block-button__link wp-element-button" href="/contact/">CONTACT US</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"width":"15%"} -->
            <div class="wp-block-column" style="flex-basis:15%"></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns --></div>
            <!-- /wp:group -->',
	    )
	);
    register_block_pattern(
	    'sigma/call-to-action-glen',
	    array(
	        'title'       => __( 'Call-to-action Glen', 'sigma' ),
	        'categories'  => array('ctas', 'sigma-all'),
	        'content'     => '<!-- wp:group {"className":"px-lg-6 py-6","layout":{"type":"constrained"}} -->
            <div class="wp-block-group px-lg-6 py-6"><!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"width":"10%"} -->
            <div class="wp-block-column" style="flex-basis:10%"></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"width":"80%"} -->
            <div class="wp-block-column" style="flex-basis:80%"><!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"width":"30%"} -->
            <div class="wp-block-column" style="flex-basis:30%"><!-- wp:image {"align":"center","id":661,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image aligncenter size-full"><img src="' . $site_url . '/wp-content/uploads/2018/08/glenPhoto-1.jpg" alt="consultant" class="wp-image-661"/></figure>
            <!-- /wp:image --></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"width":"70%"} -->
            <div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"textAlign":"left","textColor":"sigmadarkgreen"} -->
            <h2 class="wp-block-heading has-text-align-left has-sigmadarkgreen-color has-text-color"><strong>Looking for More?</strong></h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"left"} -->
            <p class="has-text-align-left">Would you like to learn more about SIGMA’s succession planning services? Talk to one of our experts and get started today. <a href="https://www.linkedin.com/in/gharrison/" target="_blank" rel="noreferrer noopener">Glen Harrison</a> is an organizational transformation consultant and succession planning expert. Over the course of his career, Glen has worked with one-third of the Fortune 500 list and with every level of government in Canada and the United States. Having worked with numerous clients to build robust succession plans from the ground up, Glen has extensive experience in the application of SIGMA’s products and services to help organizations realize their people potential.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"sigmagreen","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"className":"mt-3 is-style-outline"} -->
            <div class="wp-block-button mt-3 is-style-outline" style="font-style:normal;font-weight:400"><a class="wp-block-button__link has-sigmagreen-color has-white-background-color has-text-color has-background wp-element-button" href="mailto:gharrison@sigmaassessmentsystems.com">Email Glen</a></div>
            <!-- /wp:button -->
            
            <!-- wp:button {"backgroundColor":"white","textColor":"sigmagreen","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"className":"mt-3 is-style-outline"} -->
            <div class="wp-block-button mt-3 is-style-outline" style="font-style:normal;font-weight:400"><a class="wp-block-button__link has-sigmagreen-color has-white-background-color has-text-color has-background wp-element-button" href="https://meetings.hubspot.com/glen-harrison/sigma?__hstc=102999647.b91aceb936e3e3613b870ebbfb64831d.1683899028657.1695740915649.1695748815615.97&amp;__hssc=102999647.4.1695748815615&amp;__hsfp=2106842337" target="_blank" rel="noreferrer noopener">Schedule a Call</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns --></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"width":"10%"} -->
            <div class="wp-block-column" style="flex-basis:10%"></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns --></div>
            <!-- /wp:group -->',
	    )
	);

    register_block_pattern(
	    'sigma/cta-glen-expert',
	    array(
	        'title'       => __( 'Glen - Talk to an Expert', 'sigma' ),
	        'categories'  => array('ctas', 'sigma-all'),
	        'content'     => '<!-- wp:group {"className":"px-lg-6 py-6","layout":{"type":"constrained"}} -->
            <div class="wp-block-group px-lg-6 py-6"><!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"width":"10%"} -->
            <div class="wp-block-column" style="flex-basis:10%"></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"width":"80%"} -->
            <div class="wp-block-column" style="flex-basis:80%"><!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"width":"30%"} -->
            <div class="wp-block-column" style="flex-basis:30%"><!-- wp:image {"align":"center","id":661,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image aligncenter size-full"><img src="' . $site_url . '/wp-content/uploads/2018/08/glenPhoto-1.jpg" alt="consultant" class="wp-image-661"/></figure>
            <!-- /wp:image --></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"width":"70%"} -->
            <div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"textAlign":"left"} -->
            <h2 class="wp-block-heading has-text-align-left"><strong>Talk to an Expert</strong></h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"left"} -->
            <p class="has-text-align-left">Glen Harrison is an organizational transformation consultant and succession planning expert. Over the course of his career, Glen has worked with one-third of the Fortune 500 list and with every level of government in Canada and the United States. Having worked with numerous clients to build robust succession plans from the ground up, Glen has extensive experience in the application of SIGMA’s products and services to help organizations realize their people potential. If you are interested in learning more about SIGMA’s succession planning services, send Glen an email or give him a call. He’d be pleased to chat with you.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"sigmagreen","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"className":"mt-3 is-style-outline"} -->
            <div class="wp-block-button mt-3 is-style-outline" style="font-style:normal;font-weight:400"><a class="wp-block-button__link has-sigmagreen-color has-white-background-color has-text-color has-background wp-element-button" href="mailto:gharrison@sigmaassessmentsystems.com">Email Glen</a></div>
            <!-- /wp:button -->
            
            <!-- wp:button {"backgroundColor":"white","textColor":"sigmagreen","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"className":"mt-3 is-style-outline"} -->
            <div class="wp-block-button mt-3 is-style-outline" style="font-style:normal;font-weight:400"><a class="wp-block-button__link has-sigmagreen-color has-white-background-color has-text-color has-background wp-element-button" href="https://meetings.hubspot.com/glen-harrison/sigma?__hstc=102999647.b91aceb936e3e3613b870ebbfb64831d.1683899028657.1695740915649.1695748815615.97&amp;__hssc=102999647.4.1695748815615&amp;__hsfp=2106842337" target="_blank" rel="noreferrer noopener">Schedule a Call</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns --></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"width":"10%"} -->
            <div class="wp-block-column" style="flex-basis:10%"></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns --></div>
            <!-- /wp:group -->',
	    )
	);

    register_block_pattern(
	    'sigma/simple-cta',
	    array(
	        'title'       => __( 'Simple Call-to-action', 'sigma' ),
	        'categories'  => array('ctas', 'sigma-all'),
	        'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
            <h2 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)">We do the work. You get the results.</h2>
            <!-- /wp:heading -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"lightestgrey"} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-lightestgrey-background-color has-background wp-element-button" href="https://www.sigmaassessmentsystems.com/wp-content/uploads/2023/01/Launch-Series-1-Pager.pdf">Download Succession Planning Launch Program Summary</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:group -->',
	    )
	);
}
add_action( 'init', 'sigma_register_cta_patterns' );