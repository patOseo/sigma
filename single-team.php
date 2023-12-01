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
$author_id = get_field('associated_user');
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
                    <p id="breadcrumbs"><span><span><a href="/">Home</a></span> » <span><span><a href="<?php echo get_permalink($team_page_id); ?>">The SIGMA Team</a></span> » <span class="breadcrumb_last" aria-current="page"><?php the_title(); ?></span></span></p>
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
                            
                                <!-- wp:button -->
                                    <div class="wp-block-button mb-4">
                                    <?php if(get_field('email')): ?><a class="wp-block-button__link has-lightestgrey-background-color wp-element-button" role="button" href="mailto:<?php the_field('email'); ?>">Email</a><?php endif; ?>
                                        <a class="wp-block-button__link has-lightestgrey-background-color wp-element-button" role="button" href="<?php if(get_field('book_a_call_link')) { echo esc_url(get_field('book_a_call_link')); } else { echo '/contact/'; } ?>"><?php if(get_field('book_a_call_link')) { echo 'Book a Call'; } else { echo 'Contact Us'; } ?></a>
                                    </div>
                                <!-- /wp:button -->
                            
                            <?php if(get_field('linkedin')): ?>
                                <a href="<?php the_field('linkedin'); ?>" target="_blank" rel="noopener,noreferrer">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="30" height="30"><path fill="#12355a" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
				</div>

                <?php if($author_id): ?>
                    <?php 
                    $args = array(
                        'post_type' => 'post',
                        'author' => $author_id,
                        'posts_per_page' => 9,
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );
                    $query = new WP_Query($args);
                    ?>
                    <?php if($query->have_posts()): ?>
                        <h2 class="text-secondary fw-bold my-6"><?php the_title(); ?>'s Latest Articles</h2>
                        <div class="row">
                            <?php while($query->have_posts()): $query->the_post(); ?>
                                <div class="col-md-4 mb-6">
                                    <div class="blog-feed-item position-relative">
                                        <div class="blog-feed-item-image mb-3 position-relative overflow-hidden">
                                            <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'post-thumbnail'); ?>
                                        </div>
                                        <div class="blog-feed-item-content">
                                            <a class="stretched-link text-decoration-none" href="<?php the_permalink(); ?>"><h2 class="h4 fw-bold"><?php the_title(); ?></h2></a>
                                            <p class="fs-sm"><?php the_date('F Y'); ?></p>
                                            <button class="btn btn-outline-secondary btn-lg px-4 py-3 fs-sm fw-normal rounded-pill">Read More</button>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; 

                            ?>
                        </div>
                    <?php endif; wp_reset_postdata(); ?>
                <?php endif; ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
// Include the schema generator for assessment pages
@include_once('schema/schema-team.php'); 


get_footer();
