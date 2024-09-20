<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package genesys
 */

	get_header();



?>
<center class="container"><h2 class ="latest-posts"><span class="l-posts"><?php _e( 'Latest', 'genesys' ); ?></span><Span class="w-posts"><?php _e( 'Posts', 'genesys' ); ?></span></h2></center>
   <div class="container">
	 <div class="row">

	 <?php
	 $sidebar = get_theme_mod('genesys_sidebar_set', 'right');
	 if($sidebar == "left"){
	  get_sidebar();
   }?>

		<div class="col-md-8">
	
			<main id="primary" class="site-main">	
			<?php
				if ( have_posts() ) :
				
					if ( is_home() && ! is_front_page() ) :
						
						?>
						
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
						<?php
					endif;

					/* Start the Loop */?>
					
				<div class="row main-query-loop" id="main-loop">			
				<?php
				while ( have_posts() ) :
					the_post();?>
					<div class="col-md-6 post-images">
								<?php
								/*
								* Include the Post-Type-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Type name) and that will be used instead.
								*/
						get_template_part( 'template-parts/content-layout-2', get_post_type() );?>
					</div><!--col-md-6-->
				<?php
					endwhile;?>
				
					<?php

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
				
				</div><!--row-->
			</main><!-- #main -->
			</div><!--col-md-8-->	
			<?php
		if($sidebar == "right"){
			get_sidebar();
		}
		?>	
   </div><!--row-->
  
</div><!--container-->

<?php
get_footer();



