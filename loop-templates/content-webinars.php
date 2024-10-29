<?php
$webinar_info = get_field('webinar_info', get_the_ID());
$presenter = $webinar_info['presenter'];
?>

<div class="webinar-card-container position-relative mb-4 h-100">
    <div class="webinar-card rounded-4 overflow-hidden shadow h-100">
        <div class="webinar-title d-flex align-items-center bg-primary p-5">
            <a class="stretched-link text-white text-decoration-none" href="<?php echo get_permalink(); ?>">
                <h3 class="h4 text-uppercase text-white fw-bold mb-0 lh-1"><?php the_title(); ?></h3>
            </a>
        </div>
        <div class="webinar-info bg-white border-top border-5 border-secondary p-4">
            <div class="row gx-2 align-items-center">
                <div class="col mb-0">
                    <div class="presenter-image text-center">
                        <?php
                        if(get_field('image', $presenter)) {
                            $img_id = get_field('image', $presenter); 
                        } else {
                            $img_id = 10611;
                        }
                        echo wp_get_attachment_image($img_id, array(80, 80)); 
                        ?>
                    </div>
                </div>
                <div class="col-8 mb-0">
                    <div class="presenter-name ff-montserrat fw-500 text-primary"><?php echo get_field('name', $presenter); ?></div>
                    <div class="presenter-position fw-normal fs-sm text-grey"><?php echo get_field('position', $presenter); ?></div>
                </div>
            </div>
        </div>
    </div>
    <button class="position-absolute top-100 start-50 translate-middle btn btn-outline-secondary bg-white rounded-5 fw-bold px-4 py-2 z-1">Watch Now</button>
</div>