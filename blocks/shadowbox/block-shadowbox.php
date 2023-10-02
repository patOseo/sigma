<?php

$class_name = 'shadowbox-block position-relative d-flex flex-column h-100 p-4 rounded-3';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
?>

<div class="<?php echo esc_attr($class_name); ?>">
    <div class="shadowbox-content">
        <InnerBlocks />
    </div>
</div>