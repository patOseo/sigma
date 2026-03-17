<?php 
function sigma_ajax_filter_blogs() {
    $blog_cat = 'all';
    $show_excerpt = false;
    $excerpt_from = '';

    if(isset($_POST['category'])) {
        $blog_cat = sanitize_text_field(wp_unslash($_POST['category']));
    }

    if(isset($_POST['show_excerpt'])) {
        $show_excerpt_value = sanitize_text_field(wp_unslash($_POST['show_excerpt']));
        $show_excerpt = in_array($show_excerpt_value, array('1', 'true', 'yes'), true);
    }

    if(isset($_POST['excerpt_from'])) {
        $excerpt_from = sanitize_key(wp_unslash($_POST['excerpt_from']));
    }

    if(!in_array($excerpt_from, array('meta_desc', 'excerpt'), true)) {
        $excerpt_from = 'excerpt';
    }

    if(isset($_POST['page'])) {
        $paged = absint($_POST['page']);
    } else {
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    }

    if($paged < 1) {
        $paged = 1;
    }
    // Load values into the query args
    $args = array(
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page' => 12,
        'paged'          => $paged,
    );

    // If $blog_cat has a value and the value is not 'all', add it to the query args
    if($blog_cat && $blog_cat != 'all') {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => $blog_cat,
            ),
        );
    }

    $query = new WP_Query($args);

    ob_start();
    include(get_stylesheet_directory() . '/loop-templates/list-blogs.php');
    $loop_output = ob_get_clean();
    echo $loop_output;

    wp_reset_postdata();

    die();
}

add_action('wp_ajax_filter_blogs', 'sigma_ajax_filter_blogs');
add_action('wp_ajax_nopriv_filter_blogs', 'sigma_ajax_filter_blogs');
