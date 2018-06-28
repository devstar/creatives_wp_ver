<?php

add_theme_support( 'post-thumbnails' );

add_image_size('news', 674.5, 450, true);
add_image_size('member', 270, 414, true);
add_image_size('aboutus', 270, 280, true);
add_image_size('mobile', 320, 650, false);

if( !defined('ASSETS_URL') ) {
	define('ASSETS_URL', get_bloginfo('template_url'));
}

function theme_scripts(){

    if ( !is_admin() ) {

        wp_deregister_script('jquery');
		wp_register_script('jquery', ASSETS_URL . '/assets/scripts/jquery-1.12.4.min.js', false, '2.2.4', true);
        wp_register_script('custom', ASSETS_URL . '/assets/scripts/custom.js', array('jquery'), '1.0', true);
        wp_register_script('gmaps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyD7KeR1S1OF9Db_bxMGDwLI0NAPi5-FBIU&callback=initMap', array('jquery'), '1.0', true);
        wp_enqueue_script('custom');
	    wp_enqueue_script('gmaps');
    }
}
add_action('wp_enqueue_scripts', 'theme_scripts');

function theme_stylesheets(){

	$styles_path = ASSETS_URL . '/assets/css/main.css';

	if( $styles_path ) {

		wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,500,700|Open+Sans:300,400,700|PT+Sans|Roboto|Roboto+Condensed:700&amp;subset=latin-ext', array(), false, 'all');
		wp_register_style('font-awesome', ASSETS_URL . '/assets/css/font-awesome.min.css', array(), false, 'all');
		wp_register_style('main-css', ASSETS_URL . '/assets/css/main.css', array(), false, 'all');
		wp_enqueue_style('google-fonts');
		wp_enqueue_style('font-awesome');
		wp_enqueue_style('main-css');
	}
}
add_action('wp_enqueue_scripts', 'theme_stylesheets');

// Apibrėžiame navigacijas


if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

function register_theme_menus() {
   
	register_nav_menus(array( 
        'primary-navigation' => __( 'Primary Navigation' )
    ));
}
add_action( 'init', 'register_theme_menus' );




?>