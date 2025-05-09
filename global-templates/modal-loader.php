<?php
if(have_rows('load_modals')):
    while(have_rows('load_modals')): the_row();
        $selectmodal = get_sub_field('select_modal');
        $modaltrigger = get_sub_field('modal_trigger');
        $modal = get_post($selectmodal);
        ?>

        <?php if($selectmodal): $modalcontent = $modal->post_content; $padding = $modal->padding; ?>
        <div class="modal fade" id="<?php echo esc_attr($modaltrigger); ?>" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content shadow">
              <div class="modal-body <?php if($padding) { echo $padding; } ?>">
              <button type="button" class="btn-close position-absolute top-0 end-0 p-3" data-bs-dismiss="modal" aria-label="Close"></button>
                <?php echo do_shortcode($modalcontent); ?>
              </div>
            </div>
          </div>
        </div>
        <script>
            <?php // This finds the <a> tag on the page that matches the modal trigger, and enables modal pop up on click. ?>
            jQuery(document).ready(function($) {
                $('a[href="#<?php echo esc_attr($modaltrigger); ?>"]').on('click', function() {
                    $('#<?php echo esc_attr($modaltrigger); ?>').modal('show');
                });
            });
        </script>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif;