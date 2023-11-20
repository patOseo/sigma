<?php
$class_name = 'testimonials-block position-relative overflow-hidden align-items-center my-6';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}

$style = get_field('style');

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

if($testimonials->found_posts == 1 || $style == 'single') {
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
      
        <?php @include_once('style-' . $style . '.php'); ?>

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
