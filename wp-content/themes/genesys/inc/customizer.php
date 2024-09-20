<?php
/**
 * genesys Theme Customizer
 *
 * @package genesys
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function genesys_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'genesys_customize_partial_blogname',
			)
		);

		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'genesys_customize_partial_blogdescription',
			)
		);	

	 // adding copyright section to the genesys customizer 

    	$wp_customize-> add_section('genesys_copyright_sec', array(
		'title'                    => __('Copyright','genesys'),
		'description' => __('Please, type here your copyright','genesys')
	 ));
	
	 $wp_customize-> add_setting('genesys_copyright_set', array(
		'type'                     => 'theme_mod',
		'sanitize_callback'        => 'esc_html'
	 ));

    	$wp_customize-> add_control( 'genesys_ctrl_copyright', array(
		'label'                   => __('Copyright Information','genesys'),
		'description'             => __('Please, type your copyright here.','genesys'),
		'section'                 => 'genesys_copyright_sec',
		'settings'                => 'genesys_copyright_set',
		'type'                    => 'text'
    	));

		// adding footer column choice 

	$wp_customize-> add_section('genesys_foot_col_choice_sc', array(
		'title'                   => __('Footer Column Choice','genesys'),
		'description'             => __('Please, choose your Footer Column Layout','genesys')
	 ));
	

	 $wp_customize-> add_setting('genesys_foot_col_choice_st', array(
		'type'                     => 'theme_mod',
		'sanitize_callback'        => 'genesys_sanitize_foot_col_choice'
	 ));


	 $wp_customize-> add_control( 'genesys_foot_col_choice_ctrl', array(
		'label'                   => __('Footer Column Choice','genesys'),
		'description'             => __('Please, choose your Footer Column Layout','genesys'),
		'section'                 => 'genesys_foot_col_choice_sc',
		'settings'                => 'genesys_foot_col_choice_st',
		'type'                    => 'select',
		'choices'                 => array(
		'two'                     => __( 'Two Column','genesys' ),
		'three'                   => __( 'Three Column','genesys' ),
		'four'                    => __( 'Four Column','genesys' ),
		  ),
	 ));

	//  sanitizing footer column choice
	 function genesys_sanitize_foot_col_choice($input, $setting) {

		$choices = array('two','three','four');
		if (in_array($input, $choices)) {
			return $input;
		} else {
			return "three";
		}
	 }


	// adding sidebar location setting to customizer
	 $wp_customize-> add_section('genesys_sidebar_sec', array(
		'title'                    => __('Sidebar Location','genesys'),
		'description'             => __('Please, choose your sidebar location','genesys'),

	 ));
	

	 $wp_customize-> add_setting('genesys_sidebar_set', array(
		'type'                     => 'theme_mod',
		'sanitize_callback'        => 'genesys_sanitize_sidebar'
	 ));

	 $wp_customize-> add_control( 'genesys_ctrl_sidebar', array(
		'label'                   => __('Sidebar Location','genesys'),
		'description'             => __('Please, choose your sidebar location','genesys'),
		'section'                 => 'genesys_sidebar_sec',
		'settings'                => 'genesys_sidebar_set',
		'type'                    => 'select',
		'choices'                 => array(
		'left'                    => __( 'Left Side' ,'genesys'),
		'right'                   => __( 'Right Side','genesys' ),
		'none'                    => __( 'No Sidebar','genesys' ),
		  ),
	 ));

	 function genesys_sanitize_sidebar($input, $setting) {

		$choices = array('right', 'left','none');
		if (in_array($input, $choices)) {
			return $input;
		} else {
			return "right";
	 	}
	 }
	 

   }
}
add_action( 'customize_register', 'genesys_customize_register' );




/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function genesys_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function genesys_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function genesys_customize_preview_js() {
	wp_enqueue_script( 'genesys-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), genesys, true );
}
add_action( 'customize_preview_init', 'genesys_customize_preview_js' );
