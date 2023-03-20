<?php

//npx mix for larave-mix
//or
//npm watch

// add scripts and styles
function custom_styles_and_scripts()
{
    $styleSrc = get_template_directory_uri() . '/dist/app.css';
    $scriptSrc = get_template_directory_uri() . '/dist/app.js';

    wp_enqueue_style('custom_styles_and_scripts', $styleSrc);
    wp_enqueue_script('custom_styles_and_scripts', $scriptSrc, array(), '1.0',  false);
}
add_action('wp_enqueue_scripts', 'custom_styles_and_scripts');


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
