<?php
$class_name = 'image-grid-slider-block position-relative align-items-center my-6';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}

$images = get_field('images');
$num_rows = get_field('num_rows');
$num_cols = get_field('num_cols');
$uid = uniqid();
$sliderclass = 'swiper-' . $uid;
$nextclass = 'swiper-button-next-' . $uid;
$prevclass = 'swiper-button-prev-' . $uid;

?>

<?php if($images): ?>
<div class="<?php echo esc_attr($class_name); ?>">
    <!-- Slider main container -->
    <div class="swiper mb-6 py-4">

      <div class="swiper-container <?php echo esc_attr($sliderclass); ?>">
          <div class="swiper-wrapper">
            <!-- Slides -->
            <?php foreach($images as $image): ?>
                <div class="swiper-slide d-flex align-items-center text-center">
                    <div class="slider-image d-flex flex-column align-self-center text-center w-100">
                        <?php echo wp_get_attachment_image($image, 'full', '', array('class' => 'mx-auto')); ?>
                    </div>
                </div>
            <?php endforeach; ?>
          </div>
      </div>

      <div class="swiper-button-prev <?php echo esc_attr($prevclass); ?>"></div>
      <div class="swiper-button-next <?php echo esc_attr($nextclass); ?>"></div>
    </div>

</div>

<script>
jQuery(function($){
    var iNoSlides = $(".swiper .swiper-slide").length;
	var bLoop = true;
	if ( iNoSlides < 6 ) {
		bLoop = false;
	}
    const swiper = new Swiper('.<?= $sliderclass; ?>', {
        grid: {
            fill: 'row',
            rows: <?= $num_rows; ?>,
        },
        slidesPerView: 1,
		slidesPerGroup: 1,
		spaceBetween: 30,
		speed: 800,
		watchOverflow: true,
		loop: true,
		autoplay: {
			delay: 3500,
			disableOnInteraction: false,
		},
		// Responsive breakpoints
		breakpoints: {
			// when window width is >= 480px
			480: {
				slidesPerView: 2,
				slidesPerGroup: 2,
                grid: {
                    fill: 'row',
                    rows: <?= $num_rows; ?>,
                },
			},
			// when window width is >= 990px
			990: {
				slidesPerView: 3,
				slidesPerGroup: 3,
                grid: {
                    fill: 'row',
                    rows: <?= $num_rows; ?>,
                },
			},
            // when window width is >= 1400px
			1400: {
				slidesPerView: <?php echo $num_cols; ?>,
				slidesPerGroup: <?php echo $num_cols; ?>,
                grid: {
                    fill: 'row',
                    rows: <?= $num_rows; ?>,
                },
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
