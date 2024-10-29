<?php
/**
 * The template for displaying all single webinars
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
$webinars_page = get_page_by_path('webinars', OBJECT, 'page');
$bg = get_the_post_thumbnail_url($webinars_page->ID, 'full');

$args = array(
	'post_type' => 'webinar',
	'post_status' => 'publish',
	'posts_per_page' => 6,
	'orderby' => 'date',
	'order' => 'DESC',
	'post__not_in' => array( get_the_ID() )
);

$webinars = new WP_Query($args);

?>

<div class="block-page-header mb-5 alignfull">
    <div class="page-header-bg position-relative" style="background-image: url('<?php echo $bg; ?>');">
        <div class="position-absolute top-50 start-50 translate-middle w-100">
            <div class="container">
                <div class="acf-innerblocks-container">
					<div class="wp-block-group w-100 py-3 py-xl-5 text-center text-white has-background is-layout-flow wp-block-group-is-layout-flow" style="background-color:#0000004d">
						<h1 class="mb-1 text-uppercase text-white text-shadow display-3 wp-block-post-title"><?php the_title(); ?></h1>
						<p class="mb-0 py-3 py-xl-5 h5 fw-normal text-white text-shadow fs-3">On-Demand Webinar with SIGMA's Experts</p>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>

<div class="wrapper pt-0" id="single-wrapper">

	<div class="container" id="content" tabindex="-1">

		<main class="site-main" id="main">

            <h2 class="py-5">Watch the Webinar</h2>

            <div class="embed-container rounded-4 mb-4 overflow-hidden"><?php echo get_field('video_url'); ?></div>

			<?php if(get_field('transcript')): ?>
			<div class="transcript-section mb-5 py-5">
				<h2 class="py-5">Video Transcript</h2>
				<div class="video-transcript position-relative fs-5 text-darkgrey fw-normal">
					<?php echo get_field('transcript'); ?>
				</div>
				<button class="transcript-btn btn btn-outline-secondary rounded-5 fw-bold px-4 py-2">Read the full transcript</button>
			</div>
			<?php endif; ?>

			<?php if($webinars->have_posts()): ?>

			<h2 class="py-5">More SIGMA Webinars</h2>
			<div class="more-webinars mb-6">
				<div class="row gx-5 gy-5">
					<?php while($webinars->have_posts()): $webinars->the_post(); ?>
					<div class="col-12 col-md-6 col-xl-4 mb-4">
						<?php get_template_part( 'loop-templates/content', 'webinars' ); ?>
					</div>
					<?php endwhile; wp_reset_postdata(); ?>
				</div>
			</div>
			<?php endif; ?>

		</main>

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();
