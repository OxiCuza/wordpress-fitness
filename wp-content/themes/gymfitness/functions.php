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

    // Slicknav stylesheet
    wp_enqueue_style('slicknav', get_template_directory_uri() . '/css/slicknav.min.css');

    // Main stylesheet
    wp_enqueue_style('main-stylesheet', get_stylesheet_uri(), array('normalize', 'google-fonts'), '1.0.0');

    // Load JS Files
    wp_enqueue_script('jquery');
    wp_enqueue_script('slicknav', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'gymfitness_scripts');

// Enable feature images and other stuff
function gymfitness_setup() {
    
    // Register new images size
    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('box', 400, 375, true);
    add_image_size('mediumSize', 700, 400, true);
    add_image_size('blog', 966, 644, true);

    // Add featured images
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'gymfitness_setup');
