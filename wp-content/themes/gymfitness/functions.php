<?php

// Create the menus
function gymfitness_menus() {
    // Wordpress function
    register_nav_menus(array(
        'main-menu' => 'Main Menu'
    ) );
}

// Hooks
add_action('init', 'gymfitness_menus');

// Adds stylesheet file and javascript file
function gymfitness_scripts() {
    // Normalize css
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');

    // Google fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Raleway:ital,wght@0,100..900;1,100..900&family=Staatliches&display=swap');

    // Main stylesheet
    wp_enqueue_style('main-stylesheet', get_stylesheet_uri(), array('normalize', 'google-fonts'), '1.0.0');
}
add_action('wp_enqueue_scripts', 'gymfitness_scripts');
