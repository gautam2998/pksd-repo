<?php
/**
 * PKSD functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package PKSD
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'pksd_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function pksd_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on PKSD, use a find and replace
		 * to change 'pksd' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'pksd', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'pksd' ),
			)
		);
		register_nav_menus(
			array(
				'menu-2' => esc_html__( 'Secondary', 'pksd' ),
			)
		);
		register_nav_menus(
			array(
				'menu-page-404' => esc_html__( '404 Page Menu( Home )', 'pksd' ),
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
				'pksd_custom_background_args',
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
add_action( 'after_setup_theme', 'pksd_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pksd_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pksd_content_width', 640 );
}
add_action( 'after_setup_theme', 'pksd_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pksd_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'pksd' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'pksd' ),
			'before_widget' => '<section id="%1$s" class="%2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Attorneys', 'pksd' ),
			'id'            => 'sidebar-attorneys',
			'description'   => esc_html__( 'Add widgets here.', 'pksd' ),
			'before_widget' => '<section id="%1$s" class="%2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Practice Area', 'pksd' ),
			'id'            => 'sidebar-practice-area',
			'description'   => esc_html__( 'Add widgets here.', 'pksd' ),
			'before_widget' => '<section id="%1$s" class="%2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 1', 'pksd' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'pksd' ),
			'before_widget' => '<section id="%1$s" class="%2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 2', 'pksd' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'pksd' ),
			'before_widget' => '<section id="%1$s" class="%2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
			'before_sidebar'=> '<div class="row">',
			'after_sidebar'=> '</div>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 3', 'pksd' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'pksd' ),
			'before_widget' => '<section id="%1$s" class="">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Page Sidebar Template 1', 'pksd' ),
			'id'            => 'page-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'pksd' ),
			'before_widget' => '<section id="%1$s" class="%2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Page Sidebar Template 2', 'pksd' ),
			'id'            => 'page-sidebar-template-2',
			'description'   => esc_html__( 'Add widgets here.', 'pksd' ),
			'before_widget' => '<section id="%1$s" class="%2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Page Sidebar Template 3', 'pksd' ),
			'id'            => 'page-sidebar-template-3',
			'description'   => esc_html__( 'Add widgets here.', 'pksd' ),
			'before_widget' => '<section id="%1$s" class="%2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Page Sidebar Template 4', 'pksd' ),
			'id'            => 'page-sidebar-template-4',
			'description'   => esc_html__( 'Add widgets here.', 'pksd' ),
			'before_widget' => '<section id="%1$s" class="%2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
    register_sidebar(
		array(
			'name'          => esc_html__( 'Blog Page Sidebar', 'pksd' ),
			'id'            => 'blog-page-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'pksd' ),
			'before_widget' => '<section id="%1$s" class="%2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Blog Category Sidebar', 'pksd' ),
			'id'            => 'blog-category-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'pksd' ),
			'before_widget' => '<section id="%1$s" class="%2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Case no case  Sidebar', 'pksd' ),
			'id'            => 'case-no-case-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'pksd' ),
			'before_widget' => '<section id="%1$s" class="%2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Result Page Sidebar', 'pksd' ),
			'id'            => 'result-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'pksd' ),
			'before_widget' => '<section id="%1$s" class="%2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Testimonials Page Sidebar', 'pksd' ),
			'id'            => 'testimonials-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'pksd' ),
			'before_widget' => '<section id="%1$s" class="%2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Search Page Sidebar', 'pksd' ),
			'id'            => 'search-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'pksd' ),
			'before_widget' => '<section id="%1$s" class="%2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( '404 Page Sidebar', 'pksd' ),
			'id'            => '404-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'pksd' ),
			'before_widget' => '<section id="%1$s" class="%2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'pksd_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function pksd_scripts() {
	wp_style_add_data( 'pksd-style', 'rtl', 'replace' );

	wp_enqueue_script( 'pksd-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	// Custom Style 
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/includes/css/bootstrap-3.3.4.css',array(),'1.0.0');
	wp_enqueue_style( 'lightbox', get_stylesheet_directory_uri() . '/includes/src/css/ilightbox.css',array(),'1.0.0');
	wp_enqueue_style( 'yamm', get_stylesheet_directory_uri() . '/includes/css/yamm.css',array(),'1.0.0');
	wp_enqueue_style( 'local', get_stylesheet_directory_uri() . '/includes/css/local.css',array(),'1.0.0');
	wp_enqueue_style( 'testimonials', get_stylesheet_directory_uri() . '/includes/css/testimonials.css',array(),'1.0.0');
	wp_enqueue_style( 'slick', get_stylesheet_directory_uri() . '/includes/css/slick.css',array(),'1.0.0');
	wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/includes/css/slick-theme.css',array(),'1.0.0');
	wp_enqueue_style( 'ilightbox', get_stylesheet_directory_uri() . '/includes/css/ilightbox.css',array(),'1.0.0');
	wp_enqueue_style( 'responsive', get_stylesheet_directory_uri() . '/includes/css/responsive.css',array(),'1.0.1');
	wp_enqueue_style( 'pksd-style', get_stylesheet_uri(), array(), _S_VERSION );
	
	// Custom JS
	wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/includes/js/jquery.js', array(), true );
	wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/includes/js/bootstrap.js', array(), true );
	wp_enqueue_script( 'datattables', get_stylesheet_directory_uri() . '/includes/js/jquery.dataTables.js', array(), true );
	wp_enqueue_script( 'sortable', get_stylesheet_directory_uri() . '/includes/js/jquery.sortable.js', array(), true );
	wp_enqueue_script( 'mousewheel', get_stylesheet_directory_uri() . '/includes/src/js/jquery.mousewheel.js', array(), true );
	wp_enqueue_script( 'ilightbox', get_stylesheet_directory_uri() . '/includes/src/js/ilightbox.packed.js', array(), true );
	wp_enqueue_script( 'slickquiz-config', get_stylesheet_directory_uri() . '/includes/js/slickquiz/slickQuiz-config.js', array(), true );
	wp_enqueue_script( 'slickquiz', get_stylesheet_directory_uri() . '/includes/js/slickquiz/slickQuiz.js', array(), true );
	wp_enqueue_script( 'slick', get_stylesheet_directory_uri() . '/includes/js/slick.min.js', array('jquery'), true );
	wp_enqueue_script( 'smoke-min', get_stylesheet_directory_uri() . '/includes/js/smoke.min.js', array('jquery'), true );
	wp_enqueue_script( 'custom', get_stylesheet_directory_uri() . '/includes/js/custom.js', array('jquery'), true );
	wp_enqueue_script( 'general', get_stylesheet_directory_uri() . '/includes/js/general.js', array('jquery'), true );
}
add_action( 'wp_enqueue_scripts', 'pksd_scripts' );

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

require get_stylesheet_directory() . '/includes/custom-widget.php';

require get_stylesheet_directory() . '/includes/custom-widget-review.php';

require get_stylesheet_directory() . '/includes/custom-widget-news.php';

require get_stylesheet_directory() . '/includes/custom-widget-category-post-news.php';

require get_stylesheet_directory() . '/includes/custom-widget-category-post.php';

require get_stylesheet_directory() . '/includes/custom-widget-category-post-resource.php';


// include('inculdes/custom-widget.php');
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
// Custom code  
// add_filter('nav_menu_link_attributes', function($atts, $item, $args) {
//     if ( $args->has_children )
//     {
//         $atts['data-toggle'] = 'dropdown';
//         $atts['class'] = 'dropdown-toggle';
//     }

//     return $atts;
// }, 10, 3);

