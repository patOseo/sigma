<?php

$class_name = 'stages-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}

$cur_stage = get_field('current_stage');

$stages = array(
    array(
        'img' => 8448,
        'img_active' => 8454,
        'stage' => 'i',
        'link' => '/succession-planning-where-to-start/'
    ),
    array(
        'img' => 8446,
        'img_active' => 8452,
        'stage' => 'b',
        'link' => '/succession-planning-building-success-profiles/'
    ),
    array(
        'img' => 8450,
        'img_active' => 8456,
        'stage' => 'n',
        'link' => '/succession-nomination-survey-template/'
    ),
    array(
        'img' => 8445,
        'img_active' => 8451,
        'stage' => 'a',
        'link' => '/candidate-succession-profile-template/'
    ),
    array(
        'img' => 8447,
        'img_active' => 8453,
        'stage' => 'd',
        'link' => '/develop-talent/'
    ),
    array(
        'img' => 8449,
        'img_active' => 8455,
        'stage' => 'm',
        'link' => '/measuring-success/'
    ),
);

?>

<div class="<?php echo esc_attr($class_name); ?>">
    <div class="stages">
        <div class="row align-items-center">
            <div class="col-12 col-md-1 text-center text-md-start"><img class="stages-img" src="/wp-content/uploads/2019/09/stages.jpg" alt="Stages"></div>
            <?php foreach($stages as $stage): if($cur_stage == $stage['stage']) { $cur = true; $img = $stage['img_active']; } else { $cur = false; $img = $stage['img']; } ?>
                <div class="col-4 col-md">
                    <?php if(!$cur) { ?><a class="text-decoration-none" href="<?php echo $stage['link']; ?>"><?php } ?>
                        <?php echo wp_get_attachment_image($img, array(150, 150), '', array('class' => 'd-inline align-middle')); ?>
                    <?php if(!$cur) { ?></a><?php } ?>
                </div>
            <?php endforeach; ?>
        </div>  
    </div>
</div>

