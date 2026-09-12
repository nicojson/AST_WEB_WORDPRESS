<?php
/**
 * Demos
 *
 * @package Demo Content for shopstore
 * @author aThemeArt
 */
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

$theme = wp_get_theme();

$data['blog'] = array(
    'demo_name' => 'Simple Free Version',
    'demo_url' => 'https://demo.athemeart.com/prime/',
    'categories' => array('free'),
    'screenshot' => 'https://demo.athemeart.com/prime/img/screenshot-3.webp',
    'xml_file' => plugins_url('woocommerce/sample-data/sample_products.xml'),
    'home_title' => 'Shop',
    'required_plugins' => array(
        'free' => array(
            array(
                'slug' => 'elementor',
                'init' => 'elementor/elementor.php',
                'name' => 'Elementor',
            ),
            array(
                'slug' => 'woocommerce',
                'init' => 'woocommerce/woocommerce.php',
                'name' => 'WooCommerce',
            ),
        ),
        'premium' => array(),
    )
);

$data['jewelry'] = array(
    'demo_name' => 'Jewelry Store with Image Slider',
    'demo_url' => 'https://demo.athemeart.com/prime/demo-1/',
    'categories' => array('Premium','WooCommerce'),
    'xml_file' => get_theme_file_uri( 'inc/demo-data/demo-1.xml' ),
    'widgets_file' => get_theme_file_uri( 'inc/demo-data/widgets.wie' ),
    'screenshot' => 'https://demo.athemeart.com/prime/img/screenshot.webp',
    'home_title' => 'Home Jewelry',
    'blog_title' => 'Blog',
    'posts_to_show' => '8',
    'default_page_template' => 'elementor_header_footer',
    'required_plugins' => array(
        'free' => array(
            array(
                'slug' => 'elementor',
                'init' => 'elementor/elementor.php',
                'name' => 'Elementor',
            ),
            array(
                'slug' => 'woocommerce',
                'init' => 'woocommerce/woocommerce.php',
                'name' => 'WooCommerce',
            ),
        ),
        'premium' => array(
            array(
                'slug' => 'codestar-framework',
                'init' => 'codestar-framework/codestar-framework.php',
                'source' => 'https://athemeart.com/proudct/3rd-party/codestar-framework.zip',
                'name' => 'Codestar Options Framework',
            ),
        ),
    )
);

$data['woocommerce'] = array(
    'demo_name' => 'WooCommerce Demo with Video Header',
    'demo_url' => 'https://demo.athemeart.com/prime/demo-2/',
    'categories' => array('WooCommerce','Premium'),
    'xml_file' => get_theme_file_uri( 'inc/demo-data/demo-2.xml' ),
    'widgets_file' => get_theme_file_uri( 'inc/demo-data/widgets-1.wie' ),
    'screenshot' => 'https://demo.athemeart.com/prime/img/screenshot-2.webp',
    'home_title' => 'Home',
    'blog_title' => 'Blog',
    'posts_to_show' => '8',
    'default_page_template' => 'elementor_header_footer',
    'required_plugins' => array(
        'free' => array(
            
            array(
                'slug' => 'elementor',
                'init' => 'elementor/elementor.php',
                'name' => 'Elementor',
            ),
            array(
                'slug' => 'woocommerce',
                'init' => 'woocommerce/woocommerce.php',
                'name' => 'WooCommerce',
            ),
        ),
        'premium' => array(
            array(
                'slug' => 'codestar-framework',
                'init' => 'codestar-framework/codestar-framework.php',
                'source' => 'https://athemeart.com/proudct/3rd-party/codestar-framework.zip',
                'name' => 'Codestar Options Framework',
            ),
        ),
    )
);
