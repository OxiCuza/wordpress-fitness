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
}
add_action('wp_enqueue_scripts', 'gymfitness_scripts');
