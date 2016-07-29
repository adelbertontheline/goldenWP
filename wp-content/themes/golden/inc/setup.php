<?php

if ( ! function_exists( 'golden_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function golden_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Golden Theme, use a find and replace
	 * to change 'golden' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'golden', get_template_directory() . '/languages' );

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
	function post_thumbnail_setup() {
		add_theme_support('post-thumbnails');
		add_image_size('portfolio-thumbnail', 291, 301, true);
		// add_image_size('banner-thumbnail', '100%', '100%', true);
	}

	add_action('init', 'post_thumbnail_setup');
	// add_theme_support( 'post-thumbnails' );

	add_theme_support('post-formats', array('aside', 'image', 'video', 'gallery', 'link'));

	// This theme uses wp_nav_menu() in one location.
	/*register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'golden' ),
	) );*/

	function my_theme_setup() {
		add_theme_support('menus');
		register_nav_menu('primaryMenu', 'Primary Menu Links');
		register_nav_menu('footerMenu', 'Footer Menu Links');
	}

	add_action('init', 'my_theme_setup');

	function my_excerpt_length() {
		return 25;
	}

	add_filter('excerpt_length', 'my_excerpt_length');

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
	add_theme_support( 'custom-background', apply_filters( 'golden_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'golden_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function golden_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'golden_content_width', 640 );
}
add_action( 'after_setup_theme', 'golden_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function golden_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'golden' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'golden' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'golden_widgets_init' );




function my_custom_post_type() {
	$labels = array (
		'name' => 'Portfo',
		'singula_name' => 'Portfo',
		'add_new' => 'Add Portfo',
		'all_items' => 'All Items',
		'add_new_item' => 'Add Item',
		'edit_item' => 'Edit Item',
		'new_item' => 'New Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Portfo',
		'not_found' => 'No items found',
		'not_found_in_trash' => 'No items found in trash',
		'parent_item_colon' => 'Parent Item'
	);

	$args = array (
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'public_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array (
			'title',
			'excerpt',
			'editor',
			'thumbnail',
			'revisions',
		),
			'taxonomies' => array ('category', 'post_tag'),
			'menu_position' => 5,
			'exclude_from_search' => false
	);
	register_post_type('portfo', $args);
}

add_action('init', 'my_custom_post_type');



?>