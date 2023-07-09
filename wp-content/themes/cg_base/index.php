<?php 

/* Template Name: Flexible */
// use Timber\Timber; 
/*
$context = Timber::context();
$templates = array('index.twig'); // Add other templates if needed

Timber::render($templates, $context); */

// $context = array();
// $context['headline'] = 'Welcome to my new Timber Blog!';

// Timber::render('index.twig');
$context = array();
$context['message'] = 'I am a message from the index.php file';
Timber::render('templates/index.twig', $context);