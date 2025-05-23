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
<script> 
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('consent', 'default', {
	ad_storage: "denied",
    analytics_storage: "denied",
    functionality_storage: "denied",
    personalization_storage: "denied",
    security_storage: "denied",
	'wait_for_update': 500
});
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MPJPNRV');</script>
<!-- End Google Tag Manager -->

<!-- OneTrust Cookies Consent Notice start for sigmaassessmentsystems.com -->
<script src=https://cdn.cookielaw.org/scripttemplates/otSDKStub.js  type="text/javascript" charset="UTF-8" data-domain-script="9762b4c9-3485-468e-a09f-32f10ca39e2b" ></script>
<script type="text/javascript">
function OptanonWrapper() { }
</script>
<!-- OneTrust Cookies Consent Notice end for sigmaassessmentsystems.com -->

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MPJPNRV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">
<?php if(get_field('hide_header') != 1): ?>
	<?php get_template_part('global-templates/search-overlay'); ?>
		<!-- ******************* The Navbar Area ******************* -->
		<div class="mobile-top-bar d-xl-none py-2 bg-primary fs-sm fw-500 text-center text-white">
			<div class="row mx-0 gx-0">
				<div class="col-6">
					<p class="mb-0">Canada:<br><a class="text-secondary" href="tel:<?php the_field('phone_1', 'option'); ?>"><?php the_field('phone_1', 'option'); ?></a></p>
				</div>
				<div class="col-6">
					<p class="mb-0">USA:<br><a class="text-secondary" href="tel:<?php the_field('phone_2', 'option'); ?>"><?php the_field('phone_2', 'option'); ?></a></p>
				</div>
			</div>	
		</div>
		<header class="py-4" id="wrapper-navbar">

			<a class="skip-link <?php echo understrap_get_screen_reader_class( true ); ?>" href="#content">
				<?php esc_html_e( 'Skip to content', 'understrap' ); ?>
			</a>

			<?php get_template_part( 'global-templates/navbar', $navbar_type . '-' . $bootstrap_version ); ?>

		</header><!-- #wrapper-navbar -->
<?php endif;
