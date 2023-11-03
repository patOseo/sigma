<?php 
	$sec_title = get_field('section_title');
	$slug = 'sctn-' . sanitize_title($sec_title);
	$sectionlink = get_field('section_link');
?>

<div class="tab-pane fade multipart-section bg-primary text-white mb-4" role="tabpanel" <?php if($sec_title): ?>id="<?= $slug; ?>"<?php endif; ?>>
	<?php if(get_field('section_title')): ?>
		<h3 class="h4 section-header p-4 lh-1 fw-bold text-uppercase bg-white rounded-end border-secondary border-start border-5">
			<?php if($sectionlink) { echo '<a class="text-secondary text-decoration-none" href="' . $sectionlink . '">'; } the_field('section_title'); if($sectionlink) { echo '</a>'; } ?>
		</h3>
	<?php endif; ?>

	<div class="px-4 pt-4 pb-3"><?php echo '<InnerBlocks/>'; ?></div>
</div>