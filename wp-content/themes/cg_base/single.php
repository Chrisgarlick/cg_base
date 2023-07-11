<?php
/**
 * The Template for displaying all single posts
 */

 $context = Timber::context();
 $context['post'] = new TimberPost();
 Timber::render('templates/single.twig', $context);