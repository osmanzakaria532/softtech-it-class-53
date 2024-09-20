<?php
/*
   Template Name: Full Width Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package genesys
 */

get_header();
?>
     <div class="container">
		<div class="row">
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
	</div><!--row-->
	</div><!--container-->
<?php

get_footer();
