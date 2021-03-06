<?php
/**
 * aquivivegente functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package aquivivegente
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'aquivivegente_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function aquivivegente_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on aquivivegente, use a find and replace
		 * to change 'aquivivegente' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'aquivivegente', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'aquivivegente' ),
				'menu-2' => esc_html__( 'Mobile', 'aquivivegente' )
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
				'aquivivegente_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'aquivivegente_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function aquivivegente_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'aquivivegente_content_width', 640 );
}
add_action( 'after_setup_theme', 'aquivivegente_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function aquivivegente_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'aquivivegente' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'aquivivegente' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'aquivivegente_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function aquivivegente_scripts() {
	wp_enqueue_style( 'aquivivegente-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_style( 'aquivivegente-bootstrap-style', get_template_directory_uri(). '/css/bootstrap.css', array(), _S_VERSION );
	wp_enqueue_style( 'aquivivegente-slick-style', get_template_directory_uri() . '/css/slick.css', array(), _S_VERSION );
	wp_enqueue_style( 'aquivivegente-home-style', get_template_directory_uri() . '/css/home.css', array(), _S_VERSION );
	wp_enqueue_style( 'aquivivegente-custom-style', get_template_directory_uri() . '/css/custom.css', array(), _S_VERSION );

	wp_enqueue_style( 'aquivivegente-responsive-style', get_template_directory_uri() . '/css/responsive.css', array(), _S_VERSION );

	wp_enqueue_script( 'aquivivegente-slick', get_template_directory_uri() . '/js/slick.js', array( 'jquery' ), '1.7.0', true );
	wp_enqueue_script( 'aquivivegente-barba', get_template_directory_uri() . '/js/barba.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'aquivivegente-barba-css', get_template_directory_uri() . '/js/barba-css.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'aquivivegente-smooth', get_template_directory_uri() . '/js/smooth.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'aquivivegente-transitions', get_template_directory_uri() . '/js/transitions.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'aquivivegente-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_style_add_data( 'aquivivegente-style', 'rtl', 'replace' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'aquivivegente_scripts' );

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


add_filter('wp_get_attachment_image_src','delete_width_height', 10, 4);

function delete_width_height($image, $attachment_id, $size, $icon){

    $image[1] = '';
    $image[2] = '';
    return $image;
}

function add_objects() {

	$labels = array(
		'name'                  => _x( 'Objetos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Objeto', 'Post Type Singular Name', 'text_domain' ),
	);
	$args = array(
		'labels'                => $labels,
		'taxonomies'            => array( 'category'),
		'public'                => true,
	);
	register_post_type( 'objeto', $args );

}
add_action( 'init', 'add_objects', 0 );

function add_gente() {

	$labels = array(
		'name'                  => _x( 'Gente', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Grupo', 'Post Type Singular Name', 'text_domain' ),
	);
	$args = array(
		'labels'                => $labels,
		'taxonomies'            => array( 'category'),
		'public'                => true,
	);
	register_post_type( 'gente', $args );

}
add_action( 'init', 'add_gente', 0 );