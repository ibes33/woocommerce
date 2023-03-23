<?php

//npx mix for larave-mix
//or
//npm watch

// add scripts and styles
function custom_styles()
{
    $styleSrc = get_template_directory_uri() . '/dist/app.css';
    wp_enqueue_style('custom_styles', $styleSrc);
}
add_action('wp_enqueue_scripts', 'custom_styles');

// Add your scripts in the footer
function my_footer_scripts()
{
    $scriptSrc = get_template_directory_uri() . '/dist/app.js';
    wp_enqueue_script('my_footer_scripts', $scriptSrc, array(), '1.0',  false);
}
add_action('wp_footer', 'my_footer_scripts');


// add Menu
function custom_theme_setup()
{
    // Add theme support for menus
    add_theme_support('menus');

    // Register a custom navigation menu
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'custom-theme'),
    ));
}
add_action('after_setup_theme', 'custom_theme_setup');




/**
 * WooCommerce
 */
add_theme_support('woocommerce');

add_action('wp_enqueue_scripts', 'enqueue_woocommerce_styles');
function enqueue_woocommerce_styles()
{
    wp_enqueue_style('woocommerce-style', get_template_directory_uri() . '/css/woocommerce/woocommerce.css');
}
