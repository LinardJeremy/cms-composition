<?php
add_theme_support( 'menus' );
register_nav_menu('header',"tete du menu");

function montheme_register_assets(){
    wp_register_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap');
};
function montheme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
}


function montheme_title($title){
    return "Composition";

}
function montheme_menu_class($classes){
    $classes[] = 'nav-item';
    return $classes;
}


add_action('wp_enqueue_scripts','montheme_register_assets');
add_action('after_setup_them','montheme_support');
add_filter('wp_title','montheme_title');
add_filter('nav_menu_css_class','montheme_menu_class');
add_filter('nav_menu_link_attributes','montheme_menu_class');



?>