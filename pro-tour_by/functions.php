<?php
/**
 * pro-tour_by functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pro-tour_by
 */

if ( ! function_exists( 'pro_tour_by_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function pro_tour_by_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on pro-tour_by, use a find and replace
		 * to change 'pro-tour_by' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'pro-tour_by', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'pro-tour_by' ),
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
		add_theme_support( 'custom-background', apply_filters( 'pro_tour_by_custom_background_args', array(
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
add_action( 'after_setup_theme', 'pro_tour_by_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pro_tour_by_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pro_tour_by_content_width', 640 );
}
add_action( 'after_setup_theme', 'pro_tour_by_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pro_tour_by_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Почта для формы', 'pro-tour_by' ),
		'id'            => 'admin_mail',
		'description'   => esc_html__( 'Add admin_mail here.', 'pro-tour_by' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Велком-1', 'pro-tour_by' ),
		'id'            => 'phone-v1',
		'description'   => esc_html__( 'Add widgets here.', 'pro-tour_by' ),
		'before_widget' => '<div class="wiget-phone">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Велком-2', 'pro-tour_by' ),
		'id'            => 'phone-v2',
		'description'   => esc_html__( 'Add widgets here.', 'pro-tour_by' ),
		'before_widget' => '<div class="wiget-phone">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'МТС-1', 'pro-tour_by' ),
		'id'            => 'phone-m1',
		'description'   => esc_html__( 'Add widgets here.', 'pro-tour_by' ),
		'before_widget' => '<div class="wiget-phone">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'МТС-2', 'pro-tour_by' ),
		'id'            => 'phone-m2',
		'description'   => esc_html__( 'Add widgets here.', 'pro-tour_by' ),
		'before_widget' => '<div class="wiget-phone">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'МТС-2', 'pro-tour_by' ),
		'id'            => 'phone-m2',
		'description'   => esc_html__( 'Add widgets here.', 'pro-tour_by' ),
		'before_widget' => '<div class="wiget-phone">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'почта для шапки', 'pro-tour_by' ),
		'id'            => 'mail',
		'description'   => esc_html__( 'Add widgets here.', 'pro-tour_by' ),
		'before_widget' => '<div class="wiget-mail">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'почта дублирующая', 'pro-tour_by' ),
		'id'            => 'mail-2',
		'description'   => esc_html__( 'Add widgets here.', 'pro-tour_by' ),
		'before_widget' => '<div class="wiget-mail">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'skype', 'pro-tour_by' ),
		'id'            => 'skype',
		'description'   => esc_html__( 'Add widgets here.', 'pro-tour_by' ),
		'before_widget' => '<div class="wiget-skype">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Социальные сети ВК', 'pro-tour_by' ),
		'id'            => 'social_vk',
		'description'   => esc_html__( 'Add widgets here.', 'pro-tour_by' ),
		'before_widget' => '<div class="social-icons social_vk">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Социальные сети ОК', 'pro-tour_by' ),
		'id'            => 'social_ok',
		'description'   => esc_html__( 'Add widgets here.', 'pro-tour_by' ),
		'before_widget' => '<div class="social-icons social_ok">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Социальные сети Фейсбук', 'pro-tour_by' ),
		'id'            => 'social_f',
		'description'   => esc_html__( 'Add widgets here.', 'pro-tour_by' ),
		'before_widget' => '<div class="social-icons social_f">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Социальные сети Инстаграмм', 'pro-tour_by' ),
		'id'            => 'social_inst',
		'description'   => esc_html__( 'Add widgets here.', 'pro-tour_by' ),
		'before_widget' => '<div class="social-icons social_inst">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Виджет в сайдбар', 'pro-tour_by' ),
		'id'            => 'wiget_aside',
		'description'   => esc_html__( 'Add widgets here.', 'pro-tour_by' ),
		'before_widget' => '<div class="wiget_aside">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Облако тегов', 'pro-tour_by' ),
		'id'            => 'wiget_tags',
		'description'   => esc_html__( 'Add widgets here.', 'pro-tour_by' ),
		'before_widget' => '<div class="wiget_aside column-3">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


}
add_action( 'widgets_init', 'pro_tour_by_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function pro_tour_by_scripts() {

	wp_enqueue_style( 'pro-tour_by-diamonds-style', get_template_directory_uri() . '/css/diamonds.css');

	wp_enqueue_style( 'pro-tour_by-gallery-style', get_template_directory_uri() . '/css/gallery.css');

	wp_enqueue_style( 'pro-tour_by-wowstyle', get_template_directory_uri() . '/engine/style.css');

	wp_enqueue_style( 'pro-tour_by-style', get_stylesheet_uri() );

	wp_enqueue_script( 'pro-tour_by-modernizr', get_template_directory_uri() . '/js/modernizr.custom.53451.js', array(), '20151215', true );

	wp_enqueue_script( 'pro-tour_by-jquery', get_template_directory_uri() . '/js/jquery-3.2.0.min.js', array(), '20151215', true );

	wp_enqueue_script( 'pro-tour_by-jquery-m', get_template_directory_uri() . '/js/jquery-migrate-1.4.1.min.js', array(), '20151215', true );

	wp_enqueue_script( 'pro-tour_by-maskedinput', get_template_directory_uri() . '/js/maskedinput.js', array(), '20151215', true );

	wp_enqueue_script( 'pro-tour_by-diamonds', get_template_directory_uri() . '/js/jquery.diamonds.js', array(), '1', true );

	wp_enqueue_script( 'pro-tour_by-gallery', get_template_directory_uri() . '/js/jquery.gallery.js', array(), '1', true );

	wp_enqueue_script( 'pro-tour_by-wowslider', get_template_directory_uri() . '/engine/wowslider.js', array(), '1', true );

	wp_enqueue_script( 'pro-tour_by-wowscript', get_template_directory_uri() . '/engine/script.js', array(), '1', true );

	wp_enqueue_script( 'pro-tour_by-main', get_template_directory_uri() . '/js/main.js', array(), '1', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pro_tour_by_scripts' );

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
 * require TGM.
 */
require get_template_directory() . '/tgm/tgm-files.php';

/**
 * Require slider.
 */
require get_template_directory() . '/inc/tops.php';

/**
 * Require aviatours.
 */
require get_template_directory() . '/inc/avia.php';

/**
 * Require autotours.
 */
require get_template_directory() . '/inc/auto.php';

/**
 * Require news.
 */
require get_template_directory() . '/inc/news.php';

/**
 * Require operators.
 */
require get_template_directory() . '/inc/opers.php';

/**
 * Require operators.
 */
require get_template_directory() . '/inc/tabs.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
