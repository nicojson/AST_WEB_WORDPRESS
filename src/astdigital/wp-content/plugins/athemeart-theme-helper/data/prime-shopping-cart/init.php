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

            // Demos url
$url = 'https://demo.athemeart.com/demo-import/' . $theme->template . '/';

$data['blog'] = array(
    'demo_name' => 'Simple Free Version',
    'demo_url' => 'https://demo.athemeart.com/prime/',
    'categories' => array('free','WooCommerce'),
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
    )
);


$data['jewelry'] = array(
    'demo_name' => 'Jewelry Store with Image Slider',
    'demo_url' => 'https://demo.athemeart.com/prime/demo-1/',
    'categories' => array('WooCommerce','Premium'),
    'screenshot' => 'https://demo.athemeart.com/prime/img/screenshot.webp',
    'pro' => 'https://athemeart.com/downloads/prime-shopping-cart-pro/', 
    
);

$data['woocommerce'] = array(
    'demo_name' => 'WooCommerce Demo with Video Header',
    'demo_url' => 'https://demo.athemeart.com/prime/demo-2/',
    'categories' => array('WooCommerce','Premium'),
    'screenshot' => 'https://demo.athemeart.com/prime/img/screenshot-2.webp',
    'pro' => 'https://athemeart.com/downloads/prime-shopping-cart-pro/', 
    
);
