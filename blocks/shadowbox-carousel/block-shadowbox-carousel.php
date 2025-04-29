<?php
$class_name = 'block-shadowbox-carousel';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}

$num_rows = get_field('rows');

$uid = uniqid();
$sliderclass = 'swiper-' . $uid;
$nextclass = 'swiper-button-next-' . $uid;
$prevclass = 'swiper-button-prev-' . $uid;

?>

<div class="<?php echo esc_attr($class_name); ?>">
    <div class="swiper px-2 py-3 <?php echo esc_attr($sliderclass); ?>">
        <div class="swiper-wrapper">
            <?php while(have_rows('carousel')): the_row(); ?>
                <div class="swiper-slide d-flex align-items-center text-center h-100">
                    <div class="shadowbox-block w-100 h-100">
                        <div class="slider-image d-flex flex-column align-self-center text-center w-100">
                            <?php $image = get_sub_field('icon'); ?>
                            <?php echo wp_get_attachment_image($image, array(60, 60), '', array('class' => 'mx-auto mb-4')); ?>
                            <div class="h4"><?php echo get_sub_field('title'); ?></div>
                            <div><?php echo get_sub_field('description'); ?></div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <div class="swiper-button-prev <?php echo esc_attr($prevclass); ?>"></div>
        <div class="swiper-button-next <?php echo esc_attr($nextclass); ?>"></div>
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
            992: {
              slidesPerView: <?php echo $num_rows; ?>,
              spaceBetween: 20
            },
        },
      
        // Navigation arrows
        navigation: {
          nextEl: '.<?php echo $nextclass; ?>',
          prevEl: '.<?php echo $prevclass; ?>',
        },
    });
});
</script>