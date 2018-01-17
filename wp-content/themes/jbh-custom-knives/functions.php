<?php 
//custom image sizes
//				( Name, Width, Height, Will it crop ); 
add_image_size( 'banner', 1000, 500, true );
add_image_size( 'large_thumbnail', 300, 300, true );

// VVVV Support Featured Images VVVV 
add_theme_support( 'post-thumbnails' );

// VVVV Upgrade and HTML output to HTML5 VVVV 
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

// VVVV Delete the <title></title> tag from the header, then add this function VVVV 
add_theme_support( 'title-tag' );


//Custom Header - adds the custom header background image
$args = array(
	'width' => 1000,
	'height' => 600,
	'flex-width' => true,
	'flex-height' => true,

);
add_theme_support( 'custom-header', $args );

//Custom Logo - adds the custom logo option
$args = array(
	'width' => 200,
	'height' => 200,
	'flex-width' => true,
	'flex-height' => true,

);
add_theme_support( 'custom-logo', $args );

/**
 * Set up 3 menu locations
 * @since  0.1 added the function
 * @
 */
add_action( 'init', 'jbh_menu_locations' );
function jbh_menu_locations(){
	register_nav_menus( array(
		'main_menu' => 'Main Menu',
		'social_icons' => 'Social Media Icons',
		'footer_nav' => 'Footer Menu',
	) );
}

/**
 * enqueue all stylesheets or Javascript
 */
add_action( 'wp_enqueue_scripts', 'jbh_scripts' );
function jbh_scripts() {
	//style.css
	wp_enqueue_style( 'jbh-style', get_stylesheet_uri() );
}

/**
 * Register the widget areas (dynamic sidebars)
 */
add_action( 'widgets_init', 'cmw_widget_areas' );

function cmw_widget_areas(){
	register_sidebar( array(
		'name' 			=> 'Blog Sidebar',
		'id' 			=> 'blog_sidebar',
		'description' 	=> 'Appears alongside the Blog and archive pages',
		'before_widget' => '<section class="widget %2$s" id="%1$s" >',
		'after_widget' 	=> '</section>',
		'before_title' 	=> '<h3 class="widget-title" >',
		'after_title' 	=> '</h3>',
	) );
	register_sidebar( array(
		'name' 			=> 'Footer Area',
		'id' 			=> 'footer_area',
		'description' 	=> 'Appears at the bottom of every screen/page',
		'before_widget' => '<section class="widget %2$s" id="%1$s" >',
		'after_widget' 	=> '</section>',
		'before_title' 	=> '<h3 class="widget-title" >',
		'after_title' 	=> '</h3>',
	) );
	register_sidebar( array(
		'name' 			=> 'Home Area',
		'id' 			=> 'home_area',
		'description' 	=> 'Appears at the bottom of every screen/page',
		'before_widget' => '<section class="widget %2$s" id="%1$s" >',
		'after_widget' 	=> '</section>',
		'before_title' 	=> '<h3 class="widget-title" >',
		'after_title' 	=> '</h3>',
	) );
	register_sidebar( array(
		'name' 			=> 'Shop Sidebar',
		'id' 			=> 'shop_sidebar',
		'description' 	=> 'Appears on all WOOcommerce pages',
		'before_widget' => '<section class="widget %2$s" id="%1$s" >',
		'after_widget' 	=> '</section>',
		'before_title' 	=> '<h3 class="widget-title" >',
		'after_title' 	=> '</h3>',
	) );
}



//no close php