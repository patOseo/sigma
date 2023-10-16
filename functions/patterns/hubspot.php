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
  register_block_pattern(
    'sigma/contact-us-form',
    array(
        'title'       => __( 'Contact Us Form', 'sigma' ),
        'categories'  => array('hubspot', 'sigma-all'),
        'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:html -->
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
        <script>
          hbspt.forms.create({
            region: "na1",
            portalId: "23966676",
            formId: "30196bfd-a127-4c2c-8800-8af5f9c39f74"
          });
        </script>
        <!-- /wp:html --></div>
        <!-- /wp:group -->',
    )
  );
  register_block_pattern(
    'sigma/careers-form',
    array(
        'title'       => __( 'Careers Form', 'sigma' ),
        'categories'  => array('hubspot', 'sigma-all'),
        'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:html -->
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
        <script>
          hbspt.forms.create({
            region: "na1",
            portalId: "23966676",
            formId: "fa1711fd-c909-4f7e-b822-dee074c2e25f"
          });
        </script>
        <!-- /wp:html --></div>
        <!-- /wp:group -->',
    )
  );
  register_block_pattern(
    'sigma/email-gate-knowledge-transfer-guide-form',
    array(
        'title'       => __( 'Email Gate - Knowledge Transfer Guide Form', 'sigma' ),
        'categories'  => array('hubspot', 'sigma-all'),
        'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:html -->
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
        <script>
          hbspt.forms.create({
            region: "na1",
            portalId: "23966676",
            formId: "8f2cd7a6-e796-4cda-98b4-fcf42ee62db3"
          });
        </script>
        <!-- /wp:html --></div>
        <!-- /wp:group -->',
    )
  );
  register_block_pattern(
    'sigma/email-gate-LCIA-teambuilding-guide-form',
    array(
        'title'       => __( 'Email Gate - LCIA Teambuilding Guide Form', 'sigma' ),
        'categories'  => array('hubspot', 'sigma-all'),
        'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:html -->
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
        <script>
          hbspt.forms.create({
            region: "na1",
            portalId: "23966676",
            formId: "ac29ed16-aaeb-486b-9637-14de43800366"
          });
        </script>
        <!-- /wp:html --></div>
        <!-- /wp:group -->',
    )
  );
  register_block_pattern(
    'sigma/email-gate-succession-planning-guide-form',
    array(
        'title'       => __( 'Email Gate - Succession Planning Guide Form', 'sigma' ),
        'categories'  => array('hubspot', 'sigma-all'),
        'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:html -->
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
        <script>
          hbspt.forms.create({
            region: "na1",
            portalId: "23966676",
            formId: "2db98164-36d8-4bab-9f5b-236d35a472ff"
          });
        </script>
        <!-- /wp:html --></div>
        <!-- /wp:group -->',
    )
  );
  register_block_pattern(
    'sigma/launch-or-cert-signups-form',
    array(
        'title'       => __( 'Launch OR Cert Signups Form', 'sigma' ),
        'categories'  => array('hubspot', 'sigma-all'),
        'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:html -->
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
        <script>
          hbspt.forms.create({
            region: "na1",
            portalId: "23966676",
            formId: "ba1a4841-cb1d-43b6-9ac1-e3a2ec5cfda5"
          });
        </script>
        <!-- /wp:html --></div>
        <!-- /wp:group -->',
    )
  );
  register_block_pattern(
    'sigma/lunch-learn-form',
    array(
        'title'       => __( 'Lunch and Learn Form', 'sigma' ),
        'categories'  => array('hubspot', 'sigma-all'),
        'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:html -->
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
        <script>
          hbspt.forms.create({
            region: "na1",
            portalId: "23966676",
            formId: "cb425be0-364f-4a7f-adc7-f8c3c042cfd1"
          });
        </script>
        <!-- /wp:html --></div>
        <!-- /wp:group -->',
    )
  );
  register_block_pattern(
    'sigma/lcia-free-trial-form',
    array(
        'title'       => __( 'LCIA Free Trial Form', 'sigma' ),
        'categories'  => array('hubspot', 'sigma-all'),
        'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:html -->
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
        <script>
          hbspt.forms.create({
            region: "na1",
            portalId: "23966676",
            formId: "206f2ce4-0df6-4bcc-b597-d3643a8db9ce"
          });
        </script>
        <!-- /wp:html --></div>
        <!-- /wp:group -->',
    )
  );
  register_block_pattern(
    'sigma/lspr-freebie-form',
    array(
        'title'       => __( 'LSP - Free Trial Form', 'sigma' ),
        'categories'  => array('hubspot', 'sigma-all'),
        'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:html -->
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
        <script>
          hbspt.forms.create({
            region: "na1",
            portalId: "23966676",
            formId: "30f7a52e-2f8a-484e-98fa-cbb5f3571de8"
          });
        </script>
        <!-- /wp:html --></div>
        <!-- /wp:group -->',
    )
  );
  register_block_pattern(
    'sigma/newsletter-form',
    array(
        'title'       => __( 'Newsletter Signup Form', 'sigma' ),
        'categories'  => array('hubspot', 'sigma-all'),
        'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:html -->
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
        <script>
          hbspt.forms.create({
            region: "na1",
            portalId: "23966676",
            formId: "06b4383e-1f27-4813-8721-ecb4ff501115"
          });
        </script>
        <!-- /wp:html --></div>
        <!-- /wp:group -->',
    )
  );
  register_block_pattern(
    'sigma/testimonial-form',
    array(
        'title'       => __( 'Testimonial Request Form', 'sigma' ),
        'categories'  => array('hubspot', 'sigma-all'),
        'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:html -->
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
        <script>
          hbspt.forms.create({
            region: "na1",
            portalId: "23966676",
            formId: "b9675a9a-2873-48d0-886b-d29f1dde9c95"
          });
        </script>
        <!-- /wp:html --></div>
        <!-- /wp:group -->',
    )
  );
}
add_action( 'init', 'sigma_register_hubspot_patterns' );