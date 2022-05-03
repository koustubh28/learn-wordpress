<?php
/**
 * Plugin Name: Single Post CTA
 * Plugin URI: https://github.com/cdils/single-post-cta
 * Description: Adds Sidebar (widget area) to single posts
 * Version: 0.1
 * Author: Carrie Dills
 * Author URI: https://carriedils.com
 * License: GPL v2+
 * Text Domain: spc
 */

 //If this file is called directly, abort the operation
 if (!defined( 'ABSPATH' )) {
     die;
 }

 //Load stylesheet
 function spc_load_stylesheet() {
     if (apply_filters( 'spc_load_styles', true )) {
        if ( is_single() ) {
            wp_enqueue_style( 'spc_stylesheet', plugin_dir_url(__FILE__) . 'spc-styles.css');
         }    
     }
 }

 //Uncomment this file to disable styles
 //add_filter( 'spc_load_styles', __return_false);

 //Hook stylesheet
 add_action( 'wp_enqueue_scripts', 'spc_load_stylesheet');

 //Register a custom sidebar
 function spc_register_sidebar() {
     register_sidebar(array(
        'name' => __( 'Single Post CTA', 'spc' ),
        'id' => 'spc-sidebar',
        'description' => __('Displays widget area on single posts', 's'),
        'before_widget' => '<div class="widget spc">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle spc-title">',
        'after_title' => '</h2>'
    ));
 }

 //Hook sidebar
 add_action( 'widgets_init', 'spc_register_sidebar' );

 //Display sidebar on single posts
 function spc_display_sidebar( $content ) {
     if ( is_single() ) {
        dynamic_sidebar( 'spc-sidebar' );
     }
     return $content;
 }

 add_filter( 'the_content', 'spc_display_sidebar');
