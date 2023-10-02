<?php
$class_name = 'team-members-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}

$show_all = get_field('show_all');
$show_bio = get_field('show_bio');
$select_members = get_field('select_members');

if($show_all) {
    $args = array(
        'post_type' => 'team',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC'
    );
} else {
    $args = array(
        'post_type' => 'team',
        'posts_per_page' => -1,
        'post__in' => $select_members,
        'orderby' => 'post__in',
        'order' => 'ASC'
    );
}

$members = new WP_Query($args);

?>

<div class="<?php echo esc_attr($class_name); ?>">
<?php if($members->have_posts()): ?>
    <div class="row">
        <?php while($members->have_posts()): $members->the_post(); ?>
            <div class="col-6 col-md-4">
                <div class="team-member position-relative mb-4 mb-lg-6">
                    <div class="team-member-image text-center">
                        <?php
                        if(get_field('image', get_the_ID())) {
                            $img_id = get_field('image', get_the_ID()); 
                        } else {
                            $img_id = 10611;
                        }
                        echo wp_get_attachment_image($img_id, array(300, 300)); 
                        ?>
                    </div>
                    <a href="<?php echo get_permalink(); ?>" class="stretched-link">
                        <div class="position-relative py-3 text-center">
                            <div class="d-inline-block p-3 bg-white">
                                <h2 class="h5 mb-0 text-uppercase"><?php echo get_the_title(); ?></h2>
                                <h3 class="h6 mb-0 text-uppercase text-grey"><?php echo get_field('position', get_the_ID()); ?></h3>
                            </div>
                        </div>
                    </a>
                    <?php if($show_bio) { echo '<div class="px-4 fs-sm text-start">' . get_field('biography', get_the_ID()) . '</div>'; } ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
</div>
