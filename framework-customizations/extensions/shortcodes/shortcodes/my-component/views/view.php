<?php if (!defined('FW')) {
    die('Forbidden');
}

if ( ! empty( $atts['demo_edit'] ) ) { ?>

    <?php echo $atts['demo_edit']; ?>

<?php } ?>

<?php if ( ! empty( $atts['image_img'] ) ) { ?>

    <img src="<?php echo fw_resize( $atts['image_img']['url'], 150, 150, true ); ?>" alt="">
        
<?php } ?>
