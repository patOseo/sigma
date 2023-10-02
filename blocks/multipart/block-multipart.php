

<?php 
global $post;
$blocks = parse_blocks( $post->post_content );

$class_name = 'multipart-block py-6';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}

?>

<div class="<?php echo esc_attr($class_name); ?>">
	<div class="container position-relative py-6">
		<div class="row mb-5">
			<div class="col-lg-3 mb-4">
				<nav id="tableContents" class="table-of-contents sticky-top shadowbox ff-montserrat bg-white rounded align-items-stretch mb-4 mb-md-0 p-3">
	
					<p class="d-block text-primary fs-4 fw-bold text-uppercase mb-0 pb-2 lh-sm table-header"><?php the_field('toc_title'); ?></p>
					<hr class="divider darkblue thin my-0 mb-2">
	
					<nav class="nav nav-pills">
						<?php
							foreach ( $blocks as $block ) {
								if($block['blockName'] == 'acf/multipart') {
									foreach($block['innerBlocks'] as $innerBlock) {
										if($innerBlock['blockName'] == 'acf/multipartsection') {
											echo '<a class="nav-link d-block w-100 fw-500 fs-sm lh-sm me-2 ps-2 pe-2" href="#sctn-' . sanitize_title($innerBlock['attrs']['data']['section_title']) . '">' . $innerBlock['attrs']['data']['section_title'] . '</a>';
										}
									}
								}
							}
						?>
					</nav>
				</nav>
			</div>
	
			<div class="col-lg-9 position-relative">
				<div class="multipart-sections-container h-100 pe-2" data-bs-spy="scroll" data-bs-target="#tableContents" data-bs-offset="50" tabindex="0">
					<?php $allowed_inner_blocks = ['acf/multipartsection']; ?>
					<InnerBlocks allowedBlocks="<?php echo esc_attr(wp_json_encode($allowed_inner_blocks)); ?>" />
				</div>
			</div>
		</div>
	</div>
</div>