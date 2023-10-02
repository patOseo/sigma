<?php
/**
 * The template for displaying all single team members
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

global $post;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
$team_page_id = 36820;
$bg_img = get_the_post_thumbnail_url($team_page_id, 'full');
if(get_field('image')) {
    $member_img = get_field('image');
} else {
    $member_img = 10611;
}
?>

<div class="team-header position-relative py-5 d-flex align-items-center text-center text-white" style="background-image: url('<?php echo esc_url($bg_img); ?>')">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-lg-8 py-4">
				<p class="h1 display-3 fw-bold text-white text-shadow text-uppercase">The SIGMA Team</p>
			</div>
		</div>
	</div>
</div>

<div class="wrapper" id="single-wrapper">

	<div class="container" id="content" tabindex="-1">

			<main class="site-main" id="main">
			
				<div class="entry-content pt-5">
					<div class="fs-xs">
                    <p id="breadcrumbs"><span><span><a href="/">Home</a></span> » <span><span><a href="<?php echo get_permalink($team_page_id); ?>">The SIGMA Team</a></span> » <span class="breadcrumb_last" aria-current="page">Ted Jackson</span></span></p>
                    </div>
                    
                    <div class="row gx-6 py-5">
                        <div class="col-lg-4">
                            <div class="team-member-image text-center">
                                <?php echo wp_get_attachment_image($member_img, 'full'); ?>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="team-member-name position-relative text-center">
                                <div class="d-inline-block p-3 bg-white">
                                    <h1 class="h2 mb-0 text-uppercase"><?php echo get_the_title(); ?></h1>
                                    <h2 class="h5 mb-0 text-uppercase text-grey"><?php echo get_field('position'); ?></h2>
                                </div>
                            </div>
                            <p class="lh-base"><?php echo get_field('biography'); ?></p>
                        </div>
                    </div>
				</div>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
// Include the schema generator for assessment pages
@include_once('schema/schema-assessments.php'); 

get_footer();
