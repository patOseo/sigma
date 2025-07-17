<?php 
    $info = get_sub_field('info');
    $title = '<h3 class="h4 text-uppercase text-white fw-bold mb-0 lh-1">' . $info['title'] . '</h3>';
    $subtitle = $info['sub-title'];
    $description = $info['description'];
    $linking = get_sub_field('linking');
    $method = $linking['linking_method'];
?>
<div class="col-12 col-md-6 col-xl-4 mb-4">
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
                <div class="row gx-2 p-2 align-items-center text-sentence">
                    <div class="col mb-0">
                        <?php echo $description; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <?php if($method == 'whole'): ?>
            <button class="d-block position-absolute top-100 start-50 translate-middle btn btn-outline-secondary bg-white rounded-5 fw-bold px-4 py-2 z-1"><?php echo $linking['button_text']; ?></button>
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