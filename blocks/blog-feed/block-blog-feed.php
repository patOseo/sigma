<?php 

$show_all = get_field('show_all_blogs');
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

if($show_all): 
    
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 12,
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => $paged
);

else: 
    $selection_type = get_field('selection_type');

    if($selection_type == 'manually') {
        $selected_blogs = get_field('select_blogs');

        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 12,
            'orderby' => 'post__in',
            'order' => 'ASC',
            'post__in' => $selected_blogs,
            'paged' => $paged
        );
    } elseif($selection_type == 'by_cat') {
        $blog_cats = get_field('select_category');

        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 12,
            'paged' => $paged,
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field' => 'term_id',
                    'terms' => $blog_cats
                )
            )
        );
    }
    

endif;

$query = new WP_Query($args);

?>
<div class="blog-feed-block my-6">
    <?php if($show_all): // Only show blog categories if "show all blogs" is selected ?>
        <div class="blog-categories mb-5">
            <?php 
            $blog_cats = get_terms(array(
                'taxonomy' => 'category',
                'hide_empty' => true,
                'orderby' => 'name',
                'order' => 'ASC'
            ));
            ?>
            <a class="category-link active btn btn-lightestgrey btn-primary btn-lg mb-2 px-3 py-2 fw-light fs-sm rounded-pill" data-cat="all" href="/blog-posts/">All</a>
            <?php foreach($blog_cats as $blog_cat): if($blog_cat->slug == 'uncategorized') { continue; }
                $cat_link = get_term_link($blog_cat->term_id);
                $cat_name = $blog_cat->name;
                $cat_slug = $blog_cat->slug;
                $cat_count = $blog_cat->count;
                ?>
                <a class="category-link btn btn-lightestgrey btn-lg mb-2 px-3 py-2 fw-light fs-sm rounded-pill" data-cat="<?php echo esc_attr($cat_slug); ?>" href="<?php echo $cat_link; ?>"><?php echo $cat_name; ?></a>
            
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <div id="blogFeed">
        <?php include(get_stylesheet_directory() . '/loop-templates/list-blogs.php'); ?>
    </div>
</div>