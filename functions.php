<?php

function wp_dev_theme_support(){
    
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('comment-form', 'search-form', 'comment-list', 'caption', 'gallery'));

    register_nav_menu('wpdev', 'Top menu');

}
add_action('after_setup_theme', 'wp_dev_theme_support');

//get_theme_file_uri('something.css') //4.8
//get_template_directory_uri().'something.css' //version 4.7

function wp_style_load(){
    wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style('something', get_theme_file_uri('something.css'), time());

    //Default Style CSS Load
    wp_enqueue_style('wpdev-style', get_stylesheet_uri(), time());
}
add_action('wp_enqueue_scripts', 'wp_style_load');