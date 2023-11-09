<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$author_id = get_the_author_meta('ID');
$author_team_page = get_field('user_page', 'user_' . $author_id);
$hide_author = get_field('hide_author_block');
if(get_field('image', $author_team_page)) {
    $member_img = get_field('image', $author_team_page);
} else {
    $member_img = 10611;
}
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="entry-content">

		<div class="row justify-content-center">
			<div class="col-xl-11">
				<?php
				the_content();
				?>
			</div>
		</div>

		<?php if($author_team_page && !$hide_author): ?>
		<div class="row justify-content-center my-6">
			<div class="col-xl-11">
				<div class="author-block">
					<h2 class="text-secondary fw-bold mb-5 <?php /* text-center text-md-start */ ?>">About the Author</h2>
                	<div class="team-member position-relative mb-4 mb-lg-6 row align-items-center">
                	    <?php /* <div class="col-12 col-md-4">
                	        <div class="team-member-image text-center">
                	            <?php
                	            if(get_field('image', $author_team_page)) {
                	                $img_id = get_field('image', $author_team_page); 
                	            } else {
                	                $img_id = 10611;
                	            } ?>
                	            <a class="text-decoration-none text-primary" href="<?php echo get_permalink($author_team_page); ?>">
								<?php 
								echo wp_get_attachment_image($img_id, array(300, 300)); 
                	            ?>
								</a>
                	        </div>
                	    </div> */ ?>
                	    <div class="col-12 <?php /* col-md-8 */ ?>">
                	        
                	            <div class="position-relative pb-3 <?php /* text-center text-md-start */ ?>">
                	                <div class="d-inline-block bg-white">
                	                    <p class="h5 mb-0 text-uppercase"><a class="text-decoration-none text-primary" href="<?php echo get_permalink($author_team_page); ?>"><?php echo get_the_title($author_team_page); ?></a></h2>
                	                    <p class="h6 mb-0 text-uppercase text-grey"><?php echo get_field('position', $author_team_page); ?></h3>
                	                </div>
                	            </div>
                	        <div class="fs-sm text-start"><?php echo get_field('biography', $author_team_page); ?></div>
							<?php if(get_field('linkedin', $author_team_page)): ?>
                                <a href="<?php the_field('linkedin', $author_team_page); ?>" target="_blank" rel="noopener,noreferrer">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="30" height="30"><path fill="#12355a" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg>
                                </a>
                            <?php endif; ?>
						</div>
                	</div>
				</div>
			</div>
		</div>
		<?php endif; ?>

	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
