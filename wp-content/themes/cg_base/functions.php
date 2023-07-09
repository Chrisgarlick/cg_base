<?php
// functions.php

use Timber\Timber;

function my_theme_register_timber() {
    Timber::$dirname = array('templates');
}
add_action('after_setup_theme', 'my_theme_register_timber');


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

