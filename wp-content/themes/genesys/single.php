<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package genesys
 */

get_header();
?>
  <div class="breadcrumb"><?php  genesys_get_breadcrumbs(); ?></div>

    <div class="container">
		<div class="row">
			<div class="col-md-8">
			 <main id="primary" class="site-main">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content-single', get_post_type() );

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'genesys' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'genesys' ) . '</span> <span class="nav-title">%title</span>',
						)
					);?>
					<div class="comments">
								<?php // If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
								?>
					</div><!--comments-->
			</main><!-- #main -->
			</div><!--col-md-8-->
			<?php get_sidebar();?>
	 </div><!--row-->
	</div><!--container-->
<?php
get_footer();
