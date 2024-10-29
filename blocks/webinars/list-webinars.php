<?php if($webinars->have_posts()): ?>
        <div class="webinars-feed mb-6">
            <div class="row gx-5 gy-5">
                <?php while($webinars->have_posts()): $webinars->the_post(); ?>
                <div class="col-12 col-md-6 col-xl-4 mb-4">
                    <?php get_template_part( 'loop-templates/content', 'webinars' ); ?>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
    <?php endif; ?>

    <?php 
    $webinars_page = get_permalink(get_page_by_path('webinars'));
    $pagination_args = array(
        'total' => $webinars->max_num_pages,
        'base' => $webinars_page . '%_%',
        'prev_text' => '&#60;',
        'next_text' => '&#62;',
    );
    if(isset($_POST['page'])) {
        $page = $_POST['page'];
        $pagination_args['current'] = $page;
    }
    understrap_pagination( $pagination_args, 'pagination fw-bold' ); 
