<?php

function sigma_enqueue_script_based_on_block() {
    // Check if the post contains the block requiring the Swiper.js CDN. If so, load the CDN in the head.
    if (has_block('acf/testimonials', get_post())
       || has_block('acf/image-grid-slider', get_post())
       || has_block('acf/shadowbox-carousel', get_post())) {
        // Enqueue the script.
        wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), '1.0', false); 
    }
}
add_action('wp_enqueue_scripts', 'sigma_enqueue_script_based_on_block');