<?php 



    // Theme Support Options
    add_action('after_setup_theme', 'one_page_function');
    function one_page_function(){
        //
        add_theme_support('title-tag');
        
        register_nav_menu('main-menu', 'Main Menu');
    }


    // link stylesheet
    add_action('wp_enqueue_scripts', 'one_page_stylesheets');
    function one_page_stylesheets(){
        // link style file
        wp_enqueue_style('style', get_stylesheet_uri());
    }

    // Link JQuery
    add_action('wp_enqueue_scripts', 'one_page_jQuery');
    function one_page_jQuery(){
        wp_enqueue_script('jQueryFile', get_template_directory_uri().'/jQuery/jQuery.js', array('jquery'));

        // --->
        // wp_enqueue_script('nam', 'link', array(), 'version', boolean);

    }
?>