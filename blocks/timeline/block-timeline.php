<?php 

$htmltag = get_field('heading_html_tag');
$htmltagopen = '<' . $htmltag . ' class="card-heading h4 mt-0 mb-2 text-white">';
$htmltagclose = '</' . $htmltag . '>';

?>

<?php if(have_rows('timeline_content')): ?>

<section class="px-0">
	<div class="container px-0 py-2 py-lg-4">
		<div class="main-timeline fade-in">
			<?php while(have_rows('timeline_content')): the_row(); ?>
				<?php  
					$heading = get_sub_field('heading');
					$content = get_sub_field('content');
					$link = get_sub_field('link');
					$icon = get_sub_field('icon');
					$i = get_row_index();
				?>
				<div class="timeline <?php if($link) { echo 'timeline-has-link '; } ?>position-relative mb-6 fade-in <?php if($i > 1 && $i % 2 == 0) { echo 'right text-md-start'; } else { echo 'left text-md-end'; } ?>">
					<div class="card bg-transparent border-0 mb-3 mb-lg-0 <?php if($i > 1 && $i % 2 == 0) { echo 'me-0 ms-auto me-md-auto ms-md-0'; } else { echo 'ms-auto ms-md-auto'; } ?>">
						<div class="card-body position-relative px-3 py-1">
							<?php if($link){ echo '<a class="stretched-link text-decoration-none" href="' . $link . '">'; } ?>	
							<?php if($heading) { echo $htmltagopen . $heading . $htmltagclose; } ?>
							<?php if($link) { echo '</a>'; } ?>
							<?php if($content) { echo $content; } ?>
						</div>
					</div>
					<div class="timeline-icon p-3 p-xl-4"><?php echo wp_get_attachment_image($icon, array(62, 62)); ?></div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php endif; ?>