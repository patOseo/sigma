<?php
/**
 * The template for displaying the (blog) page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
$post = get_post(36148);
setup_postdata($post);
?>

<div class="wrapper pt-0" id="page-wrapper">

	<div class="container-fluid px-0" id="content" tabindex="-1">

		<main class="site-main" id="main">

		<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

		<div class="entry-content">

			<?php
			the_content();
			?>

		</div><!-- .entry-content -->

		</article><!-- #post-<?php the_ID(); ?> -->


		</main>

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
