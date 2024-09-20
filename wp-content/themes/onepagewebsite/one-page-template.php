<?php /* Template Name: One Page*/ global $post; ?> 

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>
    <body>

        <div class="header-area">
            <div class="main-menu">
                <?php 
                    // wp_nav_menu(array(
                    //     'theme_location' => 'main-menu'
                    // ));
                ?>
                <ul>
                    <?php

                    $something = new WP_Query(array(
                        'post_type' => 'page',
                        'order'     => 'ASC',
                        'orderby'   => 'time',
                        'offset'    => 1
                    ));

                    while( $something->have_posts() ) : $something->the_post(); ?>
                        <li><a href="#<?php echo $post->post_name; ?>"><?php the_title(); ?></a></li>
                    <?php endwhile; ?>
                </ul>

            </div>
        </div>
        <div class="content-area">
            <?php 

            $pageType = new WP_Query(array(
                'post_type' => 'page',
                'order' => 'ASC',
                'orderby' => 'time',
                'offset' => 1
            ));
            
            while( $pageType->have_posts()) : $pageType->the_post(); ?>
                <article id="<?php  echo $post->post_name; ?>" <?php post_class(); ?>>

                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                    
                </article>
            <?php endwhile; ?>
        </div>
        <div class="footer-area">
            <p>All rights reserved</p>
        </div>
        <?php wp_footer(); ?>
        
    </body>
</html>