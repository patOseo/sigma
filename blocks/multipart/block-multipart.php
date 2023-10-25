<?php 
global $post;
$blocks = parse_blocks( $post->post_content );

$class_name = 'multipart-block';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}

$center_align = get_field('center_align');
if($center_align) {
	$center = 'align-items-center';
} else {
	$center = '';
}

?>

<div class="<?php echo esc_attr($class_name); ?>">
	<div class="container position-relative">
		<div class="row <?php if(!is_admin()) { echo esc_attr($center); } ?>">
			<div class="col-lg-3 mb-4">
				<div id="tableContents" class="table-of-contents sticky-top shadowbox ff-montserrat bg-white rounded align-items-stretch mb-4 mb-md-0 p-3">
	
					<p class="d-block text-primary fs-5 fw-bold text-uppercase mb-0 pb-2 lh-sm table-header"><?php the_field('toc_title'); ?></p>
					<hr class="divider darkblue thin my-0 mb-2">
	
					<nav class="nav nav-tabs nav-pills pb-3">
						<?php
							foreach ( $blocks as $block ) {
								if($block['blockName'] == 'acf/multipart') {
									foreach($block['innerBlocks'] as $key => $innerBlock) {
										if($key == 0) {
											$active = 'active';
										} else {
											$active = '';
										}
										if($innerBlock['blockName'] == 'acf/multipartsection') {
											echo '<button class="nav-link text-start d-block w-100 fw-500 fs-sm lh-sm me-2 ps-2 pe-2 ' . $active . '" role="tab" data-bs-toggle="tab" data-bs-target="#sctn-' . sanitize_title($innerBlock['attrs']['data']['section_title']) . '">' . $innerBlock['attrs']['data']['section_title'] . '</button>';
										}
									}
								}
							}
						?>
					</nav>
				</div>
			</div>
	
			<div class="col-lg-9 position-relative">
				<div class="multipart-sections-container tab-content pe-2" data-bs-offset="50">
					<?php $allowed_inner_blocks = ['acf/multipartsection']; ?>
					<InnerBlocks class="tab-content" allowedBlocks="<?php echo esc_attr(wp_json_encode($allowed_inner_blocks)); ?>" />
				</div>
			</div>
		</div>
	</div>
</div>

<script>
jQuery(function($) {
	// Show first tab in multiple sections block
    $('.tab-pane:first-child').addClass('show active');
});
</script>