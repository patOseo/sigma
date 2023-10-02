<?php

$class_name = 'accordion-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}

$htmltag = get_field('html_tag'); 
$uniqid = wp_rand();
$oneitem = get_field('one_item');
$icons = get_field('include_icons');
$advmode = get_field('advanced_mode');
?>

<div class="<?php echo esc_attr($class_name); ?>">
    <div id="accordion-<?= $uniqid; ?>" class="accordion">

    <?php if($advmode): ?>
        <?php $allowed_inner_blocks = ['acf/accordion-item']; ?>
        <InnerBlocks allowedBlocks="<?php echo esc_attr(wp_json_encode($allowed_inner_blocks)); ?>" accordionId="accordion-<?= $uniqid; ?>" />
    <?php else: ?>
        <?php if(have_rows('accordion')): ?>
            <?php while(have_rows('accordion')): the_row(); ?>
                <?php 
                $htmltagopen = '<' . $htmltag . ' id="heading-' . $uniqid . '-' . get_row_index() . '" class="mb-0">';
                $htmltagclose = "</" . $htmltag . ">";    
                ?>
                <?php if($icons): ?>
                <div class="row mx-0 mb-6">
                    <div class="col-md-2 text-center mb-3 mb-md-0">
                        <?php echo wp_get_attachment_image(get_sub_field('icon'), array(80, 80)); ?>
                    </div>
                    <div class="col-md-10">
                <?php endif; ?>
                    <div class="accordion-item border-0 rounded-3 mb-2">
                        <?php echo $htmltagopen; ?>
                            <button class="accordion-button border border-1 collapsed mb-0 text-primary bg-lightestgrey fw-bold rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $uniqid . get_row_index(); ?>" aria-expanded="false" aria-controls="collapse-<?= $uniqid; ?>–<?php echo get_row_index(); ?>">
                                <?php the_sub_field('title'); ?>
                            </button>
                        <?php echo $htmltagclose; ?>
                        <div id="collapse<?php echo $uniqid . get_row_index(); ?>" class="accordion-collapse collapse <?php if(is_admin()) { echo 'show'; } else { echo 'collapsed'; } ?>" aria-labelledby="heading-<?= $uniqid; ?>-<?php echo get_row_index(); ?>" <?php if($oneitem): ?>data-bs-parent="#accordion-<?= $uniqid; ?>"<?php endif; ?>>
                            <div class="accordion-body">
                                <?php the_sub_field('content'); ?>
                            </div>
                        </div>
                    </div>
                <?php if($icons): ?>
                    </div>
                </div>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif;
    endif; ?>
    </div>
</div>