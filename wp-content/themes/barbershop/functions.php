<?php

/**
 * barbershop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package barbershop
 */

require_once get_template_directory()  . '/inc/carbon-fields/carbon-fields-plugin.php';


require_once get_template_directory()  . '/inc/custom-fields/post-meta.php';
require_once get_template_directory()  . '/inc/custom-fields/theme-option.php';
if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}


if (!function_exists('barbershop_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function barbershop_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on barbershop, use a find and replace
		 * to change 'barbershop' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('barbershop', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'barbershop'),
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
				'barbershop_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', 'barbershop_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function barbershop_content_width()
{
	$GLOBALS['content_width'] = apply_filters('barbershop_content_width', 640);
}
add_action('after_setup_theme', 'barbershop_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function barbershop_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'barbershop'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'barbershop'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'barbershop_widgets_init');

/**
 * Enqueue scripts and styles.
 */

//подключение шрифтов Open Sans и Roboto от Google start
function wph_add_google_fonts()
{
	if (!is_admin()) {
		wp_register_style('barbershop-jura',  'https://fonts.googleapis.com/css2?family=Jura:wght@700&family=Quicksand&display=swap', array(), null, 'all');
		wp_register_style('barbershop-gradu',  'https://fonts.googleapis.com/css2?family=Graduate&family=Jura:wght@700&family=Quicksand&display=swap', array(), null, 'all');
		wp_enqueue_style('barbershop-jura');
		wp_enqueue_style('barbershop-gradu');
	}
}
add_action('wp_enqueue_scripts', 'wph_add_google_fonts');
//подключение шрифтов Open Sans и Roboto от Google end
function barbershop_scripts()
{
	wp_enqueue_style('barbershop-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('barbershop-style', 'rtl', 'replace');
	wp_enqueue_style('barbershop-cookie',  'https://fonts.googleapis.com/css?family=Cookie');
	wp_enqueue_style('barbershop-iconic', get_template_directory_uri() . '/assets/css/open-iconic-bootstrap.min.css');
	wp_enqueue_style('barbershop-animate', get_template_directory_uri() . '/assets/css/animate.css');
	wp_enqueue_style('barbershop-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
	wp_enqueue_style('barbershop-owl', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
	wp_enqueue_style('barbershop-magnific', get_template_directory_uri() . '/assets/css/magnific-popup.css');
	wp_enqueue_style('barbershop-aos', get_template_directory_uri() . '/assets/css/aos.css');
	wp_enqueue_style('barbershop-ionicons', get_template_directory_uri() . '/assets/css/ionicons.min.css');
	wp_enqueue_style('barbershop-datepicker', get_template_directory_uri() . '/assets/css/bootstrap-datepicker.css');
	wp_enqueue_style('barbershop-timepicker', get_template_directory_uri() . '/assets/css/jquery.timepicker.css');
	wp_enqueue_style('barbershop-flaticon', get_template_directory_uri() . '/assets/css/flaticon.css');
	wp_enqueue_style('barbershop-icomoon', get_template_directory_uri() . '/assets/css/icomoon.css');
	wp_enqueue_style('barbershop-stylewp', get_template_directory_uri() . '/assets/css/style.css');




	wp_enqueue_script('barbershop-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('barbershop-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.1.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('barbershop-popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('barbershop-bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('barbershop-easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array(), _S_VERSION, true);
	wp_enqueue_script('barbershop-waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('barbershop-stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('barbershop-carouseljs', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('barbershop-magnificjs', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('barbershop-aosjs', get_template_directory_uri() . '/assets/js/aos.js', array(), _S_VERSION, true);
	wp_enqueue_script('barbershop-animateNumber', get_template_directory_uri() . '/assets/js/jquery.animateNumber.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('barbershop-datepickerjs', get_template_directory_uri() . '/assets/js/bootstrap-datepicker.js', array(), _S_VERSION, true);
	wp_enqueue_script('barbershop-timepickerjs', get_template_directory_uri() . '/assets/js/jquery.timepicker.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('barbershop-scrollax', get_template_directory_uri() . '/assets/js/scrollax.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('barbershop-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true);

	wp_enqueue_script('barbershop-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'barbershop_scripts');

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
