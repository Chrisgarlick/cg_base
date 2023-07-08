<?php
// functions.php

use Timber\Timber;

function my_theme_register_timber() {
    Timber::$dirname = array('templates');
}
add_action('after_setup_theme', 'my_theme_register_timber');


function enqueue_theme_assets() {
    wp_enqueue_script( 'cg_base-script', get_template_directory_uri() . '/assets/dist/js/scripts.min.js', array(), '1.0.0', true );
    wp_enqueue_style( 'cd_base-style', get_template_directory_uri() . '/assets/dist/css/styles.min.css', array(), '1.0.0' );
  }
  add_action( 'wp_enqueue_scripts', 'enqueue_theme_assets' );
  