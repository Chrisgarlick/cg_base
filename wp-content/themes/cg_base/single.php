<?php
/**
 * The Template for displaying all single posts
 */

/* $context = Timber::context();
$timber_post = Timber::query_post();
$context['post'] = $timber_post;

// if ( post_password_required( $timber_post->ID ) ) {
// 	Timber::render( 'single/single-password.twig', $context );
// } else {
	if($post->post_type == 'post'){
        $context['title'] = '<h1>Hello World!!</h1>';
		// $featured_image_id = get_post_thumbnail_id();
		// if($featured_image_id ){
		// 	$context['hero']['image'] = acf_get_attachment($featured_image_id);
		// }
		// $context['hero']['space_bottom'] = true;
	}

    // require_once('templates/components.php');
	Timber::render( array( 'single/single-' . $post->ID . '.twig', 'single/single-' . $post->post_type . '.twig', 'single.twig' ), $context );
// }