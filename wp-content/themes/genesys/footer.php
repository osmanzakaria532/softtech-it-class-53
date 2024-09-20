<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package genesys
 */

?>
<?php get_template_part( 'template-parts/footer/footer-widgets'); ?>

<footer id="colophon" class="site-footer">
     <div class="theme-info">
		 <a href="#masthead"><img id="scl" src="<?php echo esc_url( get_template_directory_uri(). '/img/arrow-up.png');?>"/></a>
	 </div>


 <div class="footer-content">
	<div class="footer-inner container">
	<div class="row">
		<div class="copyright-area col-md-6">
				<p class="copyright"><?php echo esc_html( get_theme_mod('genesys_copyright_set' )); ?></p>
				
		</div>
		
		<div class="footer-menu-right">
				<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer-menu',
					'menu_id'        => 'footer-menu',
				)
			     );
			   ?>
		</div><!--footer-menu-right-->
		</div><!--footer--inner-->
		<div class="copy-right">
		<p class="mr-2"><?php _e('Powered by ', 'genesys'); ?><a class="text-center mb-2" href="<?php echo esc_url( 'https://igamingdevs.com/genesys/'); ?>"><?php _e('Genesys', 'genesys'); ?></a></p>
		</div>

 </div><!---footer-content-->


</div><!-- #page -->

</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>



