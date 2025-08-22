<?php
/**
* Cards Block
*/

$class_name = 'cards-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}

$tagging = get_field('enable_tagging');

if ($tagging && have_rows('cards')) {
    // Collect unique tags before rendering
    $all_tags = [];

	while (have_rows('cards')) {
		the_row();

		$tags = get_sub_field('info')['tags'];

		if ($tags) {
			// If taxonomy field returns array of term objects or IDs
			foreach ($tags as $tag) {
				if (is_object($tag)) {
					$all_tags[$tag->term_id] = $tag->name;
				} elseif (is_numeric($tag)) {
					$term = get_term($tag);
					if ($term && !is_wp_error($term)) {
						$all_tags[$term->term_id] = $term->name;
					}
				} else {
					// fallback for plain string tags
					$all_tags[$tag] = $tag;
				}
			}
		}
	}
	// Reset the repeater rows for the real loop
	reset_rows();
}

?>

<?php if (!empty($all_tags)) : ?>
	<div class="card-tag-filter text-center mb-5">
		<button class="card-tag-link btn btn-lightestgrey current-cat btn-lg fs-6 fw-light mb-2 px-4 py-2 rounded-pill" data-card-tag-filter="all">All</button>
		<?php foreach ($all_tags as $slug => $name) : ?>
			<button class="card-tag-link btn btn-lightestgrey btn-lg fs-6 fw-light mb-2 px-4 py-2 rounded-pill" data-card-tag-filter="<?php echo esc_attr(sanitize_title($name)); ?>">
				<?php echo esc_html($name); ?>
			</button>
		<?php endforeach; ?>
	</div>
<?php endif; ?>

<?php if(have_rows('cards')): ?>
<div class="<?php echo esc_attr($class_name); ?>">
    <div class="row gx-5 gy-5 mb-6">
        <?php while(have_rows('cards')): the_row(); ?>
            <?php include __DIR__ . '/single-card.php'; ?>
        <?php endwhile; ?>
    </div>
</div>
<?php endif; ?>