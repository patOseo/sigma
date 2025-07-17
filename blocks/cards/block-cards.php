<?php
/**
* Cards Block
*/

$class_name = 'cards-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}

?>

<?php if(have_rows('cards')): ?>
<div class="<?php echo esc_attr($class_name); ?>">
    <div class="row gx-5 gy-5 mb-6">
        <?php while(have_rows('cards')): the_row(); ?>
            <?php include __DIR__ . '/single-card.php'; ?>
        <?php endwhile; ?>
    </div>
</div>
<?php endif; ?>