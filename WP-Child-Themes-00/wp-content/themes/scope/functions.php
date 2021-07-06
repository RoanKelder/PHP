<?php
/**
 * Scope functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Scope
 */


require get_template_directory() . '/admin/admin-init.php';

if ( ! function_exists( 'scope_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function scope_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Scope, use a find and replace
		 * to change 'scope' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'scope', get_template_directory() . '/languages' );

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
			'primary' => esc_html__( 'Primary Menu', 'scope' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'scope_custom_background_args', array(
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
		));

		add_theme_support( 'starter-content', array(
			'posts' => array(
				'home' => array(
					'post_type' => 'page', 
					'post_title' => _x( 'Home', 'Theme starter content', 'scope' ),
				),
				'blog' => array(
					'post_type' => 'page', 
					'post_title' => _x( 'Blog', 'Theme starter content', 'scope' ),
				),
			),
			'options' => array(
				'show_on_front' => 'page',
				'page_on_front' => '{{home}}',
				'page_for_posts' => '{{blog}}',				
			),
			'nav_menus' => array(
				'primary' => array(
					'name' => __( 'Primary Menu', 'scope' ),
					'items' => array(
						'page_home',
						'page_blog'
					),
				)
			),
 		));
	}
endif;
add_action( 'after_setup_theme', 'scope_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function scope_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'scope_content_width', 1170 );
}
add_action( 'after_setup_theme', 'scope_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function scope_widgets_init() {
	register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'scope'),
        'id'            => 'sidebar',
        'class'         => 'sidebar',
        'description'   => esc_html__('Sidebar Widget Area', 'scope'),
        'before_widget' => '<div id="%1$s" class="sidebar-widget widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="widget-heading"><h3 class="widget-title">',
        'after_title'   => '</h3></div>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('WooCommerce Sidebar', 'scope'),
        'id'            => 'woocommerce-sidebar',
        'class'         => 'woocommerce-sidebar',
        'description'   => esc_html__( 'WooCommerce Widget Area', 'scope' ),
        'before_widget' => '<div id="%1$s" class="woocommerce-widget sidebar-widget widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="widget-heading"><h3 class="widget-title">',
        'after_title'   => '</h3></div>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Widget Area', 'scope'),
        'id'            => 'footer-widget-area',
        'class'         => 'footer-widget-area',
        'description'   => esc_html__( 'Footer Widget Area', 'scope' ),
        'before_widget' => '<div id="%1$s" class="col-md-4 col-sm-6 footer-widget widget %2$s"><div class="widget-inner">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<div class="widget-heading"><h3 class="widget-title">',
        'after_title'   => '</h3></div>',
    ));

    
}
add_action( 'widgets_init', 'scope_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function scope_scripts() {
	
	wp_enqueue_style( 'scope-fonts-style', scope_get_font_url(array('Oswald' => array(500,700,900))));
    wp_enqueue_style( 'animate', get_template_directory_uri() . "/css/animate.min.css");
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . "/css/owl.carousel.min.css");
    wp_enqueue_style( 'owl-theme', get_template_directory_uri() . "/css/owl.theme.default.min.css");
    wp_enqueue_style( 'simplelightbox',  get_template_directory_uri()."/css/simplelightbox.min.css");
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . "/css/bootstrap.min.css");
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . "/css/font-awesome.min.css");

    if (is_singular() && get_option('thread_comments')) {wp_enqueue_script('comment-reply');}
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', array('jquery'));
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'));
    wp_enqueue_script( 'simple-lightbox', get_template_directory_uri() . '/js/simple-lightbox.min.js', array('jquery'));
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', array('jquery'));
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'));   
    wp_enqueue_script( 'scope-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array());
    wp_enqueue_script( 'scope-custom-script', get_template_directory_uri() . '/js/custom-script.js', array('jquery'));
    wp_localize_script( 'scope-custom-script', 'scope_script_obj', array(
    	'rtl' => is_rtl(),
    ));

    wp_enqueue_script('respond', get_template_directory_uri() . '/js/respond.min.js');
    wp_script_add_data('respond', 'conditional', 'lt IE 9');

    wp_enqueue_script('html5shiv', get_template_directory_uri() . '/js/html5shiv.js');
    wp_script_add_data('html5shiv', 'conditional', 'lt IE 9');

}
add_action( 'wp_enqueue_scripts', 'scope_scripts' );

function scope_register_custom_scripts() {
    wp_enqueue_style('scope-style', get_stylesheet_uri());
    wp_enqueue_style('scope-media-style', get_template_directory_uri() . "/css/media-style.css");
}
add_action('wp_enqueue_scripts', 'scope_register_custom_scripts', 30);

function scope_customize_controls_enqueue_scripts() {
    wp_enqueue_style('font-awesome', get_template_directory_uri() . "/css/font-awesome.min.css");
    wp_enqueue_style('scope-customizer-css', get_template_directory_uri() . '/css/customizer-style.css');
    wp_enqueue_script('scope-customizer-script', get_template_directory_uri() . '/js/customizer-script.js', array( 'jquery', 'customize-controls' ), false, true);
}
add_action('customize_controls_enqueue_scripts', 'scope_customize_controls_enqueue_scripts');

require get_template_directory() . '/inc/themefarmer-functions.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/menu-walker.php';
require get_template_directory() . '/inc/sanitize-cb.php';
require get_template_directory() . '/inc/compatibility/class-scope-elementer.php';



if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
