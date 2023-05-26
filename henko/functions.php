<?php
/**
 * Henko functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Henko
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
function henko_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Henko, use a find and replace
		* to change 'henko' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'henko', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'henko' ),
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
			'henko_custom_background_args',
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
add_action( 'after_setup_theme', 'henko_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function henko_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'henko_content_width', 640 );
}
add_action( 'after_setup_theme', 'henko_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function henko_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'henko' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'henko' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'henko_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function henko_scripts() {
	/**
	 * wp_enqueue_style( 'henko-style', get_stylesheet_uri(), array(), _S_VERSION );
	 * wp_style_add_data( 'henko-style', 'rtl', 'replace' );
	 */

	wp_enqueue_style( 'helvetica-neue-style', get_template_directory_uri() . '/assets/fonts/Helvetica Neue/stylesheet.css', array(), _S_VERSION );

	wp_enqueue_style( 'polysans-style', get_template_directory_uri() . '/assets/fonts/PolySans/stylesheet.css', array(), _S_VERSION );

	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/styles/css/main.css', array(), _S_VERSION );

	wp_enqueue_style( 'jquery-ui-style', get_template_directory_uri() . '/js/jquery-ui/1.13.2/jquery-ui.min.css', array(), _S_VERSION );

	wp_enqueue_style( 'magnific-popup-style', get_template_directory_uri() . '/js/magnific-popup/magnific-popup.css', array(), _S_VERSION );

	wp_enqueue_style( 'github-style', get_template_directory_uri() . '/js/poppa/css/github.css', array(), _S_VERSION );

	wp_enqueue_style( 'global-style', get_template_directory_uri() . '/js/poppa/css/global.css', array(), _S_VERSION );

	wp_enqueue_style( 'validation-style', get_template_directory_uri() . '/js/poppa/css/validation.css', array(), _S_VERSION );

	/**
	 * wp_enqueue_script( 'henko-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	 */

	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery/3.6.4/jquery-3.6.4.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/js/jquery-ui/1.13.2/jquery-ui.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/js/magnific-popup/jquery.magnific-popup.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'global', get_template_directory_uri() . '/js/poppa/js/global.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'highlight', get_template_directory_uri() . '/js/poppa/js/highlight.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'poppa', get_template_directory_uri() . '/js/poppa/js/poppa.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/waypoints/lib/jquery.waypoints.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'henko_scripts' );

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