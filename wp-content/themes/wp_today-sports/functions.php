<?php 
/*
*
*Template Name: Functions
* 
*/
// action hook exmple

function theme_setup(){
    add_theme_support('title-tag');
}
add_action('after_setup_theme','theme_setup');

//filter hook exmaple
function custom_excerpt_length(){
    return 15;
}

add_filter('excerpt_length','custom_excerpt_length');

// adding css and js files usign action hook
//wp_enqueue_script() or wp_enqueue_style()

function add_theme_scripts(){
    wp_enqueue_style('main-stylesheet',get_stylesheet_uri());

    // adding magin.css file
    wp_enqueue_style('magic',get_template_directory_uri().'/css/magin.css');
}
add_action('wp_enqueue_script','add_theme_scripts');

?>