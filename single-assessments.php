<?php
/**
 * The template for displaying all single posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

global $post;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

// Check if the post is a top-level page or a child page
$is_parent = ($post->post_parent) ? false : true;

if($is_parent) {
	$assessment_img = get_the_post_thumbnail_url($post, 'full');
} else {
	// If not a parent page, set the image as the parent's thumbnail url
	$parent_id = wp_get_post_parent_id($post);
	$assessment_img = get_the_post_thumbnail_url($parent_id, 'full');
}

if($is_parent) {
	$age = get_field('age');
	$time = get_field('time');
	$abbr = get_field('abbr');
	$copyright = get_field('copyright');
	$qual = get_field('user_qual');
	$formats = get_field('formats');
	$langs = get_field('languages');
	$sample = get_field('sample_report');
}

?>

<div class="assessment-header position-relative py-5 d-flex align-items-center text-center text-white" style="background-image: url('<?php echo esc_url($assessment_img); ?>')">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-lg-8 py-4">
				<?php if($is_parent): ?><div class="assessment-abbr display-1 mb-4 text-shadow fw-boldest ff-opensans"><?= $abbr; ?></div><?php endif; ?>
				<h1 class="display-5 fw-bold text-white text-shadow text-uppercase"><?php the_title(); ?></h1>
				<?php if($is_parent): ?><div class="assessment-copyright text-shadow fs-5 fw-500 mt-4"><?= $copyright; ?></div><?php endif; ?>
			</div>
		</div>
	</div>
</div>

<?php if($is_parent): // Only show the assessment info bar if this is a top-level assessment page ?>
<div class="assessment-info py-4 bg-primary text-white">
	<div class="container">
		<div class="row">
			<div class="col-4 col-md mb-4 mb-md-0">
				<div class="assessment-criteria text-center">
					<div class="fs-xs fw-500">Age:</div>
					<h3 class="mb-0 fs-1 ff-montserrat fw-500 text-white"><?php the_field('age'); ?>+</h3>
				</div>
			</div>
			<div class="col-4 col-md mb-4 mb-md-0">
				<div class="assessment-criteria text-center">
					<div class="fs-xs fw-500">Time:</div>
						<h3 class="mb-0 d-flex justify-content-center align-items-center ff-montserrat fs-1 ff-montserrat fw-500 text-white">
							<span class="fw-500 fs-1"><?= $time['time']; ?></span>
							<span class="mt-2 ms-1 fw-500 fs-6 text-uppercase"><?= $time['unit']; ?></span>
						</h3>
				</div>
			</div>
			<div class="col-4 col-md mb-4 mb-md-0">
				<div class="assessment-criteria text-center">
					<div class="fs-xs fw-500">Test User Qualifications:</div> 
					<div class="d-inline-block mt-2 mb-0 py-0 px-1 fs-2 lh-1 text-white border"><?= $qual; ?><i class="fa fa-check"></i></div>
				</div>
			</div>
			<div class="col-4 col-md mb-4 mb-md-0">
				<div class="assessment-criteria text-center row">
					<div class="fs-xs fw-500">Formats:</div>
					<?php foreach($formats as $format): 
					$icon = 'globe';
					// Set the FontAwesome icons based on the $format
					switch($format) {
						case 'Web':
							$icon = 'globe';
							break;
						case 'Hand Scoring':
							$icon = 'edit';
							break;
						case 'Mail-in Scoring':
							$icon = 'envelope';
							break;
						case 'Software':
							$icon = 'desktop';
							break;
						case 'Fax-in Scoring':
							$icon = 'fax';
							break;
					}	
					?>
							<div class="col">
								<div class="d-inline-block mt-2 mb-1 px-1 py-1 fs-4 lh-1 ff-montserrat fw-500 text-white border text-uppercase"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/icon-<?= $icon; ?>.svg" width="24" height="24" alt="<?= $icon; ?>"></div><div class="d-block fs-xxs fw-500 text-uppercase text-center lh-1"><?= $format; ?></div>
							</div>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="col-4 col-md mb-4 mb-md-0">
				<div class="assessment-criteria text-center">
					<div class="fs-xs fw-500">Languages:</div>
					<?php foreach($langs as $lang): ?>
						<div class="d-inline-block mt-2 mb-0 py-1 px-1 fs-4 lh-1 text-white border text-capitalize">
							<?= $lang; ?><i class="fa fa-check"></i>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			<?php if($sample): ?>
			<div class="col-4 col-md mb-4 mb-md-0">
				<div class="assessment-criteria text-center">
					<div class="fs-xs fw-500">Sample Report:</div>
					<a href="<?= $sample; ?>" class="btn btn-secondary mt-2 rounded-pill btn-lg fs-xs text-white text-uppercase" target="_blank" rel="noopener noreferrer">Sample Report</a>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php endif; // End assessment info bar ?>

<div class="wrapper" id="single-wrapper">

	<div class="container" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">
			
				<div class="entry-content pt-5">
					<?php if(!$is_parent && function_exists('yoast_breadcrumb')): ?>
						<div class="fs-xs"><?php yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); ?></div>
					<?php endif; ?>

					<?php the_content(); ?>
				</div>

			</main>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
// Include the schema generator for assessment pages
@include_once('schema/schema-assessments.php'); 

get_footer();
