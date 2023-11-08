<?php

// Register patterns
function sigma_register_components_patterns() {
	$site_url = get_site_url();
	register_block_pattern(
		'sigma/dl-succession-planning-guide',
		array(
	        'title'       => __( 'Download Succession Planning Guide', 'sigma' ),
	        'categories'  => array('components', 'blue', 'sigma-all'),
	        'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"sigmablue","textColor":"white","className":"rounded-3","layout":{"type":"constrained"}} -->
			<div class="wp-block-group rounded-3 has-white-color has-sigmablue-background-color has-text-color has-background" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60);padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:columns {"className":"mb-0"} -->
			<div class="wp-block-columns mb-0"><!-- wp:column {"verticalAlignment":"center","className":"mb-0"} -->
			<div class="wp-block-column is-vertically-aligned-center mb-0"><!-- wp:heading {"textColor":"sigmagreen"} -->
			<h2 class="wp-block-heading has-sigmagreen-color has-text-color">Succession Planning Guide</h2>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph -->
			<p>SIGMA\'s Succession Planning Guide includes all of our templates in chronological order, as well as instructions and examples to guide you through SIGMA\'s six-step succession planning process.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"sigmagreen","className":"mt-3"} -->
			<div class="wp-block-button mt-3"><a class="wp-block-button__link has-sigmagreen-background-color has-background wp-element-button" href="#downloadGuide">Download the Succession Planning Guide</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column -->
			
			<!-- wp:column {"className":"mb-0"} -->
			<div class="wp-block-column mb-0"><!-- wp:image {"id":17277,"sizeSlug":"full","linkDestination":"none","className":"shadow-lg-heavy"} -->
			<figure class="wp-block-image size-full shadow-lg-heavy"><img src="' . $site_url . '/wp-content/uploads/2022/11/Succession-Planning-Guide-Cover-Page-1.png" alt="Succession Planning Template" class="wp-image-17277"/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->',
	    )
	);
	register_block_pattern(
	    'sigma/templates-library',
	    array(
	        'title'       => __( 'Templates Library', 'sigma' ),
	        'categories'  => array('components', 'sigma-all'),
	        'content'     => '<!-- wp:acf/multipart {"name":"acf/multipart","data":{"toc_title":"Succession Planning Templates","_toc_title":"field_651700528aadf"},"mode":"preview"} -->
			<!-- wp:acf/multipartsection {"name":"acf/multipartsection","data":{"section_title":"Critical Roles Identification Questionnaire","_section_title":"field_641de6ffd2fbb","section_link":"/critical-roles-identification-questionnaire/","_section_link":"field_65170157d9d3e"},"mode":"preview"} -->
			<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large"} -->
			<figure class="wp-block-image size-large"><img src="/wp-content/uploads/2020/08/2020-08-20-Critical-Role-Identification-Questionnaire.png" alt=""/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column -->
			
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph -->
			<p>The Critical Roles Identification Questionnaire is a succession planning template that will help you to identify those key roles that your organization should target in your succession program.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"sigmagreen"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-sigmagreen-background-color has-background wp-element-button" href="/critical-roles-identification-questionnaire/"><strong>Download</strong></a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			<!-- /wp:acf/multipartsection -->
			
			<!-- wp:acf/multipartsection {"name":"acf/multipartsection","data":{"section_title":"Success Profile Template","_section_title":"field_641de6ffd2fbb","section_link":"/success-profile-template/","_section_link":"field_65170157d9d3e"},"mode":"preview"} -->
			<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large"><img src="' . $site_url . '/wp-content/uploads/2022/09/Success-Profile_Image-1024x791.png" alt=""/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column -->
			
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph -->
			<p>The Success Profile Template is a succession planning worksheet designed to describe the talent needed for success in a key role.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"sigmagreen"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-sigmagreen-background-color has-background wp-element-button" href="/success-profile-template/"><strong>Download</strong></a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			<!-- /wp:acf/multipartsection -->
			
			<!-- wp:acf/multipartsection {"name":"acf/multipartsection","data":{"section_title":"Succession Nomination Survey Template","_section_title":"field_641de6ffd2fbb","section_link":"/succession-nomination-survey-template/","_section_link":"field_65170157d9d3e"},"mode":"preview"} -->
			<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large"} -->
			<figure class="wp-block-image size-large"><img src="/wp-content/uploads/2019/01/Nomination-Survey_Paper.png" alt=""/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column -->
			
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph -->
			<p>The Succession Nomination Survey is a simple succession planning tool that can be used to identify which candidates to consider for the critical roles you identified in phase one.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"sigmagreen"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-sigmagreen-background-color has-background wp-element-button" href="/succession-nomination-survey-template/"><strong>Download</strong></a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			<!-- /wp:acf/multipartsection -->
			
			<!-- wp:acf/multipartsection {"name":"acf/multipartsection","data":{"section_title":"Succession Bench Template","_section_title":"field_641de6ffd2fbb","section_link":"/building-your-succession-bench/","_section_link":"field_65170157d9d3e"},"mode":"preview"} -->
			<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large"} -->
			<figure class="wp-block-image size-large"><img src="/wp-content/uploads/2021/02/Screen-Shot-2021-02-03-at-12.02.19-PM-edited-1024x791.png" alt=""/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column -->
			
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph -->
			<p>The Succession Bench Template is used to evaluate the overall readiness of your succession candidates for a role.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"sigmagreen"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-sigmagreen-background-color has-background wp-element-button" href="/building-your-succession-bench/"><strong>Download</strong></a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			<!-- /wp:acf/multipartsection -->
			
			<!-- wp:acf/multipartsection {"name":"acf/multipartsection","data":{"section_title":"Candidate Succession Profile Template","_section_title":"field_641de6ffd2fbb","section_link":"/candidate-succession-profile-template/","_section_link":"field_65170157d9d3e"},"mode":"preview"} -->
			<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large"} -->
			<figure class="wp-block-image size-large"><img src="/wp-content/uploads/2019/07/Candidate-Profile_Image-768x593.png" alt=""/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column -->
			
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph -->
			<p>The Candidate Succession Profile Template is designed to identify gaps between the requirements for a role and the potential candidate being developed for that key leadership position.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"sigmagreen"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-sigmagreen-background-color has-background wp-element-button" href="/candidate-succession-profile-template/"><strong>Download</strong></a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			<!-- /wp:acf/multipartsection -->
			
			<!-- wp:acf/multipartsection {"name":"acf/multipartsection","data":{"section_title":"Individual Development Plan Template","_section_title":"field_641de6ffd2fbb","section_link":"/develop-talent/","_section_link":"field_65170157d9d3e"},"mode":"preview"} -->
			<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large"} -->
			<figure class="wp-block-image size-large"><img src="' . $site_url . '/wp-content/uploads/2022/02/Development-Actions-Form.jpg" alt=""/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column -->
			
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph -->
			<p>The Individual Development Plan is a two-part worksheet that outlines a succession candidate’s goals, action plans, and milestones for their growth and development.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"sigmagreen"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-sigmagreen-background-color has-background wp-element-button" href="/develop-talent/"><strong>Download</strong></a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			<!-- /wp:acf/multipartsection -->
			
			<!-- wp:acf/multipartsection {"name":"acf/multipartsection","data":{"section_title":"Talent Progress Scorecard Template","_section_title":"field_641de6ffd2fbb","section_link":"/talent-progress-scorecard-template/","_section_link":"field_65170157d9d3e"},"mode":"preview"} -->
			<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large"} -->
			<figure class="wp-block-image size-large"><img src="' . $site_url . '/wp-content/uploads/2019/02/Succession-Planning-Template-Talent-Scorecard-1.png" alt=""/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column -->
			
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph -->
			<p>The Talent Progress Scorecard Template allows you to review the outcomes of your business succession plan across several important indicators.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"sigmagreen"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-sigmagreen-background-color has-background wp-element-button" href="/talent-progress-scorecard-template/"><strong>Download</strong></a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			<!-- /wp:acf/multipartsection -->
			
			<!-- wp:acf/multipartsection {"name":"acf/multipartsection","data":{"section_title":"Succession Planning Guide","_section_title":"field_641de6ffd2fbb","section_link":"/succession-planning-template/","_section_link":"field_65170157d9d3e"},"mode":"preview"} -->
			<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large"} -->
			<figure class="wp-block-image size-large"><img src="' . $site_url . '/wp-content/uploads/2022/11/Succession-Planning-Guide-Cover-Page.png" alt=""/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column -->
			
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph -->
			<p>Our succession planning guide will walk you through what is required at each stage of the succession process along with some helpful tips to get you started.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"sigmagreen"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-sigmagreen-background-color has-background wp-element-button" href="/succession-planning-template/"><strong>Download</strong></a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			<!-- /wp:acf/multipartsection -->
			
			<!-- wp:acf/multipartsection {"name":"acf/multipartsection","data":{"section_title":"Succession Planning Checklist","_section_title":"field_641de6ffd2fbb","section_link":"/succession-planning-success-checklist/","_section_link":"field_65170157d9d3e"},"mode":"preview"} -->
			<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large"} -->
			<figure class="wp-block-image size-large"><img src="' . $site_url . '/wp-content/uploads/2021/02/Screen-Shot-2021-02-03-at-11.53.55-AM-edited.png" alt=""/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column -->
			
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph -->
			<p>The succession planning checklist is a quick measure of the maturity level of your succession plan and what areas need to be improved.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"sigmagreen"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-sigmagreen-background-color has-background wp-element-button" href="/succession-planning-success-checklist/"><strong>Download</strong></a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			<!-- /wp:acf/multipartsection -->
			
			<!-- wp:acf/multipartsection {"name":"acf/multipartsection","data":{"section_title":"Succession Planning vs Replacement Hiring Checklist","_section_title":"field_641de6ffd2fbb","section_link":"/succession-planning-vs-replacement-hiring-checklist/","_section_link":"field_65170157d9d3e"},"mode":"preview"} -->
			<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large"} -->
			<figure class="wp-block-image size-large"><img src="' . $site_url . '/wp-content/uploads/2021/03/Are-You-Engaging-in-Succession-Planning-Checklist.png" alt=""/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column -->
			
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph -->
			<p>The succession planning vs replacement hiring checklist will help you identify if your organization is engaging in strategic long-term planning or settling for a quick fix.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"sigmagreen"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-sigmagreen-background-color has-background wp-element-button" href="/succession-planning-vs-replacement-hiring-checklist/"><strong>Download</strong></a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			<!-- /wp:acf/multipartsection -->
			
			<!-- wp:acf/multipartsection {"name":"acf/multipartsection","data":{"section_title":"Developing a Succession Plan that Supports Diversity","_section_title":"field_641de6ffd2fbb","section_link":"/wp-content/uploads/2022/12/Developing-a-Succession-Plan-that-Supports-Diversity.pdf","_section_link":"field_65170157d9d3e"},"mode":"preview"} -->
			<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph -->
			<p>In this guide, we discuss the importance of diversity, how building diversity can benefit your team, and how you can use succession planning to create a leadership development program that supports diversity.</p>
			<!-- /wp:paragraph -->
			
			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"sigmagreen"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-sigmagreen-background-color has-background wp-element-button" href="' . $site_url . '/wp-content/uploads/2022/12/Developing-a-Succession-Plan-that-Supports-Diversity.pdf" target="_blank" rel="noreferrer noopener"><strong>Download</strong></a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->
			<!-- /wp:acf/multipartsection -->
			<!-- /wp:acf/multipart -->',
	    )
	);
	register_block_pattern(
	    'sigma/testimonials',
	    array(
	        'title'       => __( 'Testimonials', 'sigma' ),
	        'categories'  => array('components', 'sigma-all'),
	        'content'     => '<!-- wp:acf/testimonials {"name":"acf/testimonials","data":{"field_65134e44c90d3":["520"],"field_6516d91816be6":"3"},"mode":"preview"} /-->',
	    )
	);
	register_block_pattern(
	    'sigma/accordion',
	    array(
	        'title'       => __( 'Accordion', 'sigma' ),
	        'categories'  => array('components', 'sigma-all'),
	        'content'     => '<!-- wp:acf/accordion {"name":"acf/accordion","data":{"html_tag":"h3","_html_tag":"field_651083d95f171","one_item":"1","_one_item":"field_6510c3bdb9257","accordion_0_title":"This is the first item","_accordion_0_title":"field_65108359b0ffe","accordion_0_content":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis dignissim velit. Aliquam et mi suscipit metus vestibulum eleifend. Fusce dignissim tincidunt imperdiet. Proin condimentum leo quis consectetur iaculis. Nullam eu laoreet nibh. In rutrum arcu ac convallis ultricies. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse id augue erat. In imperdiet ligula nec pellentesque euismod. Duis nec suscipit massa, in dignissim diam. Donec eget magna quis augue efficitur imperdiet in ac libero. In a metus eget est ultricies mattis eget vel urna. Vivamus mollis leo nibh. Fusce consectetur elit quis nulla fringilla vulputate. Integer id urna fermentum, accumsan justo quis, porta ligula. Praesent quis sem sed quam pharetra auctor sed ut nisi.","_accordion_0_content":"field_6510c30e2506c","accordion_1_title":"This is the second item","_accordion_1_title":"field_65108359b0ffe","accordion_1_content":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis dignissim velit. Aliquam et mi suscipit metus vestibulum eleifend. Fusce dignissim tincidunt imperdiet. Proin condimentum leo quis consectetur iaculis. Nullam eu laoreet nibh. In rutrum arcu ac convallis ultricies. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse id augue erat. In imperdiet ligula nec pellentesque euismod. Duis nec suscipit massa, in dignissim diam. Donec eget magna quis augue efficitur imperdiet in ac libero. In a metus eget est ultricies mattis eget vel urna. Vivamus mollis leo nibh. Fusce consectetur elit quis nulla fringilla vulputate. Integer id urna fermentum, accumsan justo quis, porta ligula. Praesent quis sem sed quam pharetra auctor sed ut nisi.","_accordion_1_content":"field_6510c30e2506c","accordion_2_title":"This is the third item","_accordion_2_title":"field_65108359b0ffe","accordion_2_content":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis dignissim velit. Aliquam et mi suscipit metus vestibulum eleifend. Fusce dignissim tincidunt imperdiet. Proin condimentum leo quis consectetur iaculis. Nullam eu laoreet nibh. In rutrum arcu ac convallis ultricies. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse id augue erat. In imperdiet ligula nec pellentesque euismod. Duis nec suscipit massa, in dignissim diam. Donec eget magna quis augue efficitur imperdiet in ac libero. In a metus eget est ultricies mattis eget vel urna. Vivamus mollis leo nibh. Fusce consectetur elit quis nulla fringilla vulputate. Integer id urna fermentum, accumsan justo quis, porta ligula. Praesent quis sem sed quam pharetra auctor sed ut nisi.","_accordion_2_content":"field_6510c30e2506c","accordion":3,"_accordion":"field_65108333b0ffd"},"mode":"preview"} -->',
	    )
	);
    register_block_pattern(
	    'sigma/accordion-w-icons',
	    array(
	        'title'       => __( 'Accordion with Icons', 'sigma' ),
	        'categories'  => array('components', 'sigma-all'),
	        'content'     => '<!-- wp:acf/accordion {"name":"acf/accordion","data":{"html_tag":"h3","_html_tag":"field_651083d95f171","one_item":"1","_one_item":"field_6510c3bdb9257","include_icons":"1","_include_icons":"field_6510cac51a576","accordion_0_icon":12311,"_accordion_0_icon":"field_6510cb171a577","accordion_0_title":"This is the first item","_accordion_0_title":"field_65108359b0ffe","accordion_0_content":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis dignissim velit. Aliquam et mi suscipit metus vestibulum eleifend. Fusce dignissim tincidunt imperdiet. Proin condimentum leo quis consectetur iaculis. Nullam eu laoreet nibh. In rutrum arcu ac convallis ultricies. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse id augue erat. In imperdiet ligula nec pellentesque euismod. Duis nec suscipit massa, in dignissim diam. Donec eget magna quis augue efficitur imperdiet in ac libero. In a metus eget est ultricies mattis eget vel urna. Vivamus mollis leo nibh. Fusce consectetur elit quis nulla fringilla vulputate. Integer id urna fermentum, accumsan justo quis, porta ligula. Praesent quis sem sed quam pharetra auctor sed ut nisi.","_accordion_0_content":"field_6510c30e2506c","accordion_1_icon":12353,"_accordion_1_icon":"field_6510cb171a577","accordion_1_title":"This is the second item","_accordion_1_title":"field_65108359b0ffe","accordion_1_content":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis dignissim velit. Aliquam et mi suscipit metus vestibulum eleifend. Fusce dignissim tincidunt imperdiet. Proin condimentum leo quis consectetur iaculis. Nullam eu laoreet nibh. In rutrum arcu ac convallis ultricies. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse id augue erat. In imperdiet ligula nec pellentesque euismod. Duis nec suscipit massa, in dignissim diam. Donec eget magna quis augue efficitur imperdiet in ac libero. In a metus eget est ultricies mattis eget vel urna. Vivamus mollis leo nibh. Fusce consectetur elit quis nulla fringilla vulputate. Integer id urna fermentum, accumsan justo quis, porta ligula. Praesent quis sem sed quam pharetra auctor sed ut nisi.","_accordion_1_content":"field_6510c30e2506c","accordion_2_icon":12314,"_accordion_2_icon":"field_6510cb171a577","accordion_2_title":"This is the third item","_accordion_2_title":"field_65108359b0ffe","accordion_2_content":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis dignissim velit. Aliquam et mi suscipit metus vestibulum eleifend. Fusce dignissim tincidunt imperdiet. Proin condimentum leo quis consectetur iaculis. Nullam eu laoreet nibh. In rutrum arcu ac convallis ultricies. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse id augue erat. In imperdiet ligula nec pellentesque euismod. Duis nec suscipit massa, in dignissim diam. Donec eget magna quis augue efficitur imperdiet in ac libero. In a metus eget est ultricies mattis eget vel urna. Vivamus mollis leo nibh. Fusce consectetur elit quis nulla fringilla vulputate. Integer id urna fermentum, accumsan justo quis, porta ligula. Praesent quis sem sed quam pharetra auctor sed ut nisi.","_accordion_2_content":"field_6510c30e2506c","accordion":3,"_accordion":"field_65108333b0ffd"},"mode":"preview"} -->',
	    )
	);
	register_block_pattern(
	    'sigma/stages',
	    array(
	        'title'       => __( 'Stages', 'sigma' ),
	        'categories'  => array('components', 'sigma-all'),
	        'content'     => '<!-- wp:acf/stages {"name":"acf/stages","data":{"current_stage":"i","_current_stage":"field_651b99ce47e97"},"mode":"preview"} /-->',
	    )
	);
	register_block_pattern(
	    'sigma/client-logo-slider',
	    array(
	        'title'       => __( 'Clients Logo Slider', 'sigma' ),
	        'categories'  => array('components', 'sigma-all'),
	        'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"textColor":"darkgrey"} -->
			<h4 class="wp-block-heading has-text-align-center has-darkgrey-color has-text-color">Trusted by over 8,500 organizations across North America, including:</h4>
			<!-- /wp:heading -->
			
			<!-- wp:acf/image-grid-slider {"name":"acf/image-grid-slider","data":{"num_rows":"2","_num_rows":"field_6515904055562","num_cols":"4","_num_cols":"field_65158ee348ca4","images":["19979","19977","19975","19972","19978","19976","19974","19971","19970","19968","16942","16940","19969","19967","16941","16939","16938","16936","16934","16932","16937","16935","16933","16931","16930","16928","16926","16924","16929","16927","16925","16923","16922","16920","16918","16916","16921","16919","16917","16915"],"_images":"field_65158cac1d30f"},"mode":"preview"} /--></div>
			<!-- /wp:group -->',
	    )
	);
}

add_action( 'init', 'sigma_register_components_patterns' );