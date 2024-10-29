<?php
$class_name = 'webinars-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$args = array(
	'post_type' => 'webinar',
	'post_status' => 'publish',
	'posts_per_page' => 6,
	'orderby' => 'date',
	'order' => 'DESC',
	'post__not_in' => array( get_the_ID() ),
    'paged' => $paged
);

$webinars = new WP_Query($args);

?>

<div class="<?php echo esc_attr($class_name); ?>">
    <div id="webinarsFeed">
        <?php include(get_stylesheet_directory() . '/blocks/webinars/list-webinars.php'); ?>
    </div>
</div>