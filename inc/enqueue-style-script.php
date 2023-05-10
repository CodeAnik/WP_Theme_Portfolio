<?php

// Enqueue styles and scripts
function portfolio_enqueue_scripts() {
    // Load Bootstrap CSS
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '5.0.0' );

    // Load custom CSS
    wp_enqueue_style( 'portfolio-custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0' );

    // Load Font Awesome
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/font/font-awesome/css/font-awesome.min.css', array(), '5.15.3' );

    // Enqueue jQuery
  wp_enqueue_script( 'jquery', get_template_directory_uri( ) . '/js/jquery.min.js', array(), '3.4.1', true );

  // Enqueue Bootstrap JS
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.4.1', true );
    // Load custom JS
    wp_enqueue_script( 'portfolio-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'portfolio_enqueue_scripts' );

//google font import
function import_google_fonts() {
    wp_enqueue_style( 'montserrat-font', 'https://fonts.googleapis.com/css?family=Montserrat&display=swap', array(), null );
}
add_action( 'wp_enqueue_scripts', 'import_google_fonts' );