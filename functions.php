<?php

    function custom_theme_scripts(){
        //Bootstrap CSS
        wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');

        //Main CSS
        wp_enqueue_style('main-styles', get_stylesheet_uri());

        //Javascript
        wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');

    }

    add_action('wp_enqueue_scripts', 'custom_theme_scripts');

    //Display Feature Images
    add_theme_support('post-thumbnails');

    //Custom Image Header
    $custom_image_header = array(
        'width'     => 520,
        'height'    => 200,
        'uploads'   => true
    );

    add_theme_support('custom-header', $custom_image_header);


    //Remove Ob End Flush Error Message
    remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );


    //Add Menus to Theme
    function register_my_menus(){
        register_nav_menus(array(
            'main-menu'     => __('Main Menu'),
            'footer-left'   => __('Left Footer Menu'),
            'footer-middle' => __('Middle Footer Menu'),
            'footer-right'  => __('Right Footer Menu')
        ));
    }

    add_action('init','register_my_menus');

    //Creating Widgets
    function blank_widgets_init(){

        register_sidebar(array(
            'name'          => ('Right Footer Widget'),
            'id'            => 'right-footer-widget',
            'description'   => 'Area in the Right footer for content',
            'before_widget' => '<div class="right-footer-widget-container"',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));

        register_sidebar(array(
            'name'          => ('Left Footer Widget'),
            'id'            => 'left-footer-widget',
            'description'   => 'Area in the left-footer for content',
            'before_widget' => '<div class="left-footer-widget-container"',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));

        register_sidebar(array(
            'name'          => ('Tour Widget'),
            'id'            => 'tour-widget',
            'description'   => 'Area in the tour page for content',
            'before_widget' => '<div class="tour-form-widget-container"',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }

    add_action('widgets_init', 'blank_widgets_init');

?>