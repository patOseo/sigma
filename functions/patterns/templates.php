<?php

// Register patterns
function sigma_register_templates_patterns() {
    $site_url = get_site_url();
    register_block_pattern(
	    'sigma/succession-planning-page',
	    array(
	        'title'       => __( 'Succession Planning Page', 'sigma' ),
	        'categories'  => array('templates'),
	        'content'     => '<!-- wp:acf/header {"name":"acf/header","data":{"bg_img":15350,"_bg_img":"field_650b146f0c88e"},"mode":"preview"} -->
            <!-- wp:group {"style":{"color":{"background":"#0000004d"}},"className":"w-100 py-5 text-center text-white","layout":{"type":"constrained"}} -->
            <div class="wp-block-group w-100 py-5 text-center text-white has-background" style="background-color:#0000004d"><!-- wp:heading {"level":1,"className":"text-uppercase text-white text-shadow display-3"} -->
            <h1 class="wp-block-heading text-uppercase text-white text-shadow display-3">Succession Planning SERVICES</h1>
            <!-- /wp:heading -->
            
            <!-- wp:heading {"textColor":"white","className":"mt-4 mb-0"} -->
            <h2 class="wp-block-heading mt-4 mb-0 has-white-color has-text-color">Create a succession plan that will prepare <br>your next generation of talent.</h2>
            <!-- /wp:heading --></div>
            <!-- /wp:group -->
            <!-- /wp:acf/header -->
            
            <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:yoast-seo/breadcrumbs /-->
            
            <!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
            <div class="wp-block-column" style="flex-basis:25%"></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"width":"90%"} -->
            <div class="wp-block-column" style="flex-basis:90%"><!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">Succession planning is a critical aspect of any organization’s long-term success, as it provides a roadmap for ensuring continuity during times of change. Whether it’s due to retirement, promotion, or unforeseen circumstances, having a well-designed succession plan in place is essential for smoothly transitioning leadership roles and maintaining business momentum.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">For more than 50 years, SIGMA’s experts have combined evidence-based theory with practical industry experience to deliver effective succession planning services. Explore our services below.</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"width":"25%"} -->
            <div class="wp-block-column" style="flex-basis:25%"></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->
            
            <!-- wp:heading {"textAlign":"center","textColor":"sigmadarkgreen"} -->
            <h2 class="wp-block-heading has-text-align-center has-sigmadarkgreen-color has-text-color">SIGMA’s Succession Planning Services</h2>
            <!-- /wp:heading --></div>
            <!-- /wp:group -->
            
            <!-- wp:spacer {"height":"40px"} -->
            <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            
            <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"className":"row gx-0"} -->
            <div class="wp-block-columns row gx-0"><!-- wp:column {"className":"col"} -->
            <div class="wp-block-column col"><!-- wp:acf/shadowbox {"name":"acf/shadowbox","mode":"preview"} -->
            <!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"textColor":"sigmablue","className":"h3"} -->
            <h2 class="wp-block-heading has-text-align-center h3 has-sigmablue-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40)"><a href="' . $site_url . '/succession/succession-planning-launch-series/">Succession Planning Launch</a></h2>
            <!-- /wp:heading -->
            
            <!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"textColor":"sigmadarkgreen","className":"h4"} -->
            <h3 class="wp-block-heading has-text-align-center h4 has-sigmadarkgreen-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40)">Need a succession plan today?</h3>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">Get started immediately with SIGMA’s Succession Planning Launch. Our consultants deliver a detailed succession plan for each of your leaders in just six weeks.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:image {"align":"center","id":19206,"width":"150px","height":"undefinedpx","sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image aligncenter size-full is-resized"><img src="' . $site_url . '/wp-content/uploads/2023/04/Launch-Icon-1.png" alt="" class="wp-image-19206" style="width:150px;height:undefinedpx"/></figure>
            <!-- /wp:image -->
            <!-- /wp:acf/shadowbox --></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"className":"col"} -->
            <div class="wp-block-column col"><!-- wp:acf/shadowbox {"name":"acf/shadowbox","mode":"preview"} -->
            <!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"textColor":"sigmablue","className":"h3"} -->
            <h2 class="wp-block-heading has-text-align-center h3 has-sigmablue-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40)"><a href="' . $site_url . '/customized-consulting-2/">Custom Succession Planning Consulting</a></h2>
            <!-- /wp:heading -->
            
            <!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"textColor":"sigmadarkgreen","className":"h4"} -->
            <h3 class="wp-block-heading has-text-align-center h4 has-sigmadarkgreen-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40)">Seeking a customized succession planning solution?</h3>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">Our consultants will work with you to create a project plan that meets the unique needs of your organization. Engagements can be as large or as small as needed.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:image {"align":"center","id":19205,"width":"150px","height":"undefinedpx","sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image aligncenter size-full is-resized"><img src="' . $site_url . '/wp-content/uploads/2023/04/Customized-Consulting-1.png" alt="" class="wp-image-19205" style="width:150px;height:undefinedpx"/></figure>
            <!-- /wp:image -->
            <!-- /wp:acf/shadowbox --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->
            
            <!-- wp:columns {"className":"row gx-0"} -->
            <div class="wp-block-columns row gx-0"><!-- wp:column {"className":"col"} -->
            <div class="wp-block-column col"><!-- wp:acf/shadowbox {"name":"acf/shadowbox","mode":"preview"} -->
            <!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"textColor":"sigmablue","className":"h3"} -->
            <h2 class="wp-block-heading has-text-align-center h3 has-sigmablue-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40)"><a href="' . $site_url . '/succession-planning-template/">Succession Planning Guide</a></h2>
            <!-- /wp:heading -->
            
            <!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"textColor":"sigmadarkgreen","className":"h4"} -->
            <h3 class="wp-block-heading has-text-align-center h4 has-sigmadarkgreen-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40)">Want to try it on your own?</h3>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">Download SIGMA’s Succession Planning Guide. This guide combines all our best tools and templates in one powerful resource.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:image {"align":"center","id":19207,"width":"150px","height":"undefinedpx","sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image aligncenter size-full is-resized"><img src="' . $site_url . '/wp-content/uploads/2023/04/SP-Guide-Icon-1.png" alt="" class="wp-image-19207" style="width:150px;height:undefinedpx"/></figure>
            <!-- /wp:image -->
            <!-- /wp:acf/shadowbox --></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"className":"col"} -->
            <div class="wp-block-column col"><!-- wp:acf/shadowbox {"name":"acf/shadowbox","mode":"preview"} -->
            <!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"textColor":"sigmablue","className":"h3"} -->
            <h2 class="wp-block-heading has-text-align-center h3 has-sigmablue-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40)"><a href="' . $site_url . '/succession-planning-certification-workshop/">Succession Planning Training</a></h2>
            <!-- /wp:heading -->
            
            <!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"textColor":"sigmadarkgreen","className":"h4"} -->
            <h3 class="wp-block-heading has-text-align-center h4 has-sigmadarkgreen-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40)">Interested in learning the fundamentals?</h3>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">Complete SIGMA’s online, self-guided training. These five modules will give you a comprehensive introduction to the succession planning process.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:image {"align":"center","id":19208,"width":"150px","height":"undefinedpx","sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image aligncenter size-full is-resized"><img src="' . $site_url . '/wp-content/uploads/2023/04/SP-Training-Icon-1.png" alt="" class="wp-image-19208" style="width:150px;height:undefinedpx"/></figure>
            <!-- /wp:image -->
            <!-- /wp:acf/shadowbox --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:button -->
            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#getStarted">Ready to Start Succession Planning?</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:group -->
            
            <!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"sigmablue","textColor":"white","layout":{"type":"constrained"}} -->
            <div class="wp-block-group alignfull has-white-color has-sigmablue-background-color has-text-color has-background" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80);padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0"}}},"textColor":"white","className":"h3"} -->
            <p class="has-text-align-center h3 has-white-color has-text-color" style="margin-top:0">Not sure what your organization needs? </p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"0"}}}} -->
            <p class="has-text-align-center" style="margin-bottom:0">Take&nbsp;<a href="' . $site_url . '/succession/#">SIGMA’s succession planning quiz</a>&nbsp;to learn about the state of your succession planning process and find out which SIGMA solution is right for you.</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group -->
            
            <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"textColor":"darkgrey"} -->
            <h4 class="wp-block-heading has-text-align-center has-darkgrey-color has-text-color">Trusted by over 8,500 organizations across North America, including:</h4>
            <!-- /wp:heading -->
            
            <!-- wp:acf/image-grid-slider {"name":"acf/image-grid-slider","data":{"num_rows":"2","_num_rows":"field_6515904055562","num_cols":"4","_num_cols":"field_65158ee348ca4","images":["19979","19977","19975","19972","19978","19976","19974","19971","19970","19968","16942","16940","19969","19967","16941","16939","16938","16936","16934","16932","16937","16935","16933","16931","16930","16928","16926","16924","16929","16927","16925","16923","16922","16920","16918","16916","16921","16919","16917","16915"],"_images":"field_65158cac1d30f"},"mode":"edit"} /-->
            
            <!-- wp:heading {"textAlign":"center","textColor":"sigmadarkgreen"} -->
            <h2 class="wp-block-heading has-text-align-center has-sigmadarkgreen-color has-text-color">What Our Clients Have to Say</h2>
            <!-- /wp:heading --></div>
            <!-- /wp:group -->
            
            <!-- wp:acf/testimonials {"name":"acf/testimonials","data":{"select_category":"","_select_category":"field_65134e44c90d3"},"mode":"preview","className":"py-6"} /-->
            
            <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|80"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"lightestgrey","className":"rounded-3","layout":{"type":"constrained"}} -->
            <div class="wp-block-group rounded-3 has-lightestgrey-background-color has-background" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--80);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"align":"center","className":"h3"} -->
            <p class="has-text-align-center h3">Looking for resources to help your succession planning efforts? </p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1.4}},"fontSize":"medium"} -->
            <p class="has-text-align-center has-medium-font-size" style="line-height:1.4">Visit SIGMA’s<a href="' . $site_url . '/succession/succession-planning-template-library/" target="_blank" rel="noreferrer noopener">&nbsp;Succession Planning Template Library</a>&nbsp;for free form-fillable PDF templates, and refer to our Succession Planning FAQ for answers to&nbsp;<a href="' . $site_url . '/succession-faq/" target="_blank" rel="noreferrer noopener">frequently asked questions</a>.</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->
            
            <!-- wp:group {"align":"full","backgroundColor":"sigmablue","textColor":"white","className":"blue-section-with-heading position-relative my-6 pt-6 pb-3 border-6 border-top border-bottom border-secondary","layout":{"type":"constrained"}} -->
            <div class="wp-block-group alignfull blue-section-with-heading position-relative my-6 pt-6 pb-3 border-6 border-top border-bottom border-secondary has-white-color has-sigmablue-background-color has-text-color has-background"><!-- wp:heading {"level":3,"backgroundColor":"sigmagreen","className":"blue-section-title position-absolute top-0 start-50 translate-middle px-5 py-2 text-white text-center rounded-pill"} -->
            <h3 class="wp-block-heading blue-section-title position-absolute top-0 start-50 translate-middle px-5 py-2 text-white text-center rounded-pill has-sigmagreen-background-color has-background"><a href="' . $site_url . '/sample-succession-planning-process/">Our Succession Planning Process</a></h3>
            <!-- /wp:heading -->
            
            <!-- wp:group {"className":"py-5","layout":{"type":"constrained"}} -->
            <div class="wp-block-group py-5"><!-- wp:acf/timeline {"name":"acf/timeline","data":{"heading_html_tag":"h4","_heading_html_tag":"field_63efeeea7b237","timeline_content_0_icon":508,"_timeline_content_0_icon":"field_6510df0bbfb16","timeline_content_0_link":{"title":"","url":"/succession-planning-where-to-start/","target":""},"_timeline_content_0_link":"field_6512f859ac8e6","timeline_content_0_heading":"IDENTIFYING CRITICAL ROLES","_timeline_content_0_heading":"field_63efeec77b235","timeline_content_0_content":"Determine which roles your organization should target through its succession program.","_timeline_content_0_content":"field_63efeecd7b236","timeline_content_1_icon":522,"_timeline_content_1_icon":"field_6510df0bbfb16","timeline_content_1_link":{"title":"","url":"/succession-planning-building-success-profiles/","target":""},"_timeline_content_1_link":"field_6512f859ac8e6","timeline_content_1_heading":"BUILDING SUCCESS PROFILES","_timeline_content_1_heading":"field_63efeec77b235","timeline_content_1_content":"Describe the talent composition required for each critical role today and in the future.","_timeline_content_1_content":"field_63efeecd7b236","timeline_content_2_icon":524,"_timeline_content_2_icon":"field_6510df0bbfb16","timeline_content_2_link":{"title":"","url":"/succession-planning-nominating-successors/","target":""},"_timeline_content_2_link":"field_6512f859ac8e6","timeline_content_2_heading":"NOMINATING SUCCESSORS","_timeline_content_2_heading":"field_63efeec77b235","timeline_content_2_content":"Choose candidates for each critical role through a nomination survey.","_timeline_content_2_content":"field_63efeecd7b236","timeline_content_3_icon":526,"_timeline_content_3_icon":"field_6510df0bbfb16","timeline_content_3_link":{"title":"","url":"/assessing-succession-needs/","target":""},"_timeline_content_3_link":"field_6512f859ac8e6","timeline_content_3_heading":"ASSESSING SUCCESSION NEEDS","_timeline_content_3_heading":"field_63efeec77b235","timeline_content_3_content":"Summarize each candidate’s talent profile and identify gaps to target through development.","_timeline_content_3_content":"field_63efeecd7b236","timeline_content_4_icon":527,"_timeline_content_4_icon":"field_6510df0bbfb16","timeline_content_4_link":{"title":"","url":"/develop-talent/","target":""},"_timeline_content_4_link":"field_6512f859ac8e6","timeline_content_4_heading":"DEVELOPING TALENT","_timeline_content_4_heading":"field_63efeec77b235","timeline_content_4_content":"Prepare development plans for candidates and track their development activities.","_timeline_content_4_content":"field_63efeecd7b236","timeline_content_5_icon":12547,"_timeline_content_5_icon":"field_6510df0bbfb16","timeline_content_5_link":{"title":"","url":"/talent-progress-scorecard-template/","target":""},"_timeline_content_5_link":"field_6512f859ac8e6","timeline_content_5_heading":"MEASURING PROGRESS","_timeline_content_5_heading":"field_63efeec77b235","timeline_content_5_content":"Measure the impact of your succession plan.","_timeline_content_5_content":"field_63efeecd7b236","timeline_content":6,"_timeline_content":"field_63efeea87b234"},"mode":"preview","className":"mb-6"} /--></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->
            
            <!-- wp:group {"className":"px-lg-6 py-6","layout":{"type":"constrained"}} -->
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
            <p class="has-text-align-left">Would you like to learn more about SIGMA’s succession planning services? Talk to one of our experts and get started today.&nbsp;<a href="https://www.linkedin.com/in/gharrison/" target="_blank" rel="noreferrer noopener">Glen Harrison</a>&nbsp;is an organizational transformation consultant and succession planning expert. Over the course of his career, Glen has worked with one-third of the Fortune 500 list and with every level of government in Canada and the United States. Having worked with numerous clients to build robust succession plans from the ground up, Glen has extensive experience in the application of SIGMA’s products and services to help organizations realize their people potential.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"sigmagreen","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"className":"mt-3 is-style-outline"} -->
            <div class="wp-block-button mt-3 is-style-outline" style="font-style:normal;font-weight:400"><a class="wp-block-button__link has-sigmagreen-color has-white-background-color has-text-color has-background wp-element-button" href="' . $site_url . '/succession/succession-planning-launch-series/">Email Glen</a></div>
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
            <!-- /wp:group -->
            
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:image {"id":19667,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="' . $site_url . '/wp-content/uploads/2023/06/Screen-Shot-2023-06-13-at-1.30.09-PM-1.png" alt="White flowers in front of a blue sky; cover tile for blog on the costly consequence of insufficient succession planning." class="wp-image-19667"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:heading {"level":3,"textColor":"sigmagreen"} -->
            <h3 class="wp-block-heading has-sigmagreen-color has-text-color"><a href="' . $site_url . '/costly-consequence-of-insufficient-succession-planning/">The Costly Consequence of Insufficient Planning</a></h3>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph -->
            <p>Succession planning is a critical process that ensures organizations have the right people in place to fill key leadership roles when they become vacant. Despite its importance, many organizations neglect to plan for succession.</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:column -->
            
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:image {"id":19666,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img src="' . $site_url . '/wp-content/uploads/2023/06/Screen-Shot-2023-06-13-at-1.29.45-PM-1.png" alt="Frosty evergreen trees; cover tile for succession planning case study." class="wp-image-19666"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:heading {"level":3,"textColor":"sigmagreen"} -->
            <h3 class="wp-block-heading has-sigmagreen-color has-text-color"><a href="' . $site_url . '/a-case-study-on-succession-planning-outsource-or-do-it-yourself/">A Case Study on Succession Planning</a></h3>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph -->
            <p>Sandy is the Vice President of Human Resources (VP of HR) at a mid-sized tech company in California. Her company has a strong executive team, however, most of them are legacy employees quickly approaching retirement.</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:column -->
            
            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:image {"id":19668,"width":"471px","height":"301px","sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full is-resized"><img src="' . $site_url . '/wp-content/uploads/2023/06/Screen-Shot-2023-06-13-at-1.30.47-PM-1.png" alt="Row of green trees in front of a field; cover tile for succession planning guide landing page." class="wp-image-19668" style="width:471px;height:301px"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:heading {"level":3,"textColor":"sigmagreen"} -->
            <h3 class="wp-block-heading has-sigmagreen-color has-text-color"><a href="' . $site_url . '/succession-planning-template/">SIGMA’s Succession Planning Guide</a> </h3>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph -->
            <p>Succession planning is a strategic process that ensures operational continuity when talent changes occur. SIGMA’s Succession Planning Guide makes this process simple by walking you through what is required at every stage.</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->
            
            <!-- wp:heading {"textColor":"sigmadarkgreen"} -->
            <h2 class="wp-block-heading has-sigmadarkgreen-color has-text-color">Succession Planning FAQs</h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph -->
            <p>These are some of the most commonly asked questions we hear in regard to succession planning. Can’t find what you’re looking for? Give us a call! We’d be happy to answer your question.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:acf/accordion {"name":"acf/accordion","data":{"html_tag":"h4","_html_tag":"field_651083d95f171","one_item":"1","_one_item":"field_6510c3bdb9257","include_icons":"0","_include_icons":"field_6510cac51a576","advanced_mode":"0","_advanced_mode":"field_65171a64c3ce4","accordion_0_title":"What is the process of succession planning?","_accordion_0_title":"field_65108359b0ffe","accordion_0_content":"Every organization has different needs when it comes to succession planning. Our \u003ca href=\u0022' . $site_url . '/sample-succession-planning-process/\u0022\u003esuccession planning process\u003c/a\u003e is supported by data-driven assessments that help your organization make the appropriate decision about who is next in line.\r\n\u003col\u003e\r\n \t\u003cli\u003e\u003cstrong\u003eIdentify critical roles:\u003c/strong\u003e Prioritize roles that might be urgent due to upcoming exits or retirements or are critical to business success.\u003c/li\u003e\r\n \t\u003cli\u003e\u003cstrong\u003eUnderstand critical roles\u003c/strong\u003e: Determine what is required to perform the role now as well as in the future, due to potential changes in the industry, or other determining factors.\u003c/li\u003e\r\n \t\u003cli\u003e\u003cstrong\u003eNominate potential successors:\u003c/strong\u003e Identify potential candidates for succession and determine current ability to address succession in critical roles.\u003c/li\u003e\r\n \t\u003cli\u003e\u003cstrong\u003eAssess potential successors:\u003c/strong\u003e Determine the degree of readiness of potential successors to take over critical roles.\u003c/li\u003e\r\n \t\u003cli\u003e\u003cstrong\u003eDevelop potential successors:\u003c/strong\u003e Foster development of potential successors by leveraging coaching and training opportunities.\u003c/li\u003e\r\n \t\u003cli\u003e\u003cstrong\u003eMeasure progress\u003c/strong\u003e: Use objective and subjective measures to track the progress of candidates and readiness for transitioning potential successors into critical roles.\u003c/li\u003e\r\n\u003c/ol\u003e\r\nFor more information on SIGMA’s succession planning process check out our \u003ca href=\u0022' . $site_url . '/succession-planning-template/\u0022\u003esuccession planning template\u003c/a\u003e and the\u003ca href=\u0022' . $site_url . '/succession/succession-planning-webinar/\u0022\u003e succession planning webinar\u003c/a\u003e.","_accordion_0_content":"field_6510c30e2506c","accordion_1_title":"How do I create a succession plan?","_accordion_1_title":"field_65108359b0ffe","accordion_1_content":"The steps to developing a succession plan are outlined above in the simple succession planning process. In addition to the 6-step succession planning process, the following are important to keep in mind when creating a succession plan.\r\n\u003col\u003e\r\n \t\u003cli\u003eSuccession planning should be a company-wide initiative involving senior management and employees, not just HR.\u003c/li\u003e\r\n \t\u003cli\u003eFocus on finding the best candidate for each role, not just seeking adequate replacements.\u003c/li\u003e\r\n \t\u003cli\u003eTransparent and frequent communication with all involved is an important way to maintain enthusiasm and commitment to the initiative.\u003c/li\u003e\r\n\u003c/ol\u003e\r\nMeasure the maturity of your succession plan with SIGMA’s \u003ca href=\u0022' . $site_url . '/succession-planning-success-checklist/\u0022\u003esuccession planning success checklist\u003c/a\u003e.","_accordion_1_content":"field_6510c30e2506c","accordion_2_title":"What are the benefits of succession planning?","_accordion_2_title":"field_65108359b0ffe","accordion_2_content":"When done properly, succession planning can:\r\n\u003col\u003e\r\n \t\u003cli\u003eProtect your organization from unforeseen exits and retirements and help the organization remain flexible in the face of staffing challenges.\u003c/li\u003e\r\n \t\u003cli\u003eRetain top talent within your organization and identify meaningful development opportunities by starting a dialogue about employee interests and ambitions.\u003c/li\u003e\r\n \t\u003cli\u003eAttract candidates by \u003ca href=\u0022http://atrract%20candidates%20by%20hiring%20with%20your%20succession%20plan%20in%20mind/\u0022\u003ehiring with your succession plan in mind.\u003c/a\u003e Clearly identify the applicants interested in future development opportunities and help them visualize their potential career trajectory within your organization.\u003c/li\u003e\r\n \t\u003cli\u003eIdentify potential succession opportunities for qualified candidates to help improve the \u003ca href=\u0022' . $site_url . '/succession-bench-diversity/\u0022\u003ediversity among senior positions\u003c/a\u003e.\u003c/li\u003e\r\n\u003c/ol\u003e","_accordion_2_content":"field_6510c30e2506c","accordion_3_title":"How do you identify key positions in succession planning?","_accordion_3_title":"field_65108359b0ffe","accordion_3_content":"Consider the following criteria when \u003ca href=\u0022' . $site_url . '/succession-planning-where-to-start/\u0022\u003eidentifying critical roles\u003c/a\u003e for succession planning:\r\n\u003col\u003e\r\n \t\u003cli\u003eImpact of the role on business operations\u003c/li\u003e\r\n \t\u003cli\u003eAvailability of external succession candidates\u003c/li\u003e\r\n \t\u003cli\u003eAvailability of internal succession candidates\u003c/li\u003e\r\n \t\u003cli\u003eUniqueness of skills or knowledge required for position\u003c/li\u003e\r\n\u003c/ol\u003e\r\nDownload SIGMA’s\u003ca href=\u0022' . $site_url . '/critical-roles-identification-questionnaire/\u0022\u003e critical role identification questionnaire\u003c/a\u003e to determine the key positions within your organization.","_accordion_3_content":"field_6510c30e2506c","accordion_4_title":"What is the difference between succession planning and replacement hiring?","_accordion_4_title":"field_65108359b0ffe","accordion_4_content":"\u003cfigure class=\u0022wp-block-table aligncenter\u0022\u003e\r\n\u003cdiv class=\u0022atwm-responsive-table\u0022\u003e\r\n\u003cdiv class=\u0022atwm-responsive-table\u0022\u003e\r\n\u003ctable\u003e\r\n\u003ctbody\u003e\r\n\u003ctr\u003e\r\n\u003ctd\u003e\u003cstrong\u003eSuccession Planning\u003c/strong\u003e\u003c/td\u003e\r\n\u003ctd\u003e\u003cstrong\u003eReplacement Hiring \u003c/strong\u003e\u003c/td\u003e\r\n\u003c/tr\u003e\r\n\u003ctr\u003e\r\n\u003ctd\u003eA long-term approach to talent management\u003c/td\u003e\r\n\u003ctd\u003eReactionary and occurs only when there is an immediate need\u003c/td\u003e\r\n\u003c/tr\u003e\r\n\u003ctr\u003e\r\n\u003ctd\u003eIntegrates with broader company policies\u003c/td\u003e\r\n\u003ctd\u003eDriven by operational needs\u003c/td\u003e\r\n\u003c/tr\u003e\r\n\u003ctr\u003e\r\n\u003ctd\u003eAllows for effective decision-making because candidates can be developed\r\nto meet role requirements and carefully compared\u003c/td\u003e\r\n\u003ctd\u003eDefaults to a single candidate without comparing a broad range of candidates\u003c/td\u003e\r\n\u003c/tr\u003e\r\n\u003c/tbody\u003e\r\n\u003c/table\u003e\r\n\u003c/div\u003e\r\n\u003c/div\u003e\u003c/figure\u003e\r\nAvoid replacement hiring with the \u003ca href=\u0022' . $site_url . '/succession-planning-vs-replacement-hiring-checklist/\u0022\u003esuccession planning vs replacement hiring checklist\u003c/a\u003e.","_accordion_4_content":"field_6510c30e2506c","accordion_5_title":"How should I approach succession planning?","_accordion_5_title":"field_65108359b0ffe","accordion_5_content":"For your succession plan to be successful it is important to dedicate the time and resources needed for the initiative. Begin by outlining a systematic process to develop and implement your plan, or leverage an already proven process. Make sure you build in accountability and track the progress of your succession plan and include objective and subjective measures to evaluate your success.\r\n\r\nThere is no better place to start than our \u003ca href=\u0022' . $site_url . '/succession/succession-planning-launch-series/\u0022\u003eSuccession Planning Launch.\u003c/a\u003e","_accordion_5_content":"field_6510c30e2506c","accordion_6_title":"How should I communicate my succession plan to employees?","_accordion_6_title":"field_65108359b0ffe","accordion_6_content":"It is important to be transparent when communicating with your employees about succession. This includes successes, setbacks, and challenges. Maintaining regular communication with your staff can help you \u003ca href=\u0022' . $site_url . '/gaining-employee-buy-in-for-succession/\u0022\u003egain employee buy-in \u003c/a\u003eand enthusiasm about the process. By obtaining \u003ca href=\u0022' . $site_url . '/getting-senior-management-buy-in-for-succession-planning/\u0022\u003ebuy-in from senior management\u003c/a\u003e you can leverage them as credible channels to communicate succession planning information within your organization.","_accordion_6_content":"field_6510c30e2506c","accordion_7_title":"How much does succession planning cost?","_accordion_7_title":"field_65108359b0ffe","accordion_7_content":"Having a proper succession plan can save your organization a lot of money. According to a recent study by Harvard Business Review (HBR), the S\u0026amp;P 1500 forgoes close to $1 trillion in market value each year due to poorly managed CEO and C-suite transitions. HBR estimates that better succession planning alone could help increase annual company valuations and investor returns by 20-25%. The absence of a strong leadership bench can be detrimental to both employee, shareholder, and public relations. Read our blog to learn more about how a good succession plan saves money, and contact us regarding pricing information for SIGMA’s Succession Planning Launch.","_accordion_7_content":"field_6510c30e2506c","accordion_8_title":"How do you implement succession planning in an organization?","_accordion_8_title":"field_65108359b0ffe","accordion_8_content":"To begin succession planning, start by considering the core values of your organization and how they might be achieved through succession. This will help you determine the goals you want to achieve with succession planning. Identify any industry trends and challenges that might be faced by the organization in the future to proactively address these situations in your plan. Remember to take into account organization-specific statistics on turnover, retirement, and promotion to target important outcomes for the organization.\r\n\r\nTake the first step towards developing a detailed implementation plan by scheduling your \u003ca href=\u0022' . $site_url . '/succession/succession-planning-launch-series/\u0022\u003eSuccession Planning Launch\u003c/a\u003e.","_accordion_8_content":"field_6510c30e2506c","accordion_9_title":"When should we start succession planning?","_accordion_9_title":"field_65108359b0ffe","accordion_9_content":"The best time to start a succession plan is now. As a strategic initiative, succession planning can take time before you begin to see positive results. The earlier you begin your succession plan, the more prepared you will be for unexpected vacancies in critical roles in the future.","_accordion_9_content":"field_6510c30e2506c","accordion_10_title":"How will we know if our succession plan is working?","_accordion_10_title":"field_65108359b0ffe","accordion_10_content":"In order to know whether or not your succession plan is working it is important to \u003ca href=\u0022' . $site_url . '/measuring-success/\u0022\u003emeasure the progress of your plan\u003c/a\u003e. Your formal succession plan should be evaluated on a regular basis with both objective and subjective measures.\r\n\r\nExamples of objective measures include the percentage of position you are able to fill internally or the number of years it takes for the average candidate to be ready for a new role. Subjective measures such as employee engagement or job satisfaction are also important.\r\n\r\nWhichever metrics you choose, be sure that they are related to your succession planning goals and that they are things you can measure regularly.","_accordion_10_content":"field_6510c30e2506c","accordion":11,"_accordion":"field_65108333b0ffd"},"mode":"preview"} /--></div>
            <!-- /wp:group -->
            
            <!-- wp:spacer -->
            <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            
            <!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"sigmablue","textColor":"white","className":"blue-section-with-heading position-relative py-6 border-6 border-top border-bottom border-secondary","layout":{"type":"constrained"}} -->
            <div class="wp-block-group alignfull blue-section-with-heading position-relative py-6 border-6 border-top border-bottom border-secondary has-white-color has-sigmablue-background-color has-text-color has-background" id="getStarted" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":3,"backgroundColor":"sigmagreen","className":"blue-section-title position-absolute top-0 start-50 translate-middle px-5 py-2 text-white text-center rounded-pill"} -->
            <h3 class="wp-block-heading blue-section-title position-absolute top-0 start-50 translate-middle px-5 py-2 text-white text-center rounded-pill has-sigmagreen-background-color has-background">Ready to Start Succession Planning?</h3>
            <!-- /wp:heading -->
            
            <!-- wp:group {"className":"py-5","layout":{"type":"constrained"}} -->
            <div class="wp-block-group py-5"><!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"width":"20%"} -->
            <div class="wp-block-column" style="flex-basis:20%"></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"width":"60%"} -->
            <div class="wp-block-column" style="flex-basis:60%"><!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">SIGMA’s Succession Planning Launch is a great place to begin. In just two sessions, we will work with your leadership team to build a succinct succession plan that meets the needs of your organization.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:gravityforms/form {"formId":"9","title":false,"description":false,"inputPrimaryColor":"#204ce5"} /--></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"width":"20%"} -->
            <div class="wp-block-column" style="flex-basis:20%"></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->',
	    )
	);

	register_block_pattern(
	    'sigma/assessment-cat',
	    array(
	        'title'       => __( 'Assessment Category Template', 'sigma' ),
	        'categories'  => array('templates'),
	        'content'     => '<!-- wp:acf/header {"name":"acf/header","data":{"bg_img":4938,"_bg_img":"field_650b146f0c88e"},"mode":"preview"} -->
            <!-- wp:group {"style":{"color":{"background":"#0000004d"}},"className":"w-100 py-5 text-center text-white"} -->
            <div class="wp-block-group w-100 py-5 text-center text-white has-background" style="background-color:#0000004d"><!-- wp:post-title {"level":1,"className":"mb-1 text-uppercase text-white text-shadow display-3"} /--></div>
            <!-- /wp:group -->
            <!-- /wp:acf/header -->
            
            <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:yoast-seo/breadcrumbs /-->
            
            <!-- wp:heading {"textColor":"sigmagreen"} -->
            <h2 class="wp-block-heading has-sigmagreen-color has-text-color">BRING YOUR LEADERSHIP TO LIFE.</h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph -->
            <p>Put our science-based leadership assessments to work to uncover the potential in your people and your organization.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph -->
            <p>Leadership competencies and characteristics can often be hard to see on the surface. At SIGMA, we help organizations measure these qualities as well as other leadership traits and skills that make individuals successful leaders. By utilizing our assessments, you\'ll be able to identify the leadership strengths and developmental opportunities of existing and prospective leaders in your organization.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:heading {"textColor":"sigmagreen"} -->
            <h2 class="wp-block-heading has-sigmagreen-color has-text-color">SIGMA’s Leadership Assessments</h2>
            <!-- /wp:heading -->
            
            <!-- wp:acf/assessments-feed {"name":"acf/assessments-feed","data":{"select_mode":"1","_select_mode":"field_65118cc70b0b3","select_category":"6","_select_category":"field_65118d4807727"},"mode":"preview"} /-->
            
            <!-- wp:heading {"textColor":"sigmagreen"} -->
            <h2 class="wp-block-heading has-sigmagreen-color has-text-color">Why Use Leadership Assessments?</h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph -->
            <p>Leadership assessments are powerful tools for&nbsp;<a href="https://www.sigmaassessmentsystems.com/talent-development/">talent development</a>. They are also incredibly versatile. Leadership assessments can be used to:</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:list -->
            <ul><!-- wp:list-item -->
            <li>Recognize talent</li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li>Uncover potential</li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li>Inform hiring and promotion</li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li>Identify strengths</li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li>Identify opportunities for growth</li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li>Increase self-awareness</li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li>Provide a foundation for talent development programs</li>
            <!-- /wp:list-item --></ul>
            <!-- /wp:list -->
            
            <!-- wp:paragraph -->
            <p>There are many benefits to using leadership assessments to support the processes listed above. Some of those benefits include increased employee engagement, increased job satisfaction, stronger internal talent pools, decreased turnover, and improved company culture. But these benefits only apply when the assessment is valid and reliable. SIGMA’s assessments are. Each of our assessments has been scientifically developed and industry tested. That means you can trust your results and be confident that you are getting the most out of your leadership assessment.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:heading {"textColor":"sigmagreen"} -->
            <h2 class="wp-block-heading has-sigmagreen-color has-text-color">Leadership Assessment FAQs</h2>
            <!-- /wp:heading -->
            
            <!-- wp:acf/accordion {"name":"acf/accordion","data":{"html_tag":"p","_html_tag":"field_651083d95f171","one_item":"1","_one_item":"field_6510c3bdb9257","include_icons":"0","_include_icons":"field_6510cac51a576","accordion_0_title":"What are leadership assessments?","_accordion_0_title":"field_65108359b0ffe","accordion_0_content":"Leadership assessments are tools that can be used to objectively evaluate leaders on competencies and characteristics that are hard to quantify, and may be hard to see on a surface level.","_accordion_0_content":"field_6510c30e2506c","accordion_1_title":"Who should use leadership development assessments?","_accordion_1_title":"field_65108359b0ffe","accordion_1_content":"Leadership assessments should be used by organizations that want to foster leadership development and further their \u003ca href=\u0022https://www.sigmaassessmentsystems.com/succession/\u0022\u003esuccession planning\u003c/a\u003e and talent development efforts.","_accordion_1_content":"field_6510c30e2506c","accordion_2_title":"What do leadership assessments measure?","_accordion_2_title":"field_65108359b0ffe","accordion_2_content":"Leadership tests can measure a multitude of items including personality, behaviour, leadership skills, work styles, occupational stress, and more.","_accordion_2_content":"field_6510c30e2506c","accordion_3_title":"What makes a good leadership assessment?","_accordion_3_title":"field_65108359b0ffe","accordion_3_content":"The best leadership assessments are valid, reliable, and objective. They also use continuous measures, which provide a range of results, rather than grouping test takers into particular categories. Strong leadership assessments should also provide actionable insights that can be used as a starting point in the leadership development process.","_accordion_3_content":"field_6510c30e2506c","accordion":4,"_accordion":"field_65108333b0ffd"},"mode":"preview"} /-->
            
            <!-- wp:spacer {"height":"40px"} -->
            <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            
            <!-- wp:group {"className":"py-6","layout":{"type":"constrained"}} -->
            <div class="wp-block-group py-6"><!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"width":"15%"} -->
            <div class="wp-block-column" style="flex-basis:15%"></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"width":"70%"} -->
            <div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"textAlign":"center","textColor":"sigmadarkgreen"} -->
            <h2 class="wp-block-heading has-text-align-center has-sigmadarkgreen-color has-text-color"><strong>Let us help you leverage your people to maximize your company.</strong></h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">Contact us today to learn more about our suite of leadership development assessments.</p>
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
            <!-- /wp:group --></div>
            <!-- /wp:group -->',
	    )
	);
    register_block_pattern(
	    'sigma/assessment-single',
	    array(
	        'title'       => __( 'Single Assessment Page', 'sigma' ),
	        'categories'  => array('templates'),
	        'content'     => '<!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"width":"75%"} -->
            <div class="wp-block-column" style="flex-basis:75%"><!-- wp:paragraph -->
            <p><img width="150" height="79" srcset="https://www.sigmaassessmentsystems.com/wp-content/uploads/2019/10/LSP-R_SIGMA-300pxh-300x158.png 300w, https://www.sigmaassessmentsystems.com/wp-content/uploads/2019/10/LSP-R_SIGMA-300pxh.png 570w" src="https://www.sigmaassessmentsystems.com/wp-content/uploads/2019/10/LSP-R_SIGMA-300pxh-300x158.png" alt="LSP-R Icon"></p>
            <!-- /wp:paragraph -->
            
            <!-- wp:heading -->
            <h2 class="wp-block-heading">What is the LSP-R™ Focus?</h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph -->
            <p>The Leadership Skills Profile-Revised (LSP-R) Focus is a personality-based leadership skills assessment that is useful for guiding employee and leader development efforts. The LSP-R Focus is built on years of rigorous development efforts and validation research. When paired with the&nbsp;<a href="https://www.sigmaassessmentsystems.com/benchmarking-lsp-r/" target="_blank" rel="noreferrer noopener">benchmarking option</a>, it provides a flexible experience, allowing you to choose which leadership traits to include in your report. As a result, you get a customizable test that provides personalized advice for test-takers. Our user-friendly report will guide leaders to focus development efforts on those competencies that have the greatest potential to become strengths.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:heading -->
            <h2 class="wp-block-heading">Who Should Use the LSP-R Focus?</h2>
            <!-- /wp:heading -->
            
            <!-- wp:list -->
            <ul><!-- wp:list-item -->
            <li>Leaders or potential leaders who would like to gain insight into their current strengths and development opportunities</li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li>Organizations looking to incorporate a scientifically valid assessment with their existing strategic or HR policies, including talent management programs, high-potential development plans, or succession planning processes</li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li>Managers and HR professionals who want to provide focus and structure to their leadership development and executive coaching programs</li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li>For more information about who should consider using the LSP-R, read our blog on&nbsp;<a href="https://www.sigmaassessmentsystems.com/personality-tests-in-the-workplace/" target="_blank" rel="noreferrer noopener">Personality Tests and Their Role in the Workplace</a>, and&nbsp;<a href="https://www.sigmaassessmentsystems.com/why-are-leadership-assessments-important/" target="_blank" rel="noreferrer noopener">Why Are Leadership Assessments Important?</a></li>
            <!-- /wp:list-item --></ul>
            <!-- /wp:list -->
            
            <!-- wp:heading -->
            <h2 class="wp-block-heading">Why Should I Use The LSP-R Focus?</h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph -->
            <p><strong>Convenient Administration.</strong>&nbsp;The LSP-R can be completed in 25 minutes on SIGMA’s online platform, with reports available immediately upon completion. When paired with the benchmarking option, this leadership skills assessment tool allows you to identify in advance those leadership competencies that are most critical for effectiveness in your organization and generate a report that includes information on only those competencies.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph -->
            <p><strong>User-Friendly Report.</strong>&nbsp;The LSP-R Focus Report gives a snapshot of scores on all 50 competencies in SIGMA’s&nbsp;<a href="https://www.sigmaassessmentsystems.com/competency-framework/" target="_blank" rel="noreferrer noopener">Leadership Competency Framework</a>. It highlights which competencies are optimal for development, while remaining flexible enough for leaders to choose their own priorities. This report includes an easy-to-use development guide to support either self-directed or coaching-augmented leadership development.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph -->
            <p><strong>Powerful and Robust</strong>. The LSP-R uses the latest science on leadership theory and personality measurement to provide your organization with a valid, reliable measurement of leadership potential. The LSP-R’s 50 leadership skills are sorted into four broad categories, allowing you to not only consider potential on individual competencies, but also review scores on Cognitive, Interpersonal, Personal, and Senior Leadership Skills. The LSP-R can also be paired with SIGMA’s&nbsp;<a href="https://www.sigmaassessmentsystems.com/individual-groups/" target="_blank" rel="noreferrer noopener">coaching services</a>. We offer individual coaching, group coaching, and team training in the form of&nbsp;<a href="https://www.sigmaassessmentsystems.com/lunch-and-learn/">Lunch and Learns</a>. You will also receive access to development tools and other supporting resources, such as SIGMA’s&nbsp;<a href="https://www.sigmaassessmentsystems.com/leadership-skill-development-series/" target="_blank" rel="noreferrer noopener">Leadership Series</a>.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph -->
            <p><strong>Superior Development.</strong>&nbsp;The LSP-R items were carefully chosen from a pool of over 4,700 personality items, drawing on content from three of SIGMA’s seminal assessments: the Personality Research Form (PRF), Jackson Personality Inventory-Revised (JPIR), and Survey of Work Styles (SWS). For more information about the LSP-R’s development and validation take a look at the&nbsp;<a href="https://www.sigmaassessmentsystems.com/wp-content/uploads/2019/10/2019-10-16-LSP-R-Introduction-to-the-Leadership-Skills-Profile-Revised.pdf" target="_blank" rel="noreferrer noopener">Psychometric Summary</a>, or read our blog,&nbsp;<a href="https://www.sigmaassessmentsystems.com/do-leadership-assessments-work/">Do Leadership Assessments Work?</a></p>
            <!-- /wp:paragraph -->
            
            <!-- wp:heading -->
            <h2 class="wp-block-heading">Pricing</h2>
            <!-- /wp:heading -->
            
            <!-- wp:table {"className":"is-style-regular"} -->
            <figure class="wp-block-table is-style-regular"><table><thead><tr><th><strong>Leadership Skills Profile – Revised FOCUS</strong></th><th>US Pricing</th><th>Canadian Pricing</th></tr></thead><tbody><tr><td>Available for online administration and scoring. Includes: <br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-sigmadarkgreen-color">• </mark>1 LSP-R test administration; <br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-sigmadarkgreen-color">• </mark>1 LSP-R Focus Report; <br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-sigmadarkgreen-color">• </mark>SigmaTesting.com account set-up; and<br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-sigmadarkgreen-color">•</mark> Technical support</td><td>$126</td><td>$137</td></tr></tbody></table></figure>
            <!-- /wp:table -->
            
            <!-- wp:heading -->
            <h2 class="wp-block-heading">Looking for More? Check Out Our Free Resources:</h2>
            <!-- /wp:heading -->
            
            <!-- wp:list -->
            <ul><!-- wp:list-item -->
            <li><a href="https://www.sigmaassessmentsystems.com/assessments/leadership-skills-profile-revised-focus/administrator-guide/" target="_blank" rel="noreferrer noopener">Administrator’s Guide</a></li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li><a href="https://www.sigmaassessmentsystems.com/wp-content/uploads/2022/06/LSP-R-for-Team-Building-1.pdf" target="_blank" rel="noreferrer noopener">LSP-R for Teambuilding</a>&nbsp;(slide deck)</li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li><a href="https://www.sigmaassessmentsystems.com/assessments/leadership-skills-profile-revised-focus/psychometric-summary/">LSP-R Psychometric Summary</a></li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li><a href="https://www.sigmaassessmentsystems.com/wp-content/uploads/2022/09/Step-by-Step-Guide-to-the-LSP-R-Focus-Report.pdf" target="_blank" rel="noreferrer noopener">Step-by-Step Guide to the LSP-R Focus Report</a></li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li><a href="https://www.sigmaassessmentsystems.com/wp-content/uploads/2022/09/How-to-Use-the-LSP-R-to-Assess-Leadership-Across-Cultures.pdf" target="_blank" rel="noreferrer noopener">How to Use the LSP-R Across Cultures</a></li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li><a href="https://www.sigmaassessmentsystems.com/wp-content/uploads/2022/09/Using-the-LSP-R-to-Interpret-Leadership-Scores-Across-Cultures.pdf" target="_blank" rel="noreferrer noopener">How to Interpret LSP-R Results Across Cultures</a></li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li><a href="https://www.sigmaassessmentsystems.com/wp-content/uploads/2022/09/How-to-Use-the-LSP-R-in-Business-Schools.pdf" target="_blank" rel="noreferrer noopener">How to Use the LSP-R in Business Schools</a>&nbsp;(<a href="https://www.sigmaassessmentsystems.com/contact/" target="_blank" rel="noreferrer noopener">contact us</a>&nbsp;for PPT session slides)</li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li><a href="https://www.sigmaassessmentsystems.com/wp-content/uploads/2022/09/How-to-Use-the-LSP-R-in-HR-Programs.pdf" target="_blank" rel="noreferrer noopener">How to Use the LSP-R in HR Programs</a>&nbsp;(<a href="https://www.sigmaassessmentsystems.com/contact/" target="_blank" rel="noreferrer noopener">contact us</a>&nbsp;for PPT session slides)</li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li><a href="https://www.sigmaassessmentsystems.com/wp-content/uploads/2022/09/How-to-Plan-for-Succession-with-the-LSP-R.pdf" target="_blank" rel="noreferrer noopener">How to Plan for Succession with the LSP-R</a></li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li><a href="https://www.sigmaassessmentsystems.com/wp-content/uploads/2022/09/How-to-Use-the-LSP-R-to-Develop-Large-Groups-on-a-Small-Budget.pdf" target="_blank" rel="noreferrer noopener">How to Develop Large Groups on a Small Budget Using the LSP-R</a></li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li><a href="https://www.sigmaassessmentsystems.com/wp-content/uploads/2022/09/How-to-Measure-Leadership-Using-the-LSP-R.pdf" target="_blank" rel="noreferrer noopener">How to Measure Leadership Using the LSP-R</a></li>
            <!-- /wp:list-item --></ul>
            <!-- /wp:list -->
            
            <!-- wp:heading -->
            <h2 class="wp-block-heading">Get Certified</h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph -->
            <p>The LSP-R is a powerful assessment that can be used in a variety of contexts. In order to get the most out of your assessment, it is important to establish a deep understanding of its features and applications. Our interactive certification program is designed to equip you with just that. We’ll teach you how to understand, interpret, and communicate the results of the LSP-R. Download the program summary below.&nbsp;<a href="https://www.sigmaassessmentsystems.com/contact/" target="_blank" rel="noreferrer noopener">Contact us</a>&nbsp;if you’re interested!</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"lightestgrey"} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-lightestgrey-background-color has-background wp-element-button" href="https://www.sigmaassessmentsystems.com/wp-content/uploads/2022/09/LSP-R-Certification-Program-1-Pager.pdf" target="_blank" rel="noreferrer noopener">Download LSP-R Certification Information</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons -->
            
            <!-- wp:heading {"textColor":"sigmagreen"} -->
            <h2 class="wp-block-heading has-sigmagreen-color has-text-color"><strong>Ready to start developing your leaders</strong>?</h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph -->
            <p>Ordering the LSP-R online is a quick and easy process. Complete an application form below to get approval for your online account. Once approved, you will receive an email with your login information. From there, you may log in, purchase the leadership development profile test, and begin administration immediately. If you have questions or need more information, please&nbsp;<a href="https://www.sigmaassessmentsystems.com/contact/" target="_blank" rel="noreferrer noopener">contact us</a>. Our customer service team will get back to you within 24 to 48 hours.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"sigmablue"} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-sigmablue-background-color has-background wp-element-button" href="http://sigmatesting.com/isapi/stregister.dll" target="_blank" rel="noreferrer noopener">Complete the Application Form</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"width":"25%"} -->
            <div class="wp-block-column" style="flex-basis:25%"><!-- wp:buttons {"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"mb-3"} -->
            <div class="wp-block-button has-custom-width wp-block-button__width-100 mb-3"><a class="wp-block-button__link wp-element-button" href="https://www.sigmaassessmentsystems.com/wp-content/uploads/2023/07/Assessment-Order-Form_Fillable.pdf" target="_blank" rel="noreferrer noopener">ORDER ONLINE</a></div>
            <!-- /wp:button -->
            
            <!-- wp:button {"width":100} -->
            <div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="/contact/">CONTACT US</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->',
	    )
	);

    register_block_pattern(
	    'sigma/assessment-internal',
	    array(
	        'title'       => __( 'Internal Assessment Page', 'sigma' ),
	        'categories'  => array('templates'),
	        'content'     => '<!-- wp:paragraph -->
            <p>The LCIA-360 is designed&nbsp;to provide you with feedback on your leadership character based on multiple perspectives. The report provides information on your self-ratings on a series of character dimensions and elements, and compares&nbsp;these&nbsp;with ratings collected from leaders, colleagues, direct/indirect reports, and other relevant raters. The&nbsp;LCIA–360&nbsp;report also contains specific comments from your raters designed to facilitate your character development.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
            <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:column {"width":"25%"} -->
            <div class="wp-block-column" style="flex-basis:25%"><!-- wp:image {"sizeSlug":"large"} -->
            <figure class="wp-block-image size-large"><img src="https://www.sigmaassessmentsystems.com/wp-content/uploads/2022/08/LCIA-360-Report.jpg" alt=""/></figure>
            <!-- /wp:image --></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"verticalAlignment":"center","width":"75%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:heading {"textColor":"sigmadarkgreen"} -->
            <h2 class="wp-block-heading has-sigmadarkgreen-color has-text-color"><strong>LCIA-360 Report Contents</strong></h2>
            <!-- /wp:heading -->
            
            <!-- wp:list -->
            <ul><!-- wp:list-item -->
            <li>Page 3 – Nature &amp; Importance of Leadership Character&nbsp;</li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li>Page 6 – LCIA Results Overview&nbsp;</li>
            <!-- /wp:list-item -->
            
            <!-- wp:list-item -->
            <li>Page 10 – Detailed Character Profile&nbsp;</li>
            <!-- /wp:list-item --></ul>
            <!-- /wp:list -->
            
            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button -->
            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://www.sigmaassessmentsystems.com/wp-content/uploads/2015/02/LCIA-360-Sample-Report.pdf" target="_blank" rel="noreferrer noopener">Download</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->
            
            <!-- wp:acf/accordion {"name":"acf/accordion","data":{"advanced_mode":"1","_advanced_mode":"field_65171a64c3ce4"},"mode":"preview"} -->
            <!-- wp:acf/accordion-item {"name":"acf/accordion-item","data":{"item_title":"Nature \u0026 Importance of Leadership Character","_item_title":"field_65171fbb08aae","title_html_tag":"h4","_title_html_tag":"field_65171ff7c29c1","icon":"","_icon":"field_65172f70ac10f"},"mode":"preview"} -->
            <!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
            <div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"sizeSlug":"large"} -->
            <figure class="wp-block-image size-large"><img src="https://www.sigmaassessmentsystems.com/wp-content/uploads/2022/08/Leadership-Character.jpg" alt=""/></figure>
            <!-- /wp:image --></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"width":"66.66%"} -->
            <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph -->
            <p><br>This section provides information about the nature of leadership character, including its constituent dimensions and elements. This section also explains why character is essential for effective leadership and organizational performance.&nbsp;</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->
            <!-- /wp:acf/accordion-item -->
            
            <!-- wp:acf/accordion-item {"name":"acf/accordion-item","data":{"item_title":"LCIA Results Overview","_item_title":"field_65171fbb08aae","title_html_tag":"h4","_title_html_tag":"field_65171ff7c29c1","icon":"","_icon":"field_65172f70ac10f"},"mode":"preview"} -->
            <!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
            <div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"sizeSlug":"large"} -->
            <figure class="wp-block-image size-large"><img src="https://www.sigmaassessmentsystems.com/wp-content/uploads/2022/08/ResultsOverview.jpg" alt=""/></figure>
            <!-- /wp:image --></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"width":"66.66%"} -->
            <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph -->
            <p>The Character Snapshot provides an overview of your results on each character dimension. The snapshot compares your own rating on each dimension with the average rating provided by all of your raters. Use this section to quickly identify both your strengths and areas for development.&nbsp;</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph -->
            <p>The Character Summary summarizes your results on each element grouped according to its corresponding dimension. Your self assessment on each element&nbsp;is compared with your average rating. Use this information to dig deeper on dimensional scores and identify which&nbsp;elements that reflect strengths and which ones present opportunities for development.</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->
            <!-- /wp:acf/accordion-item -->
            
            <!-- wp:acf/accordion-item {"name":"acf/accordion-item","data":{"item_title":"Detailed Character Profile","_item_title":"field_65171fbb08aae","title_html_tag":"h4","_title_html_tag":"field_65171ff7c29c1","icon":"","_icon":"field_65172f70ac10f"},"mode":"preview"} -->
            <!-- wp:paragraph -->
            <p>Keep in mind that character is formed through experience. Over time, the way we respond to these experiences becomes habitual, and those habits build character. Because of this, there are opportunities for character development available all the time in everyday life. In the LCIA-360 report, SIGMA offers developmental exercises you can use to begin developing your leader character today. However, there are also plenty of opportunities to begin developing character in other areas of life: work, home, friendships, etc. For example, reflecting about why you might be impatient, excessive, or careless in any of these areas provides the raw material for examining and developing your character in action.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph -->
            <p>Although the LCIA-360 report describes each dimension of character, your associated score, and how you can develop it, we continually reinforce the point that the dimensions support one another and are interdependent. Therefore, exercises to develop Courage, for example, also bring with them opportunities to develop the other dimensions since you need to exercise Judgment about what you are doing and perhaps exercise some Temperance and Accountability in the process.</p>
            <!-- /wp:paragraph -->
            <!-- /wp:acf/accordion-item -->
            <!-- /wp:acf/accordion -->
            
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"className":"py-6","layout":{"type":"constrained"}} -->
            <div class="wp-block-group py-6" style="padding-top:0;padding-bottom:0"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
            <div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:column {"width":"15%"} -->
            <div class="wp-block-column" style="flex-basis:15%"></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"width":"70%"} -->
            <div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"textAlign":"center","textColor":"sigmadarkgreen"} -->
            <h2 class="wp-block-heading has-text-align-center has-sigmadarkgreen-color has-text-color"><strong>Get Practical Insights with the LCIA</strong></h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">To gain access to a customized version of this report and more, order the LCIA online today or&nbsp;contact us to learn more&nbsp;about our&nbsp;<a href="https://www.sigmaassessmentsystems.com/assessments-category/leadership-development/" target="_blank" rel="noreferrer noopener">leadership development assessments</a>.&nbsp;</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"className":"mt-3"} -->
            <div class="wp-block-button mt-3"><a class="wp-block-button__link wp-element-button" href="https://www.sigmaassessmentsystems.com/assessments/leadership-character-insight-assessment/">LCIA ASSESSMENT</a></div>
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
}
add_action( 'init', 'sigma_register_templates_patterns' );