<?php
/**
 * The template for displaying search results pages
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

$post_types = array(
	array(
		'name' => 'assessments',
		'label' => 'Assessments'
	),
	array(
		'name' => 'post',
		'label' => 'Blog'
	),
	array(
		'name' => 'page',
		'label' => 'Pages'
	),
);

?>

<div class="wrapper" id="search-wrapper">

	<div class="container" id="content" tabindex="-1">

			<main class="site-main" id="main">

				<?php if ( have_posts() ) : ?>

					<header class="page-header">

							<h1 class="page-title text-body mb-4">
								<?php
								printf(
									/* translators: %s: query term */
									esc_html__( 'Search Results for: %s', 'understrap' ),
									'<span>' . get_search_query() . '</span>'
								);
								?>
							</h1>

					</header><!-- .page-header -->

					<?php foreach($post_types as $post_type): ?>
						<?php 
						$args = array(  
							'post_status' 		=> 'publish',
							'post_type' 		=> $post_type['name'],
							'posts_per_page'	=> 9,
							's'					=> $_GET['s'],
							'orderby'			=> 'relevance',
							'order'				=> 'DESC'
						);
						$query = new WP_Query( $args );
						?>
						<?php
						if ( $_GET['s'] <> '' && $query->have_posts()  ) : ?>
							<h2 class="text-secondary search-title mb-5"><?php _e( $post_type['label'], 'sigma' ); ?></h2>
							<div class="row">
						<?php endif; 

						if($query->have_posts()):
							while ( $query->have_posts() ) :
								$query->the_post();
							
								/*
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								echo '<div class="col-xl-4">';
								get_template_part( 'loop-templates/content', 'search' );
								echo '</div>';
							endwhile;
							echo '</div>';
						?>
	
						<?php else : ?>
							<?php get_template_part( 'loop-templates/content', 'none' ); ?>
						<?php endif; wp_reset_postdata(); ?>
					<?php endforeach; ?>
				<?php endif; ?>
			</main>

	</div><!-- #content -->

</div><!-- #search-wrapper -->

<?php
get_footer();