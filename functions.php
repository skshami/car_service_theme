<?php
/**
 * CARSERVICE functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CARSERVICE
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function carservice_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on CARSERVICE, use a find and replace
		* to change 'carservice' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'carservice', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'single_post_thumb', 764, 572, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary_menu' => esc_html__( 'Primary Menu', 'carservice' ),
			'footer_menu' => esc_html__( 'Footer Menu', 'carservice' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'carservice_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'carservice_setup' );

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function carservice_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'carservice_content_width', 640 );
}
add_action( 'after_setup_theme', 'carservice_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function carservice_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'carservice' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'carservice' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'carservice_widgets_init' );

// Except to 10 Word
function carservice_custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'carservice_custom_excerpt_length', 999 );

function carservice_excerpt_more( $more ) {
    return ' ';
}
add_filter( 'excerpt_more', 'carservice_excerpt_more' );

function carserv_remove_sections( $wp_customize ) {

	$wp_customize->remove_section('header_image');
	//$wp_customize->remove_panel('nav_menus');
	//$wp_customize->remove_panel('widgets');
	//$wp_customize->remove_section('custom_css');	
	$wp_customize->remove_section('colors');
	//$wp_customize->remove_section('background_image');
	$wp_customize->remove_section('static_front_page');	 
	//$wp_customize->remove_section('title_tagline');	
}
add_action( 'customize_register', 'carserv_remove_sections');



/**
 * Custom Post type register
 */

require get_template_directory() . '/inc/post-type.php';

/**
 * Theme Option Framework.
 */

require get_template_directory() . '/inc/theme-option.php';

/**
 * TGM Plugin.
 */
require get_template_directory() . '/inc/tgm.php';

/**
 * Style and Scripts Enqueue.
 */
require get_template_directory() . '/inc/scripts.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

