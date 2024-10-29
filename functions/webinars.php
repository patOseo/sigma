<?php
add_filter('acf/fields/post_object/query/name=event', 'filter_acf_future_events', 10, 3);
function filter_acf_future_events($args, $field, $post_id) {
    $args['meta_query'] = [
        [
            'key' => '_EventEndDate', // The Events Calendar stores the event end date in this meta key
            'value' => current_time('Y-m-d H:i:s'), // Current time in Y-m-d H:i:s format
            'compare' => '>=', // Only show events ending in the future
            'type' => 'DATETIME'
        ]
    ];
    return $args;
}