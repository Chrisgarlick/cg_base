<?php

/* Template Name: Flexible */ 

$context = Timber::context();
$context['posts'] = Timber::get_posts();

require_once('templates/components.php');

Timber::render( array('index.twig'), $context);

// $context = Timber::get_context();
// $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; 
// $context['posts'] = new Timber\PostQuery();

// // if($paged != '1'){
// //     $context['paged'] = ' - '. __('Page ', 'cg_base') . $paged;
// // }



// Timber::render( array( 'index.twig') , $context );

// $twig = new Twig_Environment($loader, [
//     'debug' => true,
// ]);

