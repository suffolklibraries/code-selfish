<?php

// Enqueue main.css and get Source Sans Pro from Google
function cs_styles() {

    $main_style = 'main-style';
    $pure_styles = 'pure-styles';
    wp_enqueue_style( $main_style, get_template_directory_uri() . '/main.css' );
    wp_enqueue_script( 'source-sans-pro', get_stylesheet_directory_uri() . '/js/fonts.js', array(), '1.0.0', false );
}

add_action( 'wp_enqueue_scripts', 'cs_styles' );


//Enable custom images
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );


// Enable page excerpts
function cs_add_excerpts_to_pages() {

     add_post_type_support('page', 'excerpt');
}

add_action('init', 'cs_add_excerpts_to_pages');


// Add descriptions to navigation mcrypt_enc_get_supported_key_sizes
function cs_nav_description( $item_output, $item, $depth, $args ) {

	if ( 'tools-menu' == $args->theme_location && $item->description ) {

		$item_output = str_replace( $args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );

	}

	return $item_output;
}

add_filter( 'walker_nav_menu_start_el', 'cs_nav_description', 10, 4 );


// Add sidebars
function cs_widgets_init() {

	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar',
		'before_widget' => '<section class="nib-box bg bg-white">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1 class="nib-box-title">',
		'after_title'   => '</h1>',
	) );

    register_sidebar( array(
		'name'          => 'Footer area 1',
		'id'            => 'footer_area_one',
		'before_widget' => '<section class="nib-box>',
		'after_widget'  => '</section>',
		'before_title'  => '<h1 class="nib-box-title">',
		'after_title'   => '</h1>',
	) );

    register_sidebar( array(
		'name'          => 'Footer area 2',
		'id'            => 'footer_area_two',
		'before_widget' => '<section class="nib-box">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1 class="nib-box-title">',
		'after_title'   => '</h1>',
	) );

    register_sidebar( array(
		'name'          => 'Footer area 3',
		'id'            => 'footer_area_three',
		'before_widget' => '<section class="nib-box">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1 class="nib-box-title">',
		'after_title'   => '</h1>',
	) );

    register_sidebar( array(
		'name'          => 'Subnav menu',
		'id'            => 'subnav-menu',
		'before_widget' => '<nav class="subnav">',
		'after_widget'  => '</nav>',
		'before_title'  => '',
		'after_title'   => '',
	) );

add_action( 'widgets_init', 'cs_widgets_init' );


// Disable breadcrumb plugin

add_action( 'after_setup_theme', 'bct_theme_setup' );

function bct_theme_setup() {

    add_theme_support( 'breadcrumb-trail' );

}

?>
