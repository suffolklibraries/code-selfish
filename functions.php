<?php

// Enqueue main.css and get Source Sans Pro from Google
function cs_styles() {

    $main_style = 'main-style';
    $pure_styles = 'pure-styles';
    wp_enqueue_style( $main_style, get_template_directory_uri() . '/main.css' );
    wp_enqueue_script( 'source-sans-pro', get_stylesheet_directory_uri() . '/js/fonts.js', array(), '1.0.0', true );
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

	if ( 'home' == $args->theme_location && $item->description ) {

		$item_output = str_replace( $args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );

	}

	return $item_output;
}

add_filter( 'walker_nav_menu_start_el', 'cs_nav_description', 10, 4 );


?>
