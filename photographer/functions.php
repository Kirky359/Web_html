<?php
/**
 * photographer functions and definitions
 *
 * @package photographer
 */


if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

function photographer_setup() {
	load_theme_textdomain( 'photographer', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary Menu', 'photographer' ),
		)
	);

	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' )
	);

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
add_action( 'after_setup_theme', 'photographer_setup' );

function photographer_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'photographer_content_width', 640 );
}
add_action( 'after_setup_theme', 'photographer_content_width', 0 );

function photographer_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'photographer' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'photographer' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'photographer_widgets_init' );

function photographer_enqueue_assets() {
	wp_enqueue_style( 'photographer-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'photographer-app-style', get_template_directory_uri() . '/app.css', array(), _S_VERSION );
	wp_enqueue_style( 'ionicons', 'https://cdnjs.cloudflare.com/ajax/libs/ionicons/6.0.2/collection/components/icon/icon.min.css', array(), '6.0.2' );
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap', array(), null );

	wp_enqueue_script( 'ionicons', 'https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js', array(), null, true );
	wp_enqueue_script( 'photographer-app-js', get_template_directory_uri() . '/js/app.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'pricing-page-js', get_template_directory_uri() . '/js/pricing.js',array('jquery'), _S_VERSION, true );
   
}
add_action( 'wp_enqueue_scripts', 'photographer_enqueue_assets' );



require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';


if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



