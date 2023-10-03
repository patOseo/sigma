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

$blogs = new WP_Query($args);

?>

<?php if($blogs->have_posts()): ?>
    <div class="blog-feed-block my-6">
        <?php if($show_all): // Only show blog categories if "show all blogs" is selected ?>
        <div class="blog-categories mb-4">
            <?php 
            $blog_cats = get_terms(array(
                'taxonomy' => 'category',
                'hide_empty' => true,
                'orderby' => 'name',
                'order' => 'ASC'
            ));

            foreach($blog_cats as $blog_cat): if($blog_cat->slug == 'uncategorized') { continue; }
                $cat_link = get_term_link($blog_cat->term_id);
                $cat_name = $blog_cat->name;
                $cat_slug = $blog_cat->slug;
                $cat_count = $blog_cat->count;
                ?>
                <a class="btn btn-lightestgrey btn-lg mb-2 px-3 py-2 fw-light fs-sm rounded-pill" href="<?php echo $cat_link; ?>"><?php echo $cat_name; ?></a>
            
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <div class="row">
            <?php while($blogs->have_posts()): $blogs->the_post(); ?>
                <div class="col-md-4 mb-4">
                    <div class="blog-feed-item position-relative">
                        <div class="blog-feed-item-image mb-3 position-relative overflow-hidden">
                            <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'post-thumbnail'); ?>
                        </div>
                        <div class="blog-feed-item-content">
                            <a class="stretched-link text-decoration-none" href="<?php the_permalink(); ?>"><h2 class="h4 fw-bold"><?php the_title(); ?></h2></a>
                            <p class="fs-sm"><?php the_date('F Y'); ?></p>
                            <button class="btn btn-outline-secondary btn-lg px-4 py-3 fs-sm fw-normal rounded-pill">Read More</button>
                        </div>
                    </div>
                </div>
            <?php endwhile; 
            
            ?>
        </div>
        <div class="pagination-container mt-5">
            <?php 
            $pagination_args = array(
                'total' => $blogs->max_num_pages,
                'prev_text' => '&#60;',
                'next_text' => '&#62;',
            );

            ?>
            <?php understrap_pagination($pagination_args); ?>
        </div>
    </div>
<?php endif;