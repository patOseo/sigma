<?php
$class_name = 'modal-popup-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

$selectmodal = get_field('select_modal');
$txt = get_field('btn_text');
$color = get_field('modal_button_color');
if($color == 'blue') {
    $btn_class = 'has-white-color has-text-color has-sigmablue-background-color has-background';
} elseif($color == 'green') {
    $btn_class = 'has-white-color has-text-color has-sigmadarkgreen-background-color has-background';
} elseif($color == 'outline') {
    $btn_class = 'has-sigmadarkgreen-color has-text-color has-background-transparent';
}
$modal = get_post($selectmodal);
$uniqid = 'modal' . uniqid();
?>

<?php if($modal): $modalcontent = $modal->post_content; $padding = $modal->padding; ?>
<div class="modal fade" id="<?php echo esc_attr($uniqid); ?>" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-body <?php if($padding) { echo $padding; } ?>">
        <button type="button" class="btn-close position-absolute top-0 end-0 p-3" data-bs-dismiss="modal" aria-label="Close"></button>
        <?php echo do_shortcode($modalcontent); ?>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>

<div class="<?php echo esc_attr($class_name); ?>">
<!-- wp:button -->
<div class="wp-block-button<?php if($color == 'outline') { echo ' is-style-outline'; } if (!empty($block['align'])) { echo ' align' . $block['align'];} ?>"><a <?php if($color == 'outline') { echo 'style="background:transpa nt"'; } ?> class="wp-block-button__link <?php echo esc_attr($btn_class); ?> wp-element-button" role="button" data-bs-toggle="modal" href="#<?= $uniqid; ?>"><?= $txt; ?></a></div>
<!-- /wp:button -->
</div>