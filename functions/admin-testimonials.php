<?php
// Add the custom columns for testimonials
function sigma_add_custom_columns($columns) {
    $columns['job_title'] = __('Job Title', 'sigma');
    $columns['organization'] = __('Organization', 'sigma');
    $columns['testimonial'] = __('Testimonial', 'sigma');
    return $columns;
}
add_filter('manage_edit-testimonial_columns', 'sigma_add_custom_columns');

// Display the fields in the custom columns
function sigma_display_fields_custom_column($column, $post_id) {
    $fields = array('job_title', 'organization', 'testimonial');

    foreach($fields as $field) {
        if ($column === $field) {
            $value = get_field($field);
            
            if (!empty($value)) {
                echo $value;
            } else {
                echo '';
            }
        }
    }
}
add_action('manage_testimonial_posts_custom_column', 'sigma_display_fields_custom_column', 10, 2);

function sigma_custom_reorder_testimonial_columns($columns) {
    // Remove the Thumbnail column from its current position
    $jobtitle_column = $columns['job_title'];
    $org_column = $columns['organization'];
    $testimonial_column = $columns['testimonial'];
    unset($columns['job_title']);
    unset($columns['organization']);
    unset($columns['testimonial']);
    
    // Insert the Thumbnail column after the Title column
    $new_columns = array();
    foreach ($columns as $key => $value) {
        $new_columns[$key] = $value;
        if ($key === 'title') {
            $new_columns['job_title'] = $jobtitle_column;
            $new_columns['organization'] = $org_column;
            $new_columns['testimonial'] = $testimonial_column;
        }
    }

    return $new_columns;
}
add_filter('manage_edit-testimonial_columns', 'sigma_custom_reorder_testimonial_columns');

