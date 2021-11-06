<?php
    // Add Theme Support
    add_theme_support('title-tags');
    add_theme_support('post-thumbnails');
    add_theme_support('post_format', ['aside','gallery','link','image','quote',
    'status','video','chat']);
    add_theme_support('html5');
    add_theme_support('automatic-feed-links');
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('custom-logo');
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('starter-content');

    // Load in out CSS
    function wphierarchy_enqueue_styles() {

        wp_enqueue_style('main-css' , get_stylesheet_directory_uri() . '/style.css', [] , time() , 'all');
    }

    add_action('wp_enqueue_scripts','wphierarchy_enqueue_styles');

    // Register Menu Locations
    register_nav_menus([
        'main-menu' => esc_html('Main Menu', 'wphierarchy')
        // 'main-menu' => esc_html('Main Menu', 'wpheirarchy'),
        // 'main-menu' => esc_html('Main Menu', 'wpheirarchy')
    ]);


?>