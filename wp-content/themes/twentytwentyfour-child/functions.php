<?php





add_action('wp_enqueue_scripts', 'child_theme_style');
function child_theme_style(){

    // > get_template_directory_uri() likhle perant theme theke style pabe
    wp_enqueue_style('stylesheet', get_template_directory_uri().'/style.css');

    // >  get_stylesheet_directory_uri() likhle atctive theme theke style pabe
    // wp_enqueue_style('stylesheet', get_stylesheet_directory_uri().'/style.css');
}

add_action('after_setup_theme', 'child_theme_function');
function child_theme_function(){
    register_nav_menu('footer-menu', 'Footer Menu');
}