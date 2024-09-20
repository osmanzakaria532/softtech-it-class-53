<?php $footer_column_choice = get_theme_mod('genesys_foot_col_choice_st');?>

<footer id="footer-widgets">
	<div class="container">
		<div class="row">
<?php
		if ( $footer_column_choice == 'two') : ?>
		<?php if (is_active_sidebar( 'footer-widget-1' )) : ?>
				<div class="col-md-6 footer-column footer-column-1">
					<?php dynamic_sidebar( 'footer-widget-1' ); ?>
				</div>
			<?php endif; ?>
			<?php if (is_active_sidebar( 'footer-widget-2' )) : ?>
				<div class="col-md-6 footer-column footer-column-2">
					<?php dynamic_sidebar( 'footer-widget-2' ); ?>
				</div>
			<?php endif; ?>
				<?php endif;?>

		</div><!--row-->
	</div><!--container--->

	<div class="container">
		<div class="row">
<?php
		if ( $footer_column_choice == 'three') : ?>
		<?php if (is_active_sidebar( 'footer-widget-1' )) : ?>
				<div class="col-md-4 footer-column footer-column-1">
					<?php dynamic_sidebar( 'footer-widget-1' ); ?>
				</div>
			<?php endif; ?>
			<?php if (is_active_sidebar( 'footer-widget-2' )) : ?>
				<div class="col-md-4 footer-column footer-column-2">
					<?php dynamic_sidebar( 'footer-widget-2' ); ?>
				</div>
			<?php endif; ?>
			<?php if (is_active_sidebar( 'footer-widget-3' )) : ?>
				<div class="col-md-4 footer-column footer-column-2">
					<?php dynamic_sidebar( 'footer-widget-3' ); ?>
				</div>
			<?php endif; ?>
				
				<?php endif;?>
				
		</div><!--row-->
	</div><!--container--->


	<div class="container">
		<div class="row">
<?php
		if ( $footer_column_choice == 'four') : ?>
		<?php if (is_active_sidebar( 'footer-widget-1' )) : ?>
				<div class="col-md-3 footer-column footer-column-1">
					<?php dynamic_sidebar( 'footer-widget-1' ); ?>
				</div>
			<?php endif; ?>
			<?php if (is_active_sidebar( 'footer-widget-2' )) : ?>
				<div class="col-md-3 footer-column footer-column-2">
					<?php dynamic_sidebar( 'footer-widget-2' ); ?>
				</div>
			<?php endif; ?>
			<?php if (is_active_sidebar( 'footer-widget-3' )) : ?>
				<div class="col-md-3 footer-column footer-column-2">
					<?php dynamic_sidebar( 'footer-widget-3' ); ?>
				</div>
			<?php endif; ?>

			<?php if (is_active_sidebar( 'footer-widget-4' )) : ?>
				<div class="col-md-3 footer-column footer-column-2">
					<?php dynamic_sidebar( 'footer-widget-4' ); ?>
				</div>
			<?php endif; ?>
				
				<?php endif;?>
				
		</div><!--row-->
	</div><!--container--->
</footer>