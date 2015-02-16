<?php
/**
 * WPStrapFolio functions and definitions
 *
 * @package WPStrapFolio
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'wpstrapfolio_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function wpstrapfolio_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on WPStrapFolio, use a find and replace
	 * to change 'wpstrapfolio' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'wpstrapfolio', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 380, 236, true );
	add_image_size( 'wpstrapfolio-slider-caption', 280, 136, true ); //(cropped)
	add_image_size( 'wpstrapfolio-page-feature', 1230, 400, true ); //(cropped)
    add_image_size( 'wpstrapfolio-thumb-feature', 840, 320, true ); //(cropped)
    add_image_size( 'wpstrapfolio-page-static', 1230, 410, true ); //(cropped)

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'wpstrapfolio' ),
		'secondary' => __( 'Secondary Menu', 'wpstrapfolio' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'wpstrapfolio_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // wpstrapfolio_setup
add_action( 'after_setup_theme', 'wpstrapfolio_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function wpstrapfolio_widgets_init() {
	
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'wpstrapfolio' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wpstrapfolio_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function wpstrapfolio_scripts() {
	global $wp_styles;
	// CSS Scripts
	wp_enqueue_style('wpstrapfolio-style', get_template_directory_uri().'/css/style.css', false ,'1.0.0', 'all' );
	wp_enqueue_style('wpstrapfolio-bootstrap', get_template_directory_uri().'/css/app.css', false ,'2.2.2', 'all' );
    wp_enqueue_style('wpstrapfolio-responsive', get_template_directory_uri().'/css/app-responsive.css', false ,'2.2.2', 'all' );
	wp_enqueue_style('wpstrapfolio-custom', get_template_directory_uri().'/css/custom.css', false ,'1.0.0', 'all' );
	
	if ( is_front_page() ) :
	wp_enqueue_style( 'wpstrapfolio-carousel', get_template_directory_uri() . '/css/carousel.css', false ,'1.0.0', 'all' );
	endif;
	
	// Load style.css from child theme
    if (is_child_theme()) {
      wp_enqueue_style('wpstrapfolio_child', get_stylesheet_uri(), false, null);
    }
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
    
	wp_enqueue_script('bootstrap.min.js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'),'1.0', true );
	
	if ( is_front_page() ) :
	wp_enqueue_script( 'bootstrap-carousel', get_template_directory_uri() . '/js/bootstrap-carousel2.3.1.js', array( 'jquery' ), '2.3.1', true );
	endif;
	
	wp_enqueue_script( 'wpstrapfolio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'wpstrapfolio-bootstrapnav', get_template_directory_uri() . '/js/twitter-bootstrap-hover-dropdown.js', array(), '20120206', true );

	wp_enqueue_script( 'wpstrapfolio-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	
	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'wpstrapfolio-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'wpstrapfolio_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


if ( !wp_is_mobile() ) {
  require get_template_directory() . '/inc/nav-menu-walker.php';
  } else {
  require get_template_directory() . '/inc/nav-mobile-walker.php';
} 

// Lets do a separate excerpt length for the slider
function wpstrapfolio_slider_excerpt () {
	$theContent = trim(strip_tags(get_the_content()));
		$output = str_replace( '"', '', $theContent);
		$output = str_replace( '\r\n', ' ', $output);
		$output = str_replace( '\n', ' ', $output);
			if (get_theme_mod( 'wpstrapfolio_slider_excerpt' )) :
			$limit = get_theme_mod( 'wpstrapfolio_slider_excerpt' );
			else : 
			$limit = '20';
			endif;
			$content = explode(' ', $output, $limit);
			array_pop($content);
		$content = implode(" ",$content)."  ";
	return strip_tags($content, ' ');
}

// Lets do a separate excerpt length for the wpstrapfolio recent post
function wpstrapfolio_blogfeed_excerpt () {
	$theContent = trim(strip_tags(get_the_content()));
		$output = str_replace( '"', '', $theContent);
		$output = str_replace( '\r\n', ' ', $output);
		$output = str_replace( '\n', ' ', $output);
			if (get_theme_mod( 'wpstrapfolio_blogfeed_excerpt_length' )) :
			$limit = get_theme_mod( 'wpstrapfolio_blogfeed_excerpt_length' );
			else : 
			$limit = '80';
			endif;
			$content = explode(' ', $output, $limit);
			array_pop($content);
		$content = implode(" ",$content)."  ";
	return strip_tags($content, ' ');
}
