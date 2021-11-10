<?php
/*
Plugin Name: CSS Text Selector
Plugin URI:
Description: Colombo CSS Text Selector
Author: Marjan G.
Version: 1.0
Author URI: https://marjangolubovic.github.io/
*/

function mselector_enqueue_scripts () {
	
	wp_register_style('mselector-style',plugin_dir_url(__FILE__).'css/mselector.css');
	wp_enqueue_style('mselector-style');
	
}
add_action( 'wp_enqueue_scripts', 'mselector_enqueue_scripts' );


/* Add Custom Styles to the WordPress Visual Editor */

function add_style_select_buttons( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}

// Register our callback to the appropriate filter
add_filter( 'mce_buttons_2', 'add_style_select_buttons' );


/* Add custom styles to the WordPress editor */

function my_custom_styles( $init_array ) {  
 
    $style_formats = array(  
        // These are the custom styles

        array(  
            'title' => 'Highlighter',  
            'inline' => 'span',  
            'classes' => 'highlighter',

        ),
    );  
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode( $style_formats );  
    
    return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_custom_styles' );


/* see your styles in the editor when they are being applied */



add_theme_support( 'editor-styles' );
add_editor_style(plugin_dir_url(__FILE__).'my-editor-style.css');
//add_editor_style('my-editor-style.css');
//add_editor_style( get_template_directory_uri() .'custom_editor_styles.css');

?>