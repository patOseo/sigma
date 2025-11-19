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
$modals = array();

?>

<div class="<?php echo esc_attr($class_name); ?>">
    <div class="swiper px-2 py-4 <?php echo esc_attr($sliderclass); ?>">
        <div class="swiper-wrapper">
            <?php while(have_rows('carousel')): the_row(); ?>
                <div class="swiper-slide d-flex align-items-center text-center h-100">
                    <div class="shadowbox-block w-100 h-100">
                        <div class="slider-image d-flex flex-column align-self-center text-center w-100">
                            <?php 
                            $image = get_sub_field('icon');
                            $size = get_sub_field('image_size');
                            $image_size = 'full';
                            if($size == 'original') {
                                $image_size = 'large';
                            }elseif($size == 'icon') {
                                $image_size = array(60, 60);
                            }
                            if(get_sub_field('aspect_ratio') != 'original') {
                                $ratio = 'mb-4 rounded-4 overflow-hidden shadow ratio ratio-' . get_sub_field('aspect_ratio');
                            } else {
                                $ratio = 'rounded-4 original';
                            }

                            $add_modal = get_sub_field('add_modal_button');

                            if($add_modal && get_sub_field('select_modal')):
                                $selectmodal = get_sub_field('select_modal');
                                $modaltrigger = 'shadowbox-carousel-modal-' . $uid . '-' . get_row_index();
                                $modal_button_text = get_sub_field('modal_button_text');
                                $modals[] = array(
                                    'selectmodal' => $selectmodal,
                                    'modaltrigger' => $modaltrigger,
                                );
                            endif;
                            ?>
                            <div class="<?php echo $ratio; ?>">
                                <?php if($image): echo wp_get_attachment_image($image, $image_size, '', array('class' => 'mx-auto mb-4 object-fit-cover')); endif; ?>
                            </div>
                            <div class="h4"><?php echo get_sub_field('title'); ?></div>
                            <div><?php echo get_sub_field('description'); ?></div>
                            <?php if($add_modal && get_sub_field('select_modal')): ?>
                                <a href="#<?php echo esc_attr($modaltrigger); ?>" class="d-block mx-auto btn btn-primary rounded-pill mt-3 px-4"><?php echo get_sub_field('modal_button_text'); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <div class="swiper-button-prev <?php echo esc_attr($prevclass); ?>"></div>
        <div class="swiper-button-next <?php echo esc_attr($nextclass); ?>"></div>
    </div>
</div>

<?php if($modals): ?>
    <?php foreach($modals as $modal): $modaltrigger = $modal['modaltrigger']; $modal_post = get_post($modal['selectmodal']); $modalcontent = $modal_post->post_content; ?>
        <div class="modal fade" id="<?php echo esc_attr($modaltrigger); ?>" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content shadow">
              <div class="modal-body">
              <button type="button" class="btn-close position-absolute top-0 end-0 p-3" data-bs-dismiss="modal" aria-label="Close"></button>
                <?php echo do_shortcode($modalcontent); ?>
              </div>
            </div>
          </div>
        </div>
        <script>
            <?php // This finds the <a> tag on the page that matches the modal trigger, and enables modal pop up on click. ?>
            jQuery(document).ready(function($) {
                $('a[href="#<?php echo esc_attr($modaltrigger); ?>"]').on('click', function() {
                    $('#<?php echo esc_attr($modaltrigger); ?>').modal('show');
                });
            });
        </script>
    <?php endforeach; ?>
<?php endif; ?>

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