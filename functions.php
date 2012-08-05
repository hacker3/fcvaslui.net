<?php

/* Custom code goes below this line. */

/* Define constants */
define("THEME_DIR", get_template_directory_uri());

add_action( 'after_setup_theme', 'zenframework_theme_setup' );

if ( ! function_exists( 'zenframework_theme_setup' ) ):
// Sets up theme defaults and registers support for various WordPress features.
// Note that this function is hooked into the after_setup_theme hook, which runs
// before the init hook. The init hook is too late for some features, such as indicating
// support post thumbnails
	function zenframework_theme_setup() {
		/* Add filters, actions, and theme-supported features. */
		/* Add theme-supported features. */
			add_theme_support( 'automatic-feed-links' );
			/* Add theme support for post thumbnails (featured images). */
			add_theme_support( 'post-thumbnails' );
			/* Add theme support for custom backgrounds. */
			//add_custom_background();
		/* Add your nav menus function to the 'init' action hook. */
			add_action( 'init', 'zenframework_register_menus' );
		/* Add support for post formats */
			// add_theme_support('post-formats', array( 'aside', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video', 'audio'));
		/* Add your sidebars function to the 'widgets_init' action hook. */
			add_action( 'widgets_init', 'zenframework_register_sidebars' );
		/* Load Javascript and CSS files on the 'wp_enqueue_scripts' action hook. */
			add_action( 'wp_enqueue_scripts', 'zenframework_load_styles' );
			add_action( 'wp_enqueue_scripts', 'zenframework_load_scripts' );
		/* Print Javascript and CSS files on the 'wp_print_styles' action hook. */
		/* Add custom filters. */
			//add_filter( 'the_content', '' );
	}
endif;

get_template_part( 'zenframework_custom-post-types' );
get_template_part( 'zenframework_metaboxes' );
get_template_part( 'zenframework_shortcodes' );

if ( ! function_exists( 'zenframework_register_menus' ) ):
// Register menu locations
	function zenframework_register_menus() {
		if ( function_exists( 'register_nav_menus' ) ):
			register_nav_menus( array(
				'primary' => 'Primary Navigation',
				'secondary' => 'Secondary Navigation',
			) );
		endif;
	}
endif;

if ( ! function_exists( 'zenframework_register_sidebars' ) ):
	function zenframework_register_sidebars() {
		register_sidebar( array(
			'name' => 'Primary Widget Area',
			'id' => 'primary-widget-area',
			'description' => 'The primary widget area',
			'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h6 class="widget-title">',
			'after_title' => '</h6>',
		) );
	}
endif;

function zenframework_load_styles() {
	//mobile.css for all devices
	wp_register_style (
		'default', //handle
		'/wp-content/themes/fcvaslui/css/style.css', //source
		null, //no dependencies
		'1.0.0' //version
	);
	if ( !is_admin() ):
		wp_enqueue_style('default');
	endif; //!is_admin
}

function zenframework_load_scripts() {
	// regs
	wp_register_script('easy-slides',  get_stylesheet_directory_uri() . '/js/easySlider1.7.js', array( 'jquery' ));


	// loads
	wp_enqueue_script('easy-slides');
}

add_filter('widget_text', 'do_shortcode');

/* Custom code goes above this line. */