<?php

add_shortcode('single-section', 'single_section_content_function');
    function single_section_content_function($attr, $content){
        ob_start();
        
        $about = shortcode_atts(array(
            'title' => 'The Title',
            'id' => '',
            'content' => ''
        ), $attr);
        extract($about);

        ?>

            <article id=" <?php echo $id; ?> ">
                <h2> <?php echo $title; ?> </h2>
                <p> <?php echo do_shortcode($content); ?> </p>
            </article>

        <?php return ob_get_clean();  
    }

    // 
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
                    'heading' => 'ID of the Section ( without any space )',
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