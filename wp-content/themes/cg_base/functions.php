<?php
// functions.php

require_once('lib/timber.php');

function custom_acf_json_save_point( $path ) {
    // Set the path to the acf-json folder in your theme
    return get_stylesheet_directory() . '/acf-json';
}
add_filter('acf/settings/save_json', 'custom_acf_json_save_point');

function custom_acf_json_load_point( $paths ) {
    // Add the path to the acf-json folder in your theme
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;
}
add_filter('acf/settings/load_json', 'custom_acf_json_load_point');

function enqueue_theme_scripts() {
    // Deregister the default version of jQuery provided by WordPress
    wp_deregister_script('jquery');

    // Register and enqueue jQuery from an external source
    wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js", array(), null, true);
    wp_enqueue_script('jquery');

    wp_register_script('fontawesome', "https://kit.fontawesome.com/ca004fe30a.js", array(), null, true);
    wp_enqueue_script('fontawesome');

    wp_enqueue_script( 'cg_base-script', get_template_directory_uri() . '/assets/dist/js/scripts.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_style( 'cg_base-style', get_template_directory_uri() . '/assets/dist/css/styles.min.css', array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_theme_scripts' );

add_theme_support('post-thumbnails');

function theme_name_register_menus() {
    register_nav_menus(
        array(
            'header-menu' => 'Header Menu',
            'footer-menu' => 'Footer Menu'
        )
    );
}
add_action('init', 'theme_name_register_menus');

if(function_exists('acf_add_options_page')) {
    acf_add_options_page(
        [
            'page_title' => 'Site Options',
            'menu_title' => 'Site Options',
            'menu_slug' => 'site-options',
        ]
    );
}


