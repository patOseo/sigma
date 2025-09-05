<?php 
    $tagging = get_field('enable_tagging');
    $info = get_sub_field('info');

    if($tagging) {
        $tags = $info['tags'];

        if ($tags) {
            $tag_classes = '';
            foreach ($tags as $tag) {
                $tag_obj = get_term($tag); // Fetch full term object
                if (!is_wp_error($tag_obj)) {
                    $tag_classes .= $tag_obj->slug;
                }
            }
        }
    }

    $title = '<h3 class="h4 text-uppercase text-white fw-bold mb-0 lh-1">' . $info['title'] . '</h3>';
    $subtitle = $info['sub-title'];
    $description = $info['description'];
    $image = $info['image'];
    $linking = get_sub_field('linking');
    $method = $linking['linking_method'];
?>

<div class="mb-4 card-col" <?php if($tagging) { ?>data-card-tag="<?php echo esc_attr($tag_classes); ?>"<?php } ?>>
    <div class="block-cards-container position-relative mb-4 h-100">
        <div class="block-card rounded-4 overflow-hidden shadow h-100 <?php if($method != 'buttons') { echo 'scale-up'; } ?>">
            <div class="block-card-title d-flex flex-column justify-content-start align-items-center bg-primary p-5">
                <?php if($subtitle): ?>
                    <p class="mb-0 fw-bold text-capitalize text-white w-100"><small><?php echo $subtitle; ?></small></p>
                <?php endif; ?>
                <?php if($method != 'buttons') { ?>
                <a class="stretched-link text-white text-decoration-none w-100" href="<?php echo $linking['card_link']['url']; ?>" target="<?php echo $linking['card_link']['target']; ?>" <?php if($linking['card_link']['target'] == '_blank') { echo 'rel="noopener noreferrer"'; } ?>>
                    <?php echo $title; ?>
                </a>
                <?php } else { ?>
                    <?php echo $title; ?>
                <?php } ?>
            </div>
            
            <div class="card-desc bg-white border-top border-5 border-secondary p-2">
                <?php if($description): ?>
                <div class="row gx-4 p-2 align-items-center text-sentence">
                    <?php if($image): ?>
                    <div class="col-auto mb-0">
                        <?php echo wp_get_attachment_image($image['id'], array(100, 100)); ?>
                    </div>
                    <?php endif; ?>
                    <div class="col mb-0">
                        <?php echo $description; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <?php if($method == 'whole'): ?>
            <button class="d-block pe-none position-absolute top-100 start-50 translate-middle btn btn-outline-secondary bg-white rounded-5 fw-bold px-4 py-2"><?php echo $linking['button_text']; ?></button>
        <?php else: ?>
            <?php if($linking['buttons']): ?>
                <div class="card-buttons position-absolute w-100 top-100 start-50 translate-middle text-center z-1">
                    <?php foreach($linking['buttons'] as $button): ?>
                            <a class="d-inline-block btn btn-sm btn-outline-secondary bg-white rounded-5 fw-bold mx-1 px-3 px-md-4 py-2 fs-sm" href="<?php echo $button['button_link']['url']; ?>" target="<?php echo $button['button_link']['target']; ?>" <?php if($button['button_link']['target'] == '_blank') { echo 'rel="noopener noreferrer"'; } ?>><?php echo $button['button_text']; ?></a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</div>