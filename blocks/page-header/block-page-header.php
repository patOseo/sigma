<?php 

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block-page-header mb-5';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$bg_id = get_field('bg_img');
if($bg_id) {
    $bg = wp_get_attachment_image_url($bg_id, 'full');
} else {
    if(get_the_post_thumbnail()) {
        $bg = get_the_post_thumbnail_url(get_the_ID(), 'full');
    } else {
        $bg = wp_get_attachment_image_url(11909, 'full');
    }
}

$template = array(
    array('core/group', array(
            'name' => 'core/group',
            'style' => array(
                'color' => array(
                    'background' => '#0000004d',
                ),
            ),
            'className' => 'w-100 py-5 text-center text-white',
        ),
        array(
            array('core/post-title', array(
                'level' => 1,
                'className' => 'mb-1 text-uppercase text-white text-shadow display-3',
            )),
        )
        
    )
);
?>

<div class="<?php echo esc_attr($className); ?>">
    <div class="page-header-bg position-relative" style="background-image: url('<?= $bg; ?>');">
        <div class="position-absolute top-50 start-50 translate-middle w-100">
            <div class="container">
                <InnerBlocks template="<?php echo esc_attr(wp_json_encode($template)); ?>" />
            </div>
        </div>
    </div>
</div>

<?php
if(is_single() && get_post_type() == 'post'):
    if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<p class="yoast-breadcrumbs" id="breadcrumbs">','</p>' );
    }
endif;