<?php 

// Create class attribute allowing for custom "className" and "align" values.
$className = 'assessments-feed-block mt-4 mb-6';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$by_category = get_field('select_mode');

if($by_category): 

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$assessment_cat = get_field('select_category');

    $args = array(
        'post_type' => 'assessments',
        'post_status' => 'publish',
        'posts_per_page' => 12,
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'assessment-types',
                'field' => 'term_id',
                'terms' => $assessment_cat
            )
        ),
        'paged' => $paged
    );

else: 

endif;

$assessments = new WP_Query($args);

?>

<?php if($assessments->have_posts()): ?>
    <div class="<?php echo esc_attr($className); ?>">
        <div class="row gx-6">
            <?php while($assessments->have_posts()): $assessments->the_post(); ?>
                <div class="col-md-6 mb-6">
                    <div class="assessments-feed-item position-relative">
                        <div class="assessments-feed-item-image mb-3 position-relative overflow-hidden">
                            <div class="assessments-category position-absolute start-0 text-white">
                                <?php 
                                $cats = get_the_terms(get_the_ID(), 'assessment-types'); 
                                foreach($cats as $cat): echo $cat->name; endforeach; 
                                ?>
                            </div>
                            <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'post-thumbnail', '', array('class' => 'position-absolute top-50 start-50 translate-middle w-100')); ?>
                        </div>
                        <div class="assessments-feed-item-content">
                            <a class="stretched-link text-decoration-none" href="<?php the_permalink(); ?>"><h2 class="h4 fw-bold"><?php the_title(); ?></h2></a>
                            <?php the_excerpt(); ?>
                            <button class="btn btn-outline-secondary btn-lg px-3 py-2 fs-sm fw-normal rounded-pill">Learn More</button>
                        </div>
                    </div>
                </div>
            <?php endwhile; 
            
            ?>
        </div>
        <div class="pagination-container mt-5">
            <?php 
            $pagination_args = array(
                'total' => $assessments->max_num_pages,
                'prev_text' => '&#60;',
                'next_text' => '&#62;',
            );

            ?>
            <?php understrap_pagination($pagination_args); ?>
        </div>
    </div>
<?php endif;