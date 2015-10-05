<?php

// Enqueue main.css and get Source Sans Pro from Google

function cs_styles() {

    $main_style = 'main-style';
    wp_enqueue_style( $main_style, get_template_directory_uri() . '/main.css' );
    wp_enqueue_script( 'source-sans-pro', get_stylesheet_directory_uri() . '/js/fonts.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'cs_styles' );


//Enable custom images

add_theme_support( 'post-thumbnails' );


// Enable page excerpts

function my_add_excerpts_to_pages() {

     add_post_type_support('page', 'excerpt');
}

add_action('init', 'my_add_excerpts_to_pages');


?>
