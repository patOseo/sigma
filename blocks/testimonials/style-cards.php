<div class="swiper-wrapper">
    <!-- Slides -->
    <?php while($testimonials->have_posts()): $testimonials->the_post(); ?>        
        <div class="swiper-slide text-center h-100">
            <div class="testimonial style-cards d-flex justify-content-center align-items-center mx-2 px-3 py-6 h-100 bg-lightestgrey rounded-4">
                <div class="mt-3">
                    <div class="testimonial-icon position-absolute top-0 start-50 translate-middle bg-white rounded-circle p-3">
                        <?php include(get_stylesheet_directory() . '/images/icons/icon-message.svg'); ?>
                    </div>
                    
                    <div class="testimonial-content position-relative mb-3 mx-lg-5 px-2 fs-sm">
                        <p class="mb-0 lh-base"><?php echo '"' . get_field('testimonial', get_the_ID(), false) . '"'; ?></p>
                    </div>
                    <hr class="mx-auto mt-3 mb-2">
                    <div class="mt-auto testimonial-name text-primary fw-bold">
                        <?php the_field('name', get_the_ID()); ?>
                        <?php if(get_field('job_title', get_the_ID())): ?>
                            <br><span class="text-body fs-xs"><?php the_field('job_title', get_the_ID()); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>

<div class="style-cards">
    <?php if($testimonials->found_posts > 1): ?>
        <div class="swiper-button-prev <?php echo esc_attr($prevclass); ?>"></div>
        <div class="swiper-button-next <?php echo esc_attr($nextclass); ?>"></div>
    <?php endif; ?>
</div>