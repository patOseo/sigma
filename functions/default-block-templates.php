<?php

function sigma_add_default_block_template_to_post_type($args, $post_type) {
    if ('page' === $post_type || 'post' === $post_type) {
        $args['template'] = array(
            array(
                'acf/header',
                array(
                    'name' => 'acf/header',
                    'data' => array(
                        'bg_img' => '',
                        '_bg_img' => 'field_650b146f0c88e',
                    ),
                    'mode' => 'preview',
                ),
            ),
            array( 'core/group', 
                array(
                    'name' => 'core/group',
                    'layout' => array(
                        'type' => 'constrained',
                    ),
                ),
                array(
                    array('yoast-seo/breadcrumbs', array(
                            'name' => 'yoast-seo/breadcrumbs',
                        )
                    ),
                    array('core/paragraph', array(
                            'name' => 'core/paragraph',
                            'placeholder' => 'Start adding content here, or type "/" to view available blocks',
                        )
                    ),
                ),
            ),
        );
    }
    return $args;
}

add_filter('register_post_type_args', 'sigma_add_default_block_template_to_post_type', 10, 2);
