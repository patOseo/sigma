<?php
$class_name = 'modal-popup-block';
$class_name .= !empty($block['className']) ? ' ' . $block['className'] : '';
$class_name .= !empty($block['align']) ? ' align' . $block['align'] : '';

$selectmodal = get_field('select_modal');
$txt = get_field('btn_text');
$color = get_field('modal_button_color');

// Determine button class based on color
$btn_class = match ($color) {
	'blue'         => 'has-white-color has-text-color has-sigmablue-background-color has-background',
	'green'        => 'has-white-color has-text-color has-sigmadarkgreen-background-color has-background',
	'outline'      => 'has-sigmadarkgreen-color has-text-color has-background-transparent',
	'blue_outline' => 'has-sigmablue-color has-text-color has-background-transparent',
	default        => '',
};

$modal = get_post($selectmodal);
$uniqid = 'modal' . uniqid();
?>

<?php if ($modal): ?>
	<?php $modalcontent = $modal->post_content; $padding = $modal->padding ?? ''; ?>
	<div class="modal fade" id="<?php echo esc_attr($uniqid); ?>" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
			<div class="modal-content">
				<div class="modal-body <?php echo esc_attr($padding); ?>">
					<button type="button" class="btn-close position-absolute top-0 end-0 p-3" data-bs-dismiss="modal" aria-label="Close"></button>
					<?php echo do_shortcode($modalcontent); ?>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>

<div class="<?php echo esc_attr($class_name); ?>">
	<!-- wp:button -->
	<?php
	$is_outline = in_array($color, ['outline', 'blue_outline'], true);
	$button_classes = 'wp-block-button' . ($is_outline ? ' is-style-outline' : '');
	$button_classes .= !empty($block['align']) ? ' align' . $block['align'] : '';
	?>
	<div class="<?php echo esc_attr($button_classes); ?>">
		<a
			class="wp-block-button__link <?php echo esc_attr($btn_class); ?> wp-element-button"
			role="button"
			data-bs-toggle="modal"
			href="#<?php echo esc_attr($uniqid); ?>"
			<?php echo $is_outline ? 'style="background:transparent"' : ''; ?>
		>
			<?php echo esc_html($txt); ?>
		</a>
	</div>
	<!-- /wp:button -->
</div>
