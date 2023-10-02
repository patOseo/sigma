<?php 
$item_title = get_field('item_title');
$uniqid = wp_rand(); 
$icon = get_field('icon');
?>

<div class="accordion-item border-0 rounded-3 mb-3<?php if($icon) { echo ' mb-lg-6'; } ?>">
    <div class="row mx-0">
        <?php if($icon): ?>
        <div class="col-md-2 mb-3 mb-md-0 text-center">
            <?php echo wp_get_attachment_image($icon, array(80, 80)); ?>
        </div>
        <?php endif; ?>

        <div class="col-md-<?php if($icon) { echo '10'; } else { echo '12'; } ?>">
            <button id="heading<?= $uniqid; ?>" class="accordion-button border ff-montserrat border-1 collapsed mb-0 text-primary bg-lightestgrey fw-bold rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $uniqid; ?>" aria-expanded="false" aria-controls="collapse<?= $uniqid; ?>">
                <?= $item_title; ?>
            </button>

            <div id="collapse<?php echo $uniqid; ?>" class="accordion-collapse collapse <?php if(is_admin()) { echo 'show'; } else { echo 'collapsed'; } ?>" aria-labelledby="heading<?= $uniqid; ?>">
                <div class="accordion-body">
                    <InnerBlocks />
                </div>
            </div>
        </div>
    </div>

        
    
</div>