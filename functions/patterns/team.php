<?php

// Register patterns
function sigma_register_team_patterns() {
    $site_url = get_site_url();
	register_block_pattern(
	    'sigma/meet-the-team',
	    array(
	        'title'       => __( 'Meet the Team', 'sigma' ),
	        'categories'  => array('team', 'sigma-all'),
	        'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}}} -->
            <h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--70)">Meet the Team</h2>
            <!-- /wp:heading -->
            
            <!-- wp:acf/team-members {"name":"acf/team-members","data":{"show_all":"0","_show_all":"field_65161beb9bf6c","show_bio":"1","_show_bio":"field_651628d5b8f15","select_members":["36849","36850","36838"],"_select_members":"field_65161c499bf6d"},"mode":"preview"} /--></div>
            <!-- /wp:group -->',
	    )
	);
    register_block_pattern(
	    'sigma/team-members',
	    array(
	        'title'       => __( 'Team Members', 'sigma' ),
	        'categories'  => array('team', 'sigma-all'),
	        'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"textColor":"sigmadarkgreen"} -->
			<h3 class="wp-block-heading has-sigmadarkgreen-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--70)">Meet our Team</h3>
			<!-- /wp:heading -->
			
			<!-- wp:acf/team-members {"name":"acf/team-members","data":{"field_65161beb9bf6c":"1","field_651628d5b8f15":"1"},"mode":"preview"} /--></div>
			<!-- /wp:group -->',
	    )
	);
}
add_action( 'init', 'sigma_register_team_patterns' );