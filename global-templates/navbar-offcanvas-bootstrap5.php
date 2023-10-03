<?php
/**
 * Header Navbar (bootstrap5)
 *
 * @package Understrap
 * @since 1.1.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<nav id="main-nav" class="navbar navbar-expand-xl navbar-light" aria-labelledby="main-nav-label">

	<p id="main-nav-label" class="screen-reader-text">
		<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
	</p>


	<div class="container">

		<div class="col-9 col-xl-3 d-flex">
			<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sigma-logo.png" alt="SIGMA Assessment Systems Logo" width="320" height="66"></a>
		</div>
		<div class="col-3 col-xl-9 text-end">
			<button
				class="navbar-toggler"
				type="button"
				data-bs-toggle="offcanvas"
				data-bs-target="#navbarNavOffcanvas"
				aria-controls="navbarNavOffcanvas"
				aria-expanded="false"
				aria-label="<?php esc_attr_e( 'Open menu', 'understrap' ); ?>"
			>
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="icons d-none d-xl-block mt-n3 mb-3 me-2 px-2 py-2 text-end">
			<?php if(have_rows('social_media_links', 'option')): ?>
				<div class="social-links d-inline me-3 px-2 border-end">
					<?php while(have_rows('social_media_links', 'option')): the_row(); ?>
						<a class="social-link text-decoration-none mx-1" href="<?php the_sub_field('link'); ?>" target="_blank" rel="noopener noreferrer">
							<?php include(get_stylesheet_directory() . '/images/icons/icon-' . strtolower(get_sub_field('name')) . '.svg'); ?>
						</a>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			<?php include(get_stylesheet_directory() . '/images/icons/icon-search.svg'); ?>
			</div>
			<div class="offcanvas offcanvas-end bg-primary" tabindex="-1" id="navbarNavOffcanvas">
				<div class="offcanvas-header justify-content-end">
					<button
						class="btn-close btn-close-white text-reset"
						type="button"
						data-bs-dismiss="offcanvas"
						aria-label="<?php esc_attr_e( 'Close menu', 'understrap' ); ?>"
					></button>
				</div><!-- .offcancas-header -->
				<!-- The WordPress Menu goes here -->
				<div class="offcanvas-body justify-content-end">
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'navbar-nav justify-content-end flex-grow-1 text-start',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'depth'           => 3,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					);
					?>
					<div class="d-xl-none mt-5 px-3"><?php echo get_search_form(); ?></div>
				</div>
				
			</div><!-- .offcanvas -->
		</div>

	</div><!-- .container(-fluid) -->

</nav><!-- #main-nav -->
