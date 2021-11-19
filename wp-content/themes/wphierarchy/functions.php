<?php
    // Add Theme Support
    add_theme_support('title-tags');
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', ['aside','gallery','link','image','quote',
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
        wp_enqueue_style('varela-font-css' , 'https://fonts.google.com/css?family=Varela+Round' , [] , time() , 'all');
        wp_enqueue_style('main-css' , get_stylesheet_directory_uri() . '/style.css', ['varela-font-css'] , time() , 'all');
        wp_enqueue_style('custom-css' , get_stylesheet_directory_uri() . '/assets/css/custom.css', ['main-css'] , time() , 'all');
    }

    add_action('wp_enqueue_scripts','wphierarchy_enqueue_styles');

    // Register Menu Locations
    register_nav_menus([
        'main-menu' => esc_html('Main Menu', 'wphierarchy')
    ]);

    // Setup Widget Areas
    function wphierarchy_widgets_init() {
        register_sidebar([
            'name' => esc_html__('Main Sidebar', 'wphierarchy'),
            'id' => 'main-sidebar',
            'description'   =>  esc_html__('Add widgets for main sidebar here', 'wphierarchy'),
            'before_widget' => '<section class=">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ]);
        register_sidebar([
            'name' => esc_html__('Page Sidebar', 'wphierarchy'),
            'id' => 'page-sidebar',
            'description'   =>  esc_html__('Add widgets for page sidebar here', 'wphierarchy'),
            'before_widget' => '<section class=">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ]);
        register_sidebar([
            'name' => esc_html__('Front Page Widgets', 'wphierarchy'),
            'id' => 'front-page',
            'description'   =>  esc_html__('Add widgets for the front page sidebar here', 'wphierarchy'),
            'before_widget' => '<section class=">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ]);
    }
    add_action('widgets_init', 'wphierarchy_widgets_init');

?>