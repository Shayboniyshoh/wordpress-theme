<?php

function custom_theme_files(){
    wp_enqueue_script('theme_main_script', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('font-family', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('theme_main_style', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('theme_secondary_style', get_theme_file_uri('/build/index.css'));
}
add_action('wp_enqueue_scripts', 'custom_theme_files');

function custom_theme_features(){
    register_nav_menu('headMenuLoc', 'Header menu');
    register_nav_menu('footMenuLoc', 'Footer menu');
    register_nav_menu('quickMenuLoc', 'Quick links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats',  array( 'aside', 'gallery', 'quote', 'image', 'video' ));
}

add_action('after_setup_theme', 'custom_theme_features');