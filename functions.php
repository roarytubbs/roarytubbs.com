<?php
/**
 * roarytubbs functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package roarytubbs
 */

if ( ! function_exists( 'rt_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function rt_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on roarytubbs, use a find and replace
	 * to change 'rt' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'rt', get_template_directory() . '/languages' );

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
		'main-nav' => esc_html__( 'Main Nav', 'rt' ),
		'footer-nav' => esc_html__( 'Footer Nav', 'rt' ),
		'social-nav' => esc_html__( 'Social Nav', 'rt' )
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
	add_theme_support( 'custom-background', apply_filters( 'rt_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
		) ) );
}
endif;
add_action( 'after_setup_theme', 'rt_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rt_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'rt_content_width', 640 );
}
add_action( 'after_setup_theme', 'rt_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rt_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'rt' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'rt' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		) );
}
add_action( 'widgets_init', 'rt_widgets_init' );

/* Debugging function */
if ( !function_exists( 'wp_print_r' ) ) {
	function wp_print_r( $args, $die = true ) {
		$echo = '<pre>' . print_r( $args, true ) . '</pre>';
		if ( $die ) die( $echo );
		else echo $echo;
	}
}
add_filter( 'private_title_format', 'myprefix_private_title_format' );
add_filter( 'protected_title_format', 'myprefix_private_title_format' );

function myprefix_private_title_format( $format ) {
    return '%s';
}

function my_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    ' . __( "To view this protected post, enter the password below:" ) . '
    <label for="' . $label . '">' . __( "Password:" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" /><input type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '" />
    </form>
    ';
    return $o;
}
add_filter( 'the_password_form', 'my_password_form' );

/**
 * Enqueue scripts and styles.
 */
function rt_scripts() {
	wp_enqueue_style( 'rt-style', get_stylesheet_uri() );
	wp_enqueue_script( 'rt-jquery', get_template_directory_uri() . '/js/vendor/jquery-3.0.0.min.js', array(), '3.0.0', true );
	wp_enqueue_script( 'rt-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '1', true );
	wp_enqueue_script( 'rt-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '1', true );
	wp_enqueue_script( 'rt-swiper', get_template_directory_uri() . '/js/vendor/swiper.jquery.min.js', array(), '3.3.1', true );
	wp_enqueue_script( 'rt-particles', get_template_directory_uri() . '/js/vendor/particles.jquery.min.js', array(), '1', true );
	wp_enqueue_script( 'rt-jribbble', get_template_directory_uri() . '/js/vendor/jribbble.min.js', array(), '1', true );
	wp_enqueue_script( 'rt-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rt_scripts' );

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );


require get_template_directory() . '/inc/social-nav.php';
/**
 * Implement the Custom Fields.
 */
require get_template_directory() . '/inc/custom-fields.php';

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
