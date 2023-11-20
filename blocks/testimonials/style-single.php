<div class="swiper-wrapper">
    <!-- Slides -->
    <?php while($testimonials->have_posts()): $testimonials->the_post(); ?>        
        <div class="swiper-slide text-center">
            <div class="testimonial d-flex text-start shadow-none">
                <div class="mt-3">
                    <div class="testimonial-content position-relative text-primary mb-3 fs-2 ff-montserrat">
                        <p class="mb-3 lh-sm fw-bold"><?php echo '"' . get_field('testimonial', get_the_ID(), false) . '"'; ?></p>
                        <div class="fs-4 fst-italic">
                            <?php the_field('name', get_the_ID()); ?>
                            <?php if(get_field('job_title', get_the_ID())): ?>
                                <br><span><?php the_field('job_title', get_the_ID()); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>

<div class="style-single">
    <?php if($testimonials->found_posts > 1): ?>
        <div class="d-inline-block text-primary my-3 me-6 swiper-button-prev <?php echo esc_attr($prevclass); ?>"></div>
        <div class="d-inline-block text-primary my-3 ms-6 swiper-button-next <?php echo esc_attr($nextclass); ?>"></div>
    <?php endif; ?>
</div>