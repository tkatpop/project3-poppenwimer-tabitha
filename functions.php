<?php

function custom_theme_scripts(){

    //Main CSS
    wp_enqueue_style('main-styles', get_stylesheet_uri());

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

?>