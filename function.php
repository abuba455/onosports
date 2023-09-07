<?php

function enqueue_child_theme_styles() {
    // Enqueue the custom stylesheet
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles');

// Register Navigation Menus
function register_onosports_menus() {
    register_nav_menus([
        'primary' => __('Primary Menu', 'onosports'),
    ]);
}
add_action('init', 'register_onosports_menus');

// Add Featured Image Support To Your WordPress Theme
function add_featured_image_support_to_onosports() {
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'add_featured_image_support_to_onosports');

function initialize_widgets() {
	register_sidebar( [
		'name' => 'Right Sidebar',
		'id'   => 'rightsidebar'
	] );
	
	register_sidebar( [
		'name' => 'Footer',
		'id'   => 'footer'
	] );
}

add_action( 'widgets_init', 'initialize_widgets' );