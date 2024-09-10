<?php

function my_theme_enqueue_styles() {
    wp_enqueue_style('main_style_sheet', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('supporting_style_sheet', get_theme_file_uri('/build/index.css'));
    wp_enqueue_style('custom_google_fonts','fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

    wp_enqueue_script('main_script', get_theme_file_uri('/build/index.js'), array('jquery'), 1.0, true);
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


function site_title() {
    register_nav_menu('headerMenu', 'Header Menu');
    register_nav_menu('footerMenuOne', 'Footer 1 Menu');
    register_nav_menu('footerMenuTwo', 'Footer 2 Menu');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'site_title');