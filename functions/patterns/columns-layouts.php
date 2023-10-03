<?php
// Register patterns
function sigma_register_columns_patterns() {
	$site_url = get_site_url();

	register_block_pattern(
	    'sigma/shadowboxes',
	    array(
	        'title'       => __( 'Shadowboxes', 'sigma' ),
	        'categories'  => array('columns-layouts', 'sigma-all'),
	        'content'     => '<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"className":"row gx-0"} -->
			<div class="wp-block-columns row gx-0"><!-- wp:column {"className":"col"} -->
			<div class="wp-block-column col"><!-- wp:acf/shadowbox {"name":"acf/shadowbox","mode":"preview"} -->
			<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"textColor":"sigmablue"} -->
			<h2 class="wp-block-heading has-text-align-center has-sigmablue-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40)"><a href="' . $site_url . '/succession/succession-planning-launch-series/">Succession Planning Launch</a></h2>
			<!-- /wp:heading -->
			
			<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"textColor":"sigmadarkgreen"} -->
			<h3 class="wp-block-heading has-text-align-center has-sigmadarkgreen-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40)">Need a succession plan today?</h3>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">Get started immediately with SIGMA’s Succession Planning Launch. Our consultants deliver a detailed succession plan for each of your leaders in just six weeks.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:image {"align":"center","id":19206,"width":150,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image aligncenter size-full is-resized"><img src="' . $site_url . '/wp-content/uploads/2023/04/Launch-Icon-1.png" alt="" class="wp-image-19206" style="width:150px" width="150"/></figure>
			<!-- /wp:image -->
			<!-- /wp:acf/shadowbox --></div>
			<!-- /wp:column -->
			
			<!-- wp:column {"className":"col"} -->
			<div class="wp-block-column col"><!-- wp:acf/shadowbox {"name":"acf/shadowbox","mode":"preview"} -->
			<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"textColor":"sigmablue"} -->
			<h2 class="wp-block-heading has-text-align-center has-sigmablue-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40)"><a href="' . $site_url . '/customized-consulting-2/">Custom Consulting</a></h2>
			<!-- /wp:heading -->
			
			<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"textColor":"sigmadarkgreen"} -->
			<h3 class="wp-block-heading has-text-align-center has-sigmadarkgreen-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40)">Seeking a customized solution?</h3>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">Our consultants work with you to create a project plan that meets the unique needs of your organization. Engagements can be as large or as small as needed.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:image {"align":"center","id":19205,"width":150,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image aligncenter size-full is-resized"><img src="' . $site_url . '/wp-content/uploads/2023/04/Customized-Consulting-1.png" alt="" class="wp-image-19205" style="width:150px" width="150"/></figure>
			<!-- /wp:image -->
			<!-- /wp:acf/shadowbox --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			
			<!-- wp:columns {"className":"row gx-0"} -->
			<div class="wp-block-columns row gx-0"><!-- wp:column {"className":"col"} -->
			<div class="wp-block-column col"><!-- wp:acf/shadowbox {"name":"acf/shadowbox","mode":"preview"} -->
			<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"textColor":"sigmablue"} -->
			<h2 class="wp-block-heading has-text-align-center has-sigmablue-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40)"><a href="' . $site_url . '/succession-planning-template/">Succession Planning Guide</a></h2>
			<!-- /wp:heading -->
			
			<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"textColor":"sigmadarkgreen"} -->
			<h3 class="wp-block-heading has-text-align-center has-sigmadarkgreen-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40)">Want to try it on your own?</h3>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">Download SIGMA’s Succession Planning Guide. This guide combines all our best tools and templates in one powerful resource.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:image {"align":"center","id":19207,"width":150,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image aligncenter size-full is-resized"><img src="' . $site_url . '/wp-content/uploads/2023/04/SP-Guide-Icon-1.png" alt="" class="wp-image-19207" style="width:150px" width="150"/></figure>
			<!-- /wp:image -->
			<!-- /wp:acf/shadowbox --></div>
			<!-- /wp:column -->
			
			<!-- wp:column {"className":"col"} -->
			<div class="wp-block-column col"><!-- wp:acf/shadowbox {"name":"acf/shadowbox","mode":"preview"} -->
			<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"textColor":"sigmablue"} -->
			<h2 class="wp-block-heading has-text-align-center has-sigmablue-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40)"><a href="' . $site_url . '/succession-planning-certification-workshop/">Succession Planning Training</a></h2>
			<!-- /wp:heading -->
			
			<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"textColor":"sigmadarkgreen"} -->
			<h3 class="wp-block-heading has-text-align-center has-sigmadarkgreen-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40)">Interested in learning the fundamentals?</h3>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">Complete SIGMA’s online, self-guided training. These five modules will give you a comprehensive introduction to the succession planning process.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:image {"align":"center","id":19208,"width":150,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image aligncenter size-full is-resized"><img src="' . $site_url . '/wp-content/uploads/2023/04/SP-Training-Icon-1.png" alt="" class="wp-image-19208" style="width:150px" width="150"/></figure>
			<!-- /wp:image -->
			<!-- /wp:acf/shadowbox --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->',
	    )
	);

	register_block_pattern(
	    'sigma/rounded-img-w-text',
	    array(
	        'title'       => __( 'Rounded image with large text', 'sigma' ),
	        'categories'  => array('columns-layouts', 'sigma-all'),
	        'content'     => '<!-- wp:group {"className":"mb-6","layout":{"type":"constrained"}} -->
			<div class="wp-block-group mb-6"><!-- wp:columns {"verticalAlignment":null,"className":"px-lg-6"} -->
			<div class="wp-block-columns px-lg-6"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:image {"align":"center","id":4070,"sizeSlug":"medium","linkDestination":"none","className":"image-border is-style-rounded"} -->
			<figure class="wp-block-image aligncenter size-medium image-border is-style-rounded"><img src="' . $site_url . '/wp-content/uploads/2018/08/No_3_400x400-1-300x300.jpg" alt="Company Icon" class="wp-image-4070"/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column -->
			
			<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:paragraph {"textColor":"sigmadarkgreen","fontSize":"medium"} -->
			<p class="has-sigmadarkgreen-color has-text-color has-medium-font-size">Established in 1967, SIGMA has spent over 50 years developing and delivering science-based assessment products and leadership coaching services.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size">The founder of our company, Dr. Douglas Jackson, had a long and influential career as a researcher, psychologist, scientist, and innovator in the field of psychological assessment. The assessments developed by Dr. Jackson have helped millions of individuals and professionals hire better employees, develop stronger leaders, plan careers with purpose, and uncover their true potential.</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->',
	    )
	);

	register_block_pattern(
	    'sigma/solutions-intro',
	    array(
	        'title'       => __( 'Solutions Intro', 'sigma' ),
	        'categories'  => array('columns-layouts', 'sigma-all'),
	        'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
			
			<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
			<div class="wp-block-column" style="flex-basis:25%"></div>
			<!-- /wp:column -->
			
			<!-- wp:column {"width":"90%"} -->
			<div class="wp-block-column" style="flex-basis:90%"><!-- wp:image {"align":"center"} -->
			<figure class="wp-block-image aligncenter"><img src="' . $site_url . '/wp-content/uploads/2018/08/Assessments-150x150.png" alt="Assessments – SIGMA Assessment Systems" title="Assessments"/></figure>
			<!-- /wp:image -->
			
			<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
			<p class="has-text-align-center has-medium-font-size">Select, hire, and develop top talent.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:separator {"className":"is-style-default my-5"} -->
			<hr class="wp-block-separator has-alpha-channel-opacity is-style-default my-5"/>
			<!-- /wp:separator -->
			
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">Our rigorous, scientifically-based employee assessments are designed to help you identify the right leaders for your organization. Our consultants have the knowledge and experience to analyze and interpret the test results with your objectives and requirements in mind. Whether you are seeking to identify emerging leaders, evaluate team dynamics, or enhance succession planning, SIGMA’s assessments deliver actionable intelligence that drives organizational excellence.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:spacer {"height":"40px"} -->
			<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons"><!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://www.sigmaassessmentsystems.com/wp-content/uploads/2023/07/Assessment-Product-Catalog_2023.pdf" target="_blank" rel="noreferrer noopener">Download Product Catalog</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column -->
			
			<!-- wp:column {"width":"25%"} -->
			<div class="wp-block-column" style="flex-basis:25%"></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->',
	    )
	);

	register_block_pattern(
	    'sigma/four-boxes',
	    array(
	        'title'       => __( 'Four Boxes', 'sigma' ),
	        'categories'  => array('columns-layouts', 'sigma-all'),
	        'content'     => '<!-- wp:group {"className":"home-boxes","layout":{"type":"constrained"}} -->
			<div class="wp-block-group home-boxes"><!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:group {"className":"mb-4 pt-4 home-box home-box-line-right home-box-line-bottom position-relative text-center","layout":{"type":"constrained"}} -->
			<div class="wp-block-group mb-4 pt-4 home-box home-box-line-right home-box-line-bottom position-relative text-center"><!-- wp:group {"className":"position-relative px-lg-6","layout":{"type":"constrained"}} -->
			<div class="wp-block-group position-relative px-lg-6"><!-- wp:image {"align":"center","id":582,"sizeSlug":"thumbnail","linkDestination":"none"} -->
			<figure class="wp-block-image aligncenter size-thumbnail"><img src="' . $site_url . '/wp-content/uploads/2018/08/Assessments-1-150x150.png" alt="Assessments – SIGMA Assessment Systems" class="wp-image-582"/></figure>
			<!-- /wp:image -->
			
			<!-- wp:heading {"className":"mt-0"} -->
			<h2 class="wp-block-heading mt-0">Assessments</h2>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph -->
			<p>We develop and deliver scientifically-based personality and leadership assessments and provide expert analysis of the results.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"sigmagreen","className":"is-style-outline","fontSize":"small"} -->
			<div class="wp-block-button has-custom-font-size is-style-outline has-small-font-size"><a class="wp-block-button__link has-sigmagreen-color has-white-background-color has-text-color has-background wp-element-button" href="/assessments/">LEARN MORE</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:group --></div>
			<!-- /wp:group --></div>
			<!-- /wp:column -->
			
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:group {"className":"mb-4 pt-4 home-box home-box-line-bottom text-center position-relative","layout":{"type":"constrained"}} -->
			<div class="wp-block-group mb-4 pt-4 home-box home-box-line-bottom text-center position-relative"><!-- wp:group {"className":"position-relative px-lg-6","layout":{"type":"constrained"}} -->
			<div class="wp-block-group position-relative px-lg-6"><!-- wp:image {"align":"center","id":583,"sizeSlug":"thumbnail","linkDestination":"none"} -->
			<figure class="wp-block-image aligncenter size-thumbnail"><img src="' . $site_url . '/wp-content/uploads/2018/08/Coaching-1-150x150.png" alt="Leadership coaching – SIGMA Assessment Systems" class="wp-image-583"/></figure>
			<!-- /wp:image -->
			
			<!-- wp:heading {"className":"mt-0"} -->
			<h2 class="wp-block-heading mt-0">Leadership Coaching</h2>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph -->
			<p>Our executive coaching programs build emotional intelligence, leader character, and interpersonal and technical skills.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"sigmagreen","className":"is-style-outline","fontSize":"small"} -->
			<div class="wp-block-button has-custom-font-size is-style-outline has-small-font-size"><a class="wp-block-button__link has-sigmagreen-color has-white-background-color has-text-color has-background wp-element-button" href="/coaching-and-training/">LEARN MORE</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:group --></div>
			<!-- /wp:group --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			
			<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:group {"className":"mb-4 pt-4 home-box home-box-line-right text-center position-relative","layout":{"type":"constrained"}} -->
			<div class="wp-block-group mb-4 pt-4 home-box home-box-line-right text-center position-relative"><!-- wp:group {"className":"position-relative px-lg-6","layout":{"type":"constrained"}} -->
			<div class="wp-block-group position-relative px-lg-6"><!-- wp:image {"align":"center","id":584,"sizeSlug":"thumbnail","linkDestination":"none"} -->
			<figure class="wp-block-image aligncenter size-thumbnail"><img src="' . $site_url . '/wp-content/uploads/2018/08/Succession-1-150x150.png" alt="Succession Planning – SIGMA Assessment Systems" class="wp-image-584"/></figure>
			<!-- /wp:image -->
			
			<!-- wp:heading {"className":"mt-0"} -->
			<h2 class="wp-block-heading mt-0">Succession Planning</h2>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph -->
			<p>We partner with your organization to identify, select, and develop the next generation of leadership talent.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"sigmagreen","className":"is-style-outline","fontSize":"small"} -->
			<div class="wp-block-button has-custom-font-size is-style-outline has-small-font-size"><a class="wp-block-button__link has-sigmagreen-color has-white-background-color has-text-color has-background wp-element-button" href="/succession/">LEARN MORE</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:group --></div>
			<!-- /wp:group --></div>
			<!-- /wp:column -->
			
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:group {"className":"mb-4 pt-4 home-box text-center position-relative","layout":{"type":"constrained"}} -->
			<div class="wp-block-group mb-4 pt-4 home-box text-center position-relative"><!-- wp:group {"className":"position-relative px-lg-6","layout":{"type":"constrained"}} -->
			<div class="wp-block-group position-relative px-lg-6"><!-- wp:image {"align":"center","id":585,"sizeSlug":"thumbnail","linkDestination":"none"} -->
			<figure class="wp-block-image aligncenter size-thumbnail"><img src="' . $site_url . '/wp-content/uploads/2018/08/Consulting-1-150x150.png" alt="Leadership Consulting Services – SIGMA Assessment Systems" class="wp-image-585"/></figure>
			<!-- /wp:image -->
			
			<!-- wp:heading {"className":"mt-0"} -->
			<h2 class="wp-block-heading mt-0">Leadership Consulting</h2>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph -->
			<p>Our experienced leadership consultants assist with employee selection, coaching, leadership development, and career management.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"sigmagreen","className":"is-style-outline","fontSize":"small"} -->
			<div class="wp-block-button has-custom-font-size is-style-outline has-small-font-size"><a class="wp-block-button__link has-sigmagreen-color has-white-background-color has-text-color has-background wp-element-button" href="/consulting/">LEARN MORE</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:group --></div>
			<!-- /wp:group --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->',
	    )
	);
	register_block_pattern(
	    'sigma/timeline',
	    array(
	        'title'       => __( 'Timeline', 'sigma' ),
	        'categories'  => array('columns-layouts', 'blue', 'components', 'sigma-all'),
	        'content'     => '<!-- wp:group {"align":"full","backgroundColor":"sigmablue","textColor":"white","className":"blue-section-with-heading position-relative my-6 pt-6 pb-3 border-6 border-top border-bottom border-secondary","layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignfull blue-section-with-heading position-relative my-6 pt-6 pb-3 border-6 border-top border-bottom border-secondary has-white-color has-sigmablue-background-color has-text-color has-background"><!-- wp:heading {"level":3,"backgroundColor":"sigmagreen","className":"blue-section-title position-absolute top-0 start-50 translate-middle px-5 py-2 text-white text-center rounded-pill"} -->
			<h3 class="wp-block-heading blue-section-title position-absolute top-0 start-50 translate-middle px-5 py-2 text-white text-center rounded-pill has-sigmagreen-background-color has-background">Types of Assessments</h3>
			<!-- /wp:heading -->
			
			<!-- wp:group {"className":"py-5","layout":{"type":"constrained"}} -->
			<div class="wp-block-group py-5"><!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">Our tests are available online and are simple and intuitive for candidates to use.<br>Choose a category below to see a list of options to meet your needs.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:acf/timeline {"name":"acf/timeline","data":{"heading_html_tag":"h3","_heading_html_tag":"field_63efeeea7b237","timeline_content_0_icon":617,"_timeline_content_0_icon":"field_6510df0bbfb16","timeline_content_0_link":{"title":"Leadership Assessments","url":"/assessments-category/leadership-development/","target":""},"_timeline_content_0_link":"field_6512f859ac8e6","timeline_content_0_heading":" LEADERSHIP ASSESSMENTS","_timeline_content_0_heading":"field_63efeec77b235","timeline_content_0_content":"Identify strengths and developmental opportunities in your leaders.","_timeline_content_0_content":"field_63efeecd7b236","timeline_content_1_icon":618,"_timeline_content_1_icon":"field_6510df0bbfb16","timeline_content_1_link":{"title":"Pre-Employment Assessments","url":"/assessments-category/employee-selection/","target":""},"_timeline_content_1_link":"field_6512f859ac8e6","timeline_content_1_heading":"PRE-EMPLOYMENT ASSESSMENTS","_timeline_content_1_heading":"field_63efeec77b235","timeline_content_1_content":"Identify the most qualified candidates for the job.","_timeline_content_1_content":"field_63efeecd7b236","timeline_content_2_icon":619,"_timeline_content_2_icon":"field_6510df0bbfb16","timeline_content_2_link":{"title":"Career Assessments","url":"/assessments-category/career-tests/","target":""},"_timeline_content_2_link":"field_6512f859ac8e6","timeline_content_2_heading":"CAREER ASSESSMENTS","_timeline_content_2_heading":"field_63efeec77b235","timeline_content_2_content":"Find a role that fits your interests, skills, and career goals. ","_timeline_content_2_content":"field_63efeecd7b236","timeline_content_3_icon":620,"_timeline_content_3_icon":"field_6510df0bbfb16","timeline_content_3_link":{"title":"Personality Tests","url":"/assessments-category/personality-tests/","target":""},"_timeline_content_3_link":"field_6512f859ac8e6","timeline_content_3_heading":"PERSONALITY TESTS","_timeline_content_3_heading":"field_63efeec77b235","timeline_content_3_content":"Uncover science-based insights on personality for hiring, development, coaching, and counselling purposes. ","_timeline_content_3_content":"field_63efeecd7b236","timeline_content_4_icon":621,"_timeline_content_4_icon":"field_6510df0bbfb16","timeline_content_4_link":{"title":"Clinical/Counseling Assessments","url":"/assessments-category/clinical-counseling-assessments/","target":""},"_timeline_content_4_link":"field_6512f859ac8e6","timeline_content_4_heading":"CLINICAL/COUNSELING ASSESSMENTS","_timeline_content_4_heading":"field_63efeec77b235","timeline_content_4_content":"Evidence-based evaluations designed to help you meet your clients’ needs.","_timeline_content_4_content":"field_63efeecd7b236","timeline_content":5,"_timeline_content":"field_63efeea87b234"},"mode":"preview","className":"mb-6"} /-->
			
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">Need help deciding which assessments to use?&nbsp;<a href="https://www.sigmaassessmentsystems.com/contact/">Ask our experts</a>&nbsp;for advice.</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group --></div>
			<!-- /wp:group -->',
	    )
	);
	register_block_pattern(
	    'sigma/blue-section-w-heading',
	    array(
	        'title'       => __( 'Blue Section with Heading', 'sigma' ),
	        'categories'  => array('columns-layouts', 'blue', 'sigma-all'),
	        'content'     => '<!-- wp:group {"align":"full","backgroundColor":"sigmablue","textColor":"white","className":"blue-section-with-heading position-relative py-6 border-6 border-top border-bottom border-secondary","layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignfull blue-section-with-heading position-relative py-6 border-6 border-top border-bottom border-secondary has-white-color has-sigmablue-background-color has-text-color has-background"><!-- wp:heading {"level":3,"backgroundColor":"sigmagreen","className":"blue-section-title position-absolute top-0 start-50 translate-middle px-5 py-2 text-white text-center rounded-pill"} -->
			<h3 class="wp-block-heading blue-section-title position-absolute top-0 start-50 translate-middle px-5 py-2 text-white text-center rounded-pill has-sigmagreen-background-color has-background">The Section Title</h3>
			<!-- /wp:heading -->
			
			<!-- wp:group {"className":"py-5","layout":{"type":"constrained"}} -->
			<div class="wp-block-group py-5"><!-- wp:paragraph -->
			<p>Laoreet id donec ultrices tincidunt arcu non sodales neque sodales. Ornare arcu dui vivamus arcu. Nunc aliquet bibendum enim facilisis gravida neque convallis a. Amet massa vitae tortor condimentum. Faucibus vitae aliquet nec ullamcorper sit amet. Odio tempor orci dapibus ultrices in iaculis nunc sed. Quam pellentesque nec nam aliquam sem. Nunc congue nisi vitae suscipit tellus. Laoreet sit amet cursus sit amet dictum. Tincidunt lobortis feugiat vivamus at augue eget arcu dictum varius. Sed felis eget velit aliquet sagittis. Volutpat lacus laoreet non curabitur. Sed felis eget velit aliquet sagittis id.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:paragraph -->
			<p>Mi ipsum faucibus vitae aliquet nec ullamcorper sit. Tempus iaculis urna id volutpat. Sed libero enim sed faucibus turpis in eu. Dictum non consectetur a erat nam. Ipsum consequat nisl vel pretium lectus quam id leo in. Aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant morbi. Urna id volutpat lacus laoreet non curabitur gravida. Fermentum iaculis eu non diam phasellus vestibulum. Magna ac placerat vestibulum lectus mauris ultrices eros in cursus. Dignissim convallis aenean et tortor at. Pellentesque adipiscing commodo elit at imperdiet dui accumsan sit. Placerat in egestas erat imperdiet sed euismod nisi porta lorem. Purus sit amet volutpat consequat mauris nunc congue nisi vitae. Urna id volutpat lacus laoreet non curabitur gravida arcu.</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group --></div>
			<!-- /wp:group -->',
	    )
	);

	register_block_pattern(
	    'sigma/blue-section-w-form',
	    array(
	        'title'       => __( 'Blue Section with Form', 'sigma' ),
	        'categories'  => array('blue', 'sigma-all'),
	        'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"sigmablue","textColor":"white","className":"blue-section-with-heading position-relative py-6 border-6 border-top border-bottom border-secondary","layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignfull blue-section-with-heading position-relative py-6 border-6 border-top border-bottom border-secondary has-white-color has-sigmablue-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":3,"backgroundColor":"sigmagreen","className":"blue-section-title position-absolute top-0 start-50 translate-middle px-5 py-2 text-white text-center rounded-pill"} -->
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
}
add_action( 'init', 'sigma_register_columns_patterns' );