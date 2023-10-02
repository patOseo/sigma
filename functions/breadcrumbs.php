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