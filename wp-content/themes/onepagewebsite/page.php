<?php

global $post;

get_header(); ?>
    <div class="content-area">
        <?php while( have_posts() ) : the_post(); ?>
            <article id="<?php echo $post->post_name; ?>" <?php post_class();?> >
                <?php the_content(); ?>
            </article>
        <?php endwhile; ?>
    </div>

<?php get_footer();?>
        