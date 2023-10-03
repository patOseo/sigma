<?php
/**
 * The template for displaying all single posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

$resource_bg = get_the_post_thumbnail_url();
$resource_pdf = get_field('resource_pdf');
$fullwidth = get_field('full_width');
?>

<div class="assessment-header position-relative py-5 d-flex align-items-center text-center text-white" style="background-image: url('<?php echo esc_url($resource_bg); ?>')">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-lg-8 py-4">
				<h1 class="display-5 fw-bold text-white text-shadow text-uppercase"><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</div>

<div class="wrapper py-5" id="single-wrapper">

	<div class="container" id="content" tabindex="-1">

		<main class="site-main" id="main">

            <div class="row justify-content-center">
                <div class="col-lg-<?php echo $fullwidth ? '12' : '8'; ?>">
                    <?php
			        while ( have_posts() ) {
			        	the_post();
			        	get_template_part( 'loop-templates/content', 'single' );
			        }
			        ?>
                </div>
                <div class="col-lg-<?php echo $fullwidth ? '12' : '4'; ?>">
                    <div class="resource-form bg-lightestgrey p-3 p-xl-4 rounded-3 text-center">
                        <?php if($resource_pdf): ?>
                            <?php echo do_shortcode( '[gravityform id="1" title="false" field_values="eguide_pdf='.$resource_pdf.'&eguide_title='.get_the_title().'"]' ); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
			

		</main>

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();
