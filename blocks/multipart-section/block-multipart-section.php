<?php 
	$sec_title = get_field('section_title');
	$slug = 'sctn-' . sanitize_title($sec_title);
	$sectionlink = get_field('section_link');
?>

<div class="multipart-section mb-4" <?php if($sec_title): ?>id="<?= $slug; ?>"<?php endif; ?>>
	<?php if(get_field('section_title')): ?>
		<h3 class="h4 section-header p-4 lh-1 fw-bold text-uppercase bg-primary text-white rounded-3">
			<?php if($sectionlink) { echo '<a class="text-white text-decoration-none" href="' . $sectionlink . '">'; } the_field('section_title'); if($sectionlink) { echo '</a>'; } ?>
		</h3>
	<?php endif; ?>

	<div class="px-4 pt-4 pb-3"><?php echo '<InnerBlocks/>'; ?></div>
</div>