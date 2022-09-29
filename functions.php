<?php

// add dynamic tags support
function support(){
    add_theme_support('title-tag');
    add_theme_support( 'custom-logo');
add_theme_support('title-tag');
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
}

add_action('after_setup_theme', 'support');
//style links
    function styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('style', get_template_directory_uri() . "/style.css", array('bootsrap'), $version, 'all');
    wp_enqueue_style('bootsrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css", array(), '5.2.0', 'all');
    wp_enqueue_style('fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css", array(), '6.1.2', 'all');
}
    add_action( 'wp_enqueue_scripts', 'styles');
//scripts
    function scripts(){
    wp_enqueue_script('bootsrap1', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js", array(), '5.2.0', true);
    wp_enqueue_script('bootsrap2', "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js", array(), '2.11.5', true);
    wp_enqueue_script('bootsrap3', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js", array(), '5.2.0', true);

    }
    add_action( 'wp_enqueue_scripts', 'scripts');

//theme menu
    function theme_option_setup() {
        add_theme_support('menus');
        register_nav_menu('primary', 'Primary Header Menu Navigation');
    }
    //code for showing menu under appearance
    add_action('init', 'theme_option_setup');

    // adding a custom logo
function themename_custom_logo_setup() {
    $defaults = array(
        'height'               => 150,
        'width'                => 300,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 

}

// add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
require get_template_directory() . '/inc/customizer.php';
?>