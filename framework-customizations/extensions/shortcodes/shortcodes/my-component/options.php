<?php if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'demo_edit'   => array(
        'type'   => 'wp-editor',
        'label'  => __( 'Content', 'fw' ),
        'desc'   => __( 'Enter some content for this texblock', 'fw' )

        /**
         * Also available
         * https://github.com/WordPress/WordPress/blob/4.4.2/wp-includes/class-wp-editor.php#L80-L94
         */
    ),

    'image_img' => array(
        'type'  => 'upload',
        'label' => __( 'Choose Image', 'fw' ),
        'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
    ),
);