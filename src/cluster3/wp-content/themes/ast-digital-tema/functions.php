<?php
function ast_digital_setup() {
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'title-tag' );

    register_nav_menus( array(
        'primary' => __( 'Menú principal', 'ast-digital-tema' ),
        'footer'  => __( 'Menú del pie de página', 'ast-digital-tema' ),
    ) );
}
add_action( 'after_setup_theme', 'ast_digital_setup' );

function ast_digital_enqueue_assets() {
    $theme_uri  = get_template_directory_uri();
    $theme_path = get_template_directory();

    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css',
        array(),
        '5.3.8'
    );
    wp_enqueue_style( 'ast-digital-style', get_stylesheet_uri(), array( 'bootstrap' ), '1.0.0' );

    foreach ( array( 'css/app-theme.css', 'css/home.css' ) as $stylesheet ) {
        if ( file_exists( $theme_path . '/' . $stylesheet ) ) {
            wp_enqueue_style(
                'ast-digital-' . sanitize_title( basename( $stylesheet, '.css' ) ),
                $theme_uri . '/' . $stylesheet,
                array( 'ast-digital-style' ),
                filemtime( $theme_path . '/' . $stylesheet )
            );
        }
    }

    wp_enqueue_script(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.8',
        true
    );

    foreach ( array( 'js/datos.js', 'js/app.js' ) as $script ) {
        if ( file_exists( $theme_path . '/' . $script ) ) {
            wp_enqueue_script(
                'ast-digital-' . sanitize_title( basename( $script, '.js' ) ),
                $theme_uri . '/' . $script,
                array( 'bootstrap' ),
                filemtime( $theme_path . '/' . $script ),
                true
            );
        }
    }
}
add_action( 'wp_enqueue_scripts', 'ast_digital_enqueue_assets' );