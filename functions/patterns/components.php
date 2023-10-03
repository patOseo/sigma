<?php

// Register patterns
function sigma_register_components_patterns() {
	register_block_pattern(
	    'sigma/team-members',
	    array(
	        'title'       => __( 'Team Members', 'sigma' ),
	        'categories'  => array('components', 'sigma-all'),
	        'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"textColor":"sigmadarkgreen"} -->
			<h3 class="wp-block-heading has-sigmadarkgreen-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--70)">Meet our Team</h3>
			<!-- /wp:heading -->
			
			<!-- wp:acf/team-members {"name":"acf/team-members","data":{"field_65161beb9bf6c":"1","field_651628d5b8f15":"1"},"mode":"preview"} /--></div>
			<!-- /wp:group -->',
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
			
			<!-- wp:acf/image-grid-slider {"name":"acf/image-grid-slider","data":{"num_rows":"2","_num_rows":"field_6515904055562","num_cols":"4","_num_cols":"field_65158ee348ca4","images":["19979","19977","19975","19972","19978","19976","19974","19971","19970","19968","16942","16940","19969","19967","16941","16939","16938","16936","16934","16932","16937","16935","16933","16931","16930","16928","16926","16924","16929","16927","16925","16923","16922","16920","16918","16916","16921","16919","16917","16915"],"_images":"field_65158cac1d30f"},"mode":"edit"} /--></div>
			<!-- /wp:group -->',
	    )
	);
}

add_action( 'init', 'sigma_register_components_patterns' );