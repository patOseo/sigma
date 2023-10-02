<?php
// Add the custom column for the featured image
function sigma_add_featured_image_column($columns) {
    $columns['image'] = __('Image', 'sigma');
    return $columns;
}
add_filter('manage_edit-assessments_columns', 'sigma_add_featured_image_column');
add_filter('manage_edit-post_columns', 'sigma_add_featured_image_column');

// Display the featured image in the custom column
function sigma_display_featured_image_column($column, $post_id) {
    if ($column === 'image') {
        $thumbnail = get_the_post_thumbnail($post_id, array(60, 60));
        
        if (!empty($thumbnail)) {
            echo $thumbnail;
        } else {
            echo 'N/A';
        }
    }
}
add_action('manage_assessments_posts_custom_column', 'sigma_display_featured_image_column', 10, 2);
add_action('manage_post_posts_custom_column', 'sigma_display_featured_image_column', 10, 2);

function custom_reorder_columns($columns) {
    // Remove the Thumbnail column from its current position
    $thumbnail_column = $columns['image'];
    unset($columns['image']);
    
    // Insert the Thumbnail column after the Title column
    $new_columns = array();
    foreach ($columns as $key => $value) {
        $new_columns[$key] = $value;
        if ($key === 'title') {
            $new_columns['image'] = $thumbnail_column;
        }
    }

    return $new_columns;
}
add_filter('manage_edit-assessments_columns', 'custom_reorder_columns');
add_filter('manage_edit-post_columns', 'custom_reorder_columns');

