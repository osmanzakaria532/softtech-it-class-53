<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package genesys
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 <div class="row blog-style">
	<div class="col-md-6">
			<p class="category"><?php the_category(', '); ?></p><?php
			if (has_post_thumbnail()):
			genesys_post_thumbnail( 'genesys-thumbnail-4x3' );
			else: ?>
			<img src="<?php echo esc_url( get_template_directory_uri()."/img/dummy-750.png" ); ?>"><?php 
			endif;	?>
	</div>
	<div class="col-md-6">
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				genesys_posted_on();
				genesys_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	 </header><!-- .entry-header -->


	  
	<div class="entry-content">

	<?php
		if ( is_singular() ) :
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'genesys' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);
		else :
		the_excerpt();
		
	endif;

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'genesys' ),
				'after'  => '</div>',
			)
		);
		
	?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php genesys_entry_footer(); ?>
	</footer><!-- .entry-footer -->

	</div><!--com-md--6-->
	</div><!--row-->
</article><!-- #post-<?php the_ID(); ?> -->
