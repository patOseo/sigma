<?php 
$class_name = 'upcoming-webinar-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}

$img = 'https://www.sigmaassessmentsystems.com/wp-content/uploads/2021/10/4k-wallpaper-blur-close-up-1525106-1.jpg';

// Get the upcoming webinar from The Event Calendar "event" that is closest to the current date
$args = array(
    'post_type' => 'tribe_events',
    'post_status' => 'publish',
    'posts_per_page' => 1,
    'orderby' => 'meta_value',
    'meta_key' => '_EventStartDate',
    'order' => 'ASC',
    'meta_query' => array(
        array(
            'key' => '_EventStartDate',
            'value' => current_time('Y-m-d H:i:s'),
            'compare' => '>=',
            'type' => 'DATETIME'
        )
    )
);

$upcoming_webinar = new WP_Query($args);

?>
<?php if($upcoming_webinar->have_posts()): ?>

    <div class="<?php echo esc_attr($class_name); ?>">
        <?php while($upcoming_webinar->have_posts()): $upcoming_webinar->the_post(); 
        $presenter = get_field('presenter', get_the_ID());
        $venue_id = get_post_meta(get_the_ID(), '_EventVenueID', true);
        $event_date = get_post_meta(get_the_ID(), '_EventStartDate', true);
        $event_date_formatted = date('F j, Y', strtotime($event_date));
        ?>
            <div class="upcoming-webinar shadow rounded-4 position-relative">
                <div class="row gx-0 overflow-hidden rounded-4">
                    <div class="col-12 col-lg-6 overflow-hidden">
                        <div class="upcoming-webinar-img h-100"><img src="<?php echo esc_url($img); ?>" alt="<?php the_title(); ?>"></div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="upcoming-webinar-info p-4 p-lg-6">
                            <h2 class="h1 fw-bold text-uppercase"><a class="stretched-link text-decoration-none text-primary" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="event-info text-secondary h4 py-4 py-lg-5">
                                <?php echo $event_date_formatted . " &nbsp; | &nbsp; " . get_the_title($venue_id); ?>
                            </div>
                            <?php if($presenter): ?>
                            <div class="row gx-3 align-items-center">
                                <div class="col mb-0">
                                    <div class="presenter-image text-center">
                                        <?php
                                        if(get_field('image', $presenter)) {
                                            $img_id = get_field('image', $presenter); 
                                        } else {
                                            $img_id = 10611;
                                        }
                                        echo wp_get_attachment_image($img_id, array(120, 120)); 
                                        ?>
                                    </div>
                                </div>
                                <div class="col-9 mb-0">
                                    <div class="presenter-name ff-montserrat fs-4 fw-500 lh-sm text-primary"><?php if(get_field('name', $presenter)) { echo get_field('name', $presenter); } else { echo 'SIGMA Assessment Systems'; } ?></div>
                                    <div class="presenter-position fw-normal fs-5 lh-sm text-grey"><?php echo get_field('position', $presenter); ?></div>
                                </div>
                            </div>
                            <?php endif; ?>
                            <div class="d-block upcoming-webinar-excerpt mt-5">
                                <p class="fs-5 mb-0 lh-1"><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="position-absolute upcoming-webinar-btn top-100 start-50 translate-middle btn btn-outline-secondary rounded-5 fw-bold px-4 py-2">See event details</button>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
    <?php else: ?>
        <p class="h4 lh-sm text-grey fw-light">There are currently no upcoming webinars, but feel free to browse our collection of on-demand webinars below.</p>
    <?php endif;