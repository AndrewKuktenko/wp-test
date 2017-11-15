<?php if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'header_text' => array(
        'type'  => 'text',
        'value' => 'default value',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Header text', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
    ),
    'footer_text' => array(
        'type'   => 'wp-editor',
        'label'  => __( 'Footer Text', 'fw' ),
        'desc'   => __( 'Enter some content for this texblock', 'fw' )

        /**
         * Also available
         * https://github.com/WordPress/WordPress/blob/4.4.2/wp-includes/class-wp-editor.php#L80-L94
         */
    ),
    'bg-color' => array(
        'type'  => 'color-picker',
        'value' => '#FF0000',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        // palette colors array
        'palettes' => array( '#ba4e4e', '#0ce9ed', '#941940' ),
        'label' => __('Background Color', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
    )
);