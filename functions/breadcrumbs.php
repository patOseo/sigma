<?php
function sigma_modify_breadcrumbs($links) {
    // Check if the current page is a child of the "Assessments Category" page.
    $parent_id = 36404; // This is the ID for the "Assessments Category" page.

    global $post;
    $current_page_id = $post->ID;
    if ( $current_page_id !== $parent_id && in_array($parent_id, get_post_ancestors($current_page_id)) ) {
        // Define the custom breadcrumb link.
        $custom_link = array(
            'url' => home_url('assessments/'), // Replace with your custom URL.
            'text' => 'Assessments', // Replace with your custom breadcrumb text.
        );

        // Replace the second breadcrumb link with the custom link.
        $links[1] = $custom_link;
    }

    return $links;
}

add_filter('wpseo_breadcrumb_links', 'sigma_modify_breadcrumbs');



// Check if the 'yoast-seo/breadcrumbs' block is present on the current page, including nested blocks
function sigma_check_yoast_seo_breadcrumbs_block($blocks) {
    foreach ($blocks as $block) {
        if ($block['blockName'] === 'yoast-seo/breadcrumbs') {
            return true;
        }

        // Check for nested blocks
        if (!empty($block['innerBlocks'])) {
            $nested_blocks = $block['innerBlocks'];
            if (sigma_check_yoast_seo_breadcrumbs_block($nested_blocks)) {
                return true;
            }
        }
    }

    return false; // If the block is not found, return false
}