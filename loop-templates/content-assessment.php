<?php
/**
 * Single assessment partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="entry-content">

		<?php
		get_template_part('loop-templates/content', 'assessment');
		?>

	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
