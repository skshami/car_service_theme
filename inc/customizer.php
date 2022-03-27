<?php
/**
 * CARSERVICE Theme Customizer
 *
 * @package CARSERVICE
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function carservice_customize_register( $wp_customize ) {

	// Theme Color
	$wp_customize-> add_section('ali_colors', array(
	  'title' => __('Theme Colors', 'carservice'),
	  'description' => 'If need you can change your theme color.',
	));
  
	$wp_customize ->add_setting('ali_bg_color', array(
	  'default' => '#ffffff',
	));
	$wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'ali_bg_color', array(
	  'label' => 'Body Background Color',
	  'section' => 'ali_colors',
	  'settings' => 'ali_bg_color',
	)));
	$wp_customize ->add_setting('top_header_bg', array(
	  'default' => '#f2f2f2',
	));
	$wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'top_header_bg', array(
	  'label' => 'Top Header Background Color',
	  'section' => 'ali_colors',
	  'settings' => 'top_header_bg',
	)));
	$wp_customize ->add_setting('ali_nav_color', array(
	  'default' => '#ffffff',
	));
	$wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'ali_nav_color', array(
	  'label' => 'Header Background Color',
	  'section' => 'ali_colors',
	  'settings' => 'ali_nav_color',
	)));
	$wp_customize ->add_setting('ali_primary_color', array(
	  'default' => '#D81324',
	));
	$wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'ali_primary_color', array(
	  'label' => 'Primary Color',
	  'section' => 'ali_colors',
	  'settings' => 'ali_primary_color',
	)));
	$wp_customize ->add_setting('ali_secondary_color', array(
	  'default' => '#0B2154',
	));
	$wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'ali_secondary_color', array(
	  'label' => 'Secondary Color',
	  'section' => 'ali_colors',
	  'settings' => 'ali_secondary_color',
	)));
	$wp_customize ->add_setting('ali_dark_color', array(
	  'default' => '#111111',
	));
	$wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'ali_dark_color', array(
	  'label' => 'Text Color',
	  'section' => 'ali_colors',
	  'settings' => 'ali_dark_color',
	)));
	$wp_customize ->add_setting('ali_hover_color', array(
	  'default' => '#be0a19',
	));
	$wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'ali_hover_color', array(
	  'label' => 'Button Hover Color',
	  'section' => 'ali_colors',
	  'settings' => 'ali_hover_color',
	)));
	$wp_customize ->add_setting('ali_light_color', array(
	  'default' => '#ffffff',
	));
	$wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'ali_light_color', array(
	  'label' => 'Light Color',
	  'section' => 'ali_colors',
	  'settings' => 'ali_light_color',
	)));


	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'carservice_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'carservice_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'carservice_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function carservice_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function carservice_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function carservice_customize_preview_js() {
	wp_enqueue_script( 'carservice-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'carservice_customize_preview_js' );

function ali_theme_color_cus(){
	?>
	<style>
	  body{background: <?php echo get_theme_mod('ali_bg_color'); ?>}
	  :root{--primary:<?php echo get_theme_mod('ali_primary_color'); ?>}
	  :root{--secondary:<?php echo get_theme_mod('ali_secondary_color'); ?>}
	  :root{--dark:<?php echo get_theme_mod('ali_dark_color'); ?>}
	  :root{--light:<?php echo get_theme_mod('ali_light_color'); ?>}
	  :root{--hover:<?php echo get_theme_mod('ali_hover_color'); ?>}
	  .nav-bg{background-color:<?php echo get_theme_mod('ali_nav_color'); ?>}
	  .top-header-bg{background-color:<?php echo get_theme_mod('top_header_bg'); ?>}
	</style>
	<?php 
  }
  add_action('wp_head', 'ali_theme_color_cus');