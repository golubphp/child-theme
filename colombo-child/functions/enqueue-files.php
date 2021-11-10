<?php

/*  CSS I JAVASCRIPT */

function theme_register_scripts() {

	wp_register_style('add_bootstrap',get_stylesheet_directory_uri().'/assets/bootstrap-4.2.1/css/bootstrap.min.css');
	wp_enqueue_style('add_bootstrap');
	
	wp_register_script('add_jQuery',get_stylesheet_directory_uri().'/assets/jQuery/jquery-3.3.1.min.js');
	wp_enqueue_script('add_jQuery');
	
	wp_register_script('add_bootstrap_js',get_stylesheet_directory_uri().'/assets/bootstrap-4.2.1/js/bootstrap.min.js');
	wp_enqueue_script('add_bootstrap_js');
 
}
add_action( 'wp_enqueue_scripts', 'theme_register_scripts', 1 );

?>