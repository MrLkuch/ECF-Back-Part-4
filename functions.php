<?php

function my_theme_enqueue_styles() {
    wp_enqueue_style( 'my-theme-main', get_stylesheet_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

register_nav_menus([
    'main-menu' => 'Menu principal',
]);

add_theme_support( 'html5' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

function my_theme_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'my_theme_excerpt_length', 999 );

function my_theme_excerpt_more( $more ) {
    return '&hellip;';
}
add_filter( 'excerpt_more', 'my_theme_excerpt_more' );

function my_theme_add_image_size() {
    add_image_size( 'my-thumbnail',  150, 150, ['center', 'center'] );
    add_image_size( 'my-medium',  300, 300 );
    add_image_size( 'my-medium_large',  768, 0 );
    add_image_size( 'my-large',  1024, 1024 );
}
add_action( 'after_setup_theme', 'my_theme_add_image_size' );

function my_theme_image_size_names_choose($sizes) {
    return array_merge( $sizes, [
        'my-thumbnail' => __( 'Taille des miniatures' ),
        'my-medium' => __( 'Taille moyenne' ),
        'my-medium-large' => __( 'Taille moyenne large' ),
        'my-large' => __( 'Grande taille' ),
    ]);
}
add_filter( 'image_size_names_choose', 'my_theme_image_size_names_choose' );

?>