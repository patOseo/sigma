<?php 

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    
$args = array(
    'post_type' => 'resource',
    'post_status' => 'publish',
    'posts_per_page' => 12,
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => $paged
);

$resources = new WP_Query($args);

?>

<?php if($resources->have_posts()): ?>
    <div class="resources-feed-block my-6">
        <div class="row">
            <?php while($resources->have_posts()): $resources->the_post(); ?>
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
                'total' => $resources->max_num_pages,
                'prev_text' => '&#60;',
                'next_text' => '&#62;',
            );

            ?>
            <?php understrap_pagination($pagination_args); ?>
        </div>
    </div>
<?php endif;