<?php
/**
 * HoneyHome functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package HoneyHome
 */

if ( ! function_exists( 'honeyhome_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function honeyhome_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on HoneyHome, use a find and replace
		 * to change 'honeyhome' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'honeyhome', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'honeyhome' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'honeyhome_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'honeyhome_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function honeyhome_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'honeyhome_content_width', 640 );
}
add_action( 'after_setup_theme', 'honeyhome_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function honeyhome_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'honeyhome' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'honeyhome' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'honeyhome_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function honeyhome_scripts() {
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css',array(),'4.2.0','all');
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css',array(),'3.0.3','all');
	wp_enqueue_style('animate', get_template_directory_uri().'/css/animate.css',array(),'3.5.1','all');
	wp_enqueue_style('style', get_template_directory_uri().'/css/style.css',array(),'1.0','all');
	wp_enqueue_style('nivo-lightbox', get_template_directory_uri().'/css/nivo-lightbox.css',array(),'1.3.1','all');
	wp_enqueue_style('default', get_template_directory_uri().'/css/default/default.css',array(),'1.0','all');
	wp_enqueue_style( 'honeyhome-style', get_stylesheet_uri() );




	wp_enqueue_script( 'smoothscroll', get_template_directory_uri() . '/js/smoothscroll.js', array('jquery'), '1.4.6', true );
	wp_enqueue_script( 'sticky', get_template_directory_uri() . '/js/sticky.js', array('jquery'), '1.0.4', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.7', true );
	wp_enqueue_script( 'bootstrap-carousel', get_template_directory_uri() . '/js/bootstrap-carousel.js', array('jquery'), '3.0.0', true );
	wp_enqueue_script( 'jquery.easing', get_template_directory_uri() . '/js/jquery.easing.min.js', array('jquery'), '1.3', true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), '1.1.3', true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/isotope.js', array('jquery'), '3.0.1', true );
	wp_enqueue_script( 'nivo-lightbox', get_template_directory_uri() . '/js/nivo-lightbox.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/js/imagesloaded.min.js', array('jquery'), '4.1.1', true );
	wp_enqueue_script( 'googlemaps', 'https://maps.google.com/maps/api/js?key=AIzaSyBh-jcDBT5zH9XN1IPjwDP9143Z5BAgnZw', array('jquery'), '1.0', true );
	wp_enqueue_script( 'model', get_template_directory_uri() . '/js/model.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'honeyhome_scripts' );

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

