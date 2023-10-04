<?php

function thiagoandradewp_scripts(){
    wp_enqueue_style('thiagoandradewp-css', get_stylesheet_directory_uri(). '/style.css');
    wp_enqueue_script( 'thiagoandradewp-js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), 1.1, true);  
}
add_action('wp_enqueue_scripts', 'thiagoandradewp_scripts');


function thiagoandradewp_setup(){
    //load_theme_textdomain( 'growth-store', get_template_directory() . '/languages' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'menu-icons' );
    //add_theme_support( 'woocommerce' );
    //add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
}
add_action('after_setup_theme', 'thiagoandradewp_setup');


