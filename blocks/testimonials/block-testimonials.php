<?php
$class_name = 'testimonials-block position-relative overflow-hidden align-items-center my-6';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}

$uid = uniqid();
$sliderclass = 'swiper-' . $uid;
$nextclass = 'swiper-button-next-' . $uid;
$prevclass = 'swiper-button-prev-' . $uid;

$select_cat = get_field('select_category');
$per_slide = get_field('per_slide');

$args = array(
    'post_type' => 'testimonial',
    'posts_per_page' => -1,
    'orderby' => 'rand',
);

if($select_cat) {
    $args['tax_query'] = array(
        array(
            'taxonomy' => 'testimonial-category',
            'field' => 'term_id',
            'terms' => $select_cat,
        ),
    );
}



$testimonials = new WP_Query($args);

if($testimonials->found_posts == 1) {
    $slidesperview = 1;
} else {
    if($per_slide) {
        $slidesperview = $per_slide;
    } else {
        $slidesperview = 3;
    }
}

?>

<?php if($testimonials->have_posts()): ?>
<div class="<?php echo esc_attr($class_name); ?>">

    <!-- Slider main container -->
    <div class="swiper <?php echo esc_attr($sliderclass); ?> mb-6 py-4">
      <div class="swiper-wrapper">
        <!-- Slides -->
        <?php while($testimonials->have_posts()): $testimonials->the_post(); ?>        
            <div class="swiper-slide text-center h-100">
                <div class="testimonial d-flex justify-content-center align-items-center mx-2 px-3 py-6 h-100 bg-lightestgrey rounded-4">
                    <div class="mt-3">
                        <div class="testimonial-icon position-absolute top-0 start-50 translate-middle bg-white rounded-circle p-3">
                            <?php include(get_stylesheet_directory() . '/images/icons/icon-message.svg'); ?>
                        </div>
                        
                        <div class="testimonial-content position-relative mb-3 mx-lg-5 px-2 fs-sm">
                            <p class="mb-0 lh-base"><?php echo '"' . get_field('testimonial', get_the_ID(), false) . '"'; ?></p>
                        </div>
                        <hr class="mx-auto mt-3 mb-2">
                        <div class="mt-auto testimonial-name text-primary fw-bold">
                            <?php the_field('name', get_the_ID()); ?>
                            <?php if(get_field('job_title', get_the_ID())): ?>
                                <br><span class="text-body fs-xs"><?php the_field('job_title', get_the_ID()); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
      </div>

        <?php if($testimonials->found_posts > 1): ?>
            <div class="swiper-button-prev <?php echo esc_attr($prevclass); ?>"></div>
            <div class="swiper-button-next <?php echo esc_attr($nextclass); ?>"></div>
        <?php endif; ?>

    </div>

</div>

<script>
jQuery(function($){
    const swiper = new Swiper('.<?= $sliderclass; ?>', {
        // Optional parameters
        direction: 'horizontal',
        autoHeight: true,
        loop: true,
        infinite: true,
        speed: 500,
        slidesPerView: 1, 

        breakpoints: {
            // when window width is >= 640px
            992: {
              slidesPerView: <?php echo $slidesperview; ?>,
              spaceBetween: 20
            }
        },
      
        // Navigation arrows
        navigation: {
          nextEl: '.<?php echo $nextclass; ?>',
          prevEl: '.<?php echo $prevclass; ?>',
        },
    });
});
</script>

<?php endif;
