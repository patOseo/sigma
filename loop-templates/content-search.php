<?php
/**
 * Search results partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$post_id = get_the_ID();
$post_img_id = get_post_thumbnail_id($post_id);
?>

<article <?php post_class('position-relative search-result mb-6'); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">
		<div class="search-results-image mb-3"><?php the_post_thumbnail('post-thumbnail'); ?></div>

		<?php
		the_title(
			sprintf( '<h2 class="h4 fw-bold entry-title"><a class="text-primary text-decoration-none stretched-link" href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>'
		);
		?>

		<?php if ( 'post' === get_post_type() ) : ?>

			<div class="entry-meta mb-3">

				<?php echo get_the_date('F Y'); ?>

			</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="entry-summary">

		<?php the_excerpt(); ?>

	</div><!-- .entry-summary -->

	<button class="btn btn-outline-secondary btn-lg px-4 py-3 fs-sm fw-normal rounded-pill">Read More</button>

</article><!-- #post-<?php the_ID(); ?> -->
