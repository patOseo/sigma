<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div class="mobile-top-bar d-xl-none py-2 bg-primary fs-sm fw-500 text-center text-white">
		<div class="row">
			<div class="col-6">
				<p class="mb-0">London, ON:<br><a href="tel:<?php the_field('phone_1', 'option'); ?>"><?php the_field('phone_1', 'option'); ?></a></p>
			</div>
			<div class="col-6">
				<p class="mb-0">Port Huron, MI:<br><a href="tel:<?php the_field('phone_2', 'option'); ?>"><?php the_field('phone_2', 'option'); ?></a></p>
			</div>
		</div>	
	</div>
	<header class="py-4" id="wrapper-navbar">

		<a class="skip-link <?php echo understrap_get_screen_reader_class( true ); ?>" href="#content">
			<?php esc_html_e( 'Skip to content', 'understrap' ); ?>
		</a>

		<?php get_template_part( 'global-templates/navbar', $navbar_type . '-' . $bootstrap_version ); ?>

	</header><!-- #wrapper-navbar -->