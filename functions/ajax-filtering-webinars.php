<?php 
function sigma_ajax_filter_webinars() {
    if(isset($_POST['page'])) {
        $paged = $_POST['page'];
    } else {
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    }

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

    ob_start();
    include(get_stylesheet_directory() . '/blocks/webinars/list-webinars.php');
    $loop_output = ob_get_clean();
    echo $loop_output;

    wp_reset_postdata();

    die();
}

add_action('wp_ajax_filter_webinars', 'sigma_ajax_filter_webinars');
add_action('wp_ajax_nopriv_filter_webinars', 'sigma_ajax_filter_webinars');
