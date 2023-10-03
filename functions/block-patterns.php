<?php 

// Remove all built-in WordPress patterns
function sigma_remove_builtin_patterns() {
    remove_theme_support('core-block-patterns');
}
add_action('after_setup_theme', 'sigma_remove_builtin_patterns');


// Register custom block pattern categories
function sigma_block_pattern_categories() {
	register_block_pattern_category( 'sigma-all', array(
		'label' => __( 'SIGMA (All)', 'sigma' )
	) );
	register_block_pattern_category( 'templates', array(
		'label' => __( 'Full Page Templates', 'sigma' )
	) );
    register_block_pattern_category( 'headers', array(
		'label' => __( 'Headers', 'sigma' )
	) );
    register_block_pattern_category( 'columns-layouts', array(
		'label' => __( 'Columns & Layouts', 'sigma' )
	) );
	register_block_pattern_category( 'components', array(
		'label' => __( 'Components', 'sigma' )
	) );
	register_block_pattern_category( 'team', array(
		'label' => __( 'Team', 'sigma' )
	) );
	register_block_pattern_category( 'ctas', array(
		'label' => __( 'Call-to-actions', 'sigma' )
	) );
}
add_action( 'init', 'sigma_block_pattern_categories' );

@include_once('patterns/templates.php');
@include_once('patterns/headers.php');
@include_once('patterns/components.php');
@include_once('patterns/columns-layouts.php');
@include_once('patterns/call-to-actions.php');
@include_once('patterns/team.php');