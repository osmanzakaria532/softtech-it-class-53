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

    //
    
    // Add the shortcode
    add_shortcode('single-section', 'single_section_content_function');
    function single_section_content_function($attr, $content = null){
        ob_start();
        
        // Set up default attributes and merge with the provided ones
        $about = shortcode_atts(array(
            'title' => 'The Title',
            'id' => ''
        ), $attr);

        // Extract the array keys as variables
        extract($about);

        ?>

        <article id="<?php echo esc_attr($id); ?>">
            <h2><?php echo esc_html($title); ?></h2>
            <p><?php echo do_shortcode($content); ?></p>
        </article>

        <?php
        return ob_get_clean();  
    }

    // Check if Visual Composer (WPBakery) is active and map the shortcode
    if(function_exists('vc_map')) :

        vc_map(array(
            'name' => 'One Page Section',
            'base' => 'single-section',
            'params' => array(
                array(
                    'heading' => 'Title',
                    'param_name' => 'title',
                    'type' => 'textfield',
                    'value' => 'The Title'
                ),
                array(
                    'heading' => 'ID of the Section (without any space)',
                    'param_name' => 'id',
                    'type' => 'textfield',
                    'value' => ''
                ),
                array(
                    'heading' => 'Content of the Section',
                    'param_name' => 'content',
                    'type' => 'textarea_html',
                    'value' => ''
                ),
            )
        ));

    endif;

?>