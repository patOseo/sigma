<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );

$phone1 = get_field('phone_1', 'option');
$phone2 = get_field('phone_2', 'option');
?>

<?php if(get_field('hide_footer') != 1): ?>
<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<button id="toTopButton" class="hidden d-md-none btn btn-secondary p-3 lh-1 rounded-2" aria-label="Scroll to Top" role="button" tabindex="0">
	<?php @include('images/icons/icon-arrow-up.svg'); ?>
</button>

<div class="wrapper bg-primary text-white py-6" id="wrapper-footer">

	<div class="container">

		<footer class="site-footer" id="colophon">

			<div class="row mx-0 gx-xl-5">
				<div class="col-12 col-lg-4">
					<img class="mb-6" src="<?php echo get_stylesheet_directory_uri(); ?>/images/sigma-logo-footer.png" alt="Sigma Assessment Systems Logo" width="300" height="62">
					<p class="fs-xs lh-lg">SIGMA Assessment Systems provides talent assessments, succession planning, executive coaching, and consulting services to help organizations hire and develop strong performers.</p>
					<p class="fs-xs mb-5 mb-xl-0"><a class="text-decoration-none" href="<?php echo get_field('privacy_policy_page', 'option'); ?>">Privacy Policy</a> <span class="mx-2">|</span> <a class="text-decoration-none" href="<?php echo get_field('terms_of_use_page', 'option'); ?>">Terms & Conditions of Use</a></p>
				</div>
				<div class="col-6 col-lg-2">
					<h3 class="h5 mb-3 text-uppercase fw-bold text-white">Solutions</h3>
					<?php 
					wp_nav_menu(
						array(
							'menu'			  => 'Solutions',
							'menu_class' 		  => 'menu ps-0 fs-sm',
							'fallback_cb'     => '',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					);
					?>
				</div>
				<div class="col-6 col-lg-2">
					<h3 class="h5 mb-3 text-uppercase fw-bold text-white">Resources</h3>
					<?php 
					wp_nav_menu(
						array(
							'menu'			  => 'Resources',
							'menu_class' 		  => 'menu ps-0 fs-sm',
							'fallback_cb'     => '',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					);
					?>
				</div>
				<div class="col-6 col-lg-2">
					<h3 class="h5 mb-3 text-uppercase fw-bold text-white">Support</h3>
					<?php 
					wp_nav_menu(
						array(
							'menu'			  => 'Support',
							'menu_class' 		  => 'menu ps-0 fs-sm',
							'fallback_cb'     => '',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					);
					?>
				</div>
				<div class="col-6 col-lg-2">
					<h3 class="h5 mb-3 text-uppercase fw-bold text-white">Contact Us</h3>
					<p class="fs-sm">
						<strong class="fw-boldest">Canada</strong><br>
						<a class="text-white" href="tel:<?= $phone1; ?>"><?= $phone1; ?></a>
					</p>

					<p class="fs-sm">
						<strong class="fw-boldest">USA</strong><br>
						<a class="text-white" href="tel:<?= $phone2; ?>"><?= $phone2; ?></a>
					</p>

					<?php if(have_rows('social_media_links', 'option')): ?>
						<div class="social-links row mx-0 gx-0">
							<?php while(have_rows('social_media_links', 'option')): the_row(); ?>
								<a class="social-link col-2 px-0 text-decoration-none mx-1" aria-label="<?php the_sub_field('name'); ?>" href="<?php the_sub_field('link'); ?>" target="_blank" rel="noopener noreferrer">
									<?php include('images/icons/icon-' . strtolower(get_sub_field('name')) . '.svg'); ?>
								</a>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>

			</div>

		</footer><!-- #colophon -->

	</div><!-- .container(-fluid) -->

</div><!-- #wrapper-footer -->
<?php endif; ?>

<div class="py-4 footer-copyright text-primary">
	<div class="text-center fw-light fs-sm">
	© 2018 - <?php echo date('Y'); ?> SIGMA Assessment Systems Inc. All rights reserved.
	</div>
</div>

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php 
if(get_field('json_schema')):
echo get_field('json_schema');
endif;
?>

<?php wp_footer(); ?>

</body>

</html>

