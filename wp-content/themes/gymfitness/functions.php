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
