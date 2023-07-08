<?php
// Silence is golden.
use Timber\Timber;

$context = Timber::context();
$templates = array('index.twig'); // Add other templates if needed

Timber::render($templates, $context);
