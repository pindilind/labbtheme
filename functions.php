<?php 
/* lägger till meny i admin */
add_theme_support('post-thumbnails');
add_theme_support('menus');

/* lägger till CSS-filer, JS-filer*/
add_action('wp_enqueue_scripts', 'min_css_och_js_function');
function min_css_och_js_function() {
    wp_enqueue_style('bootStil', get_template_directory_uri(). '/bootstrap.css');
    wp_enqueue_style('fontStil', get_template_directory_uri(). '/font-awesome.css');
    wp_enqueue_style('temaStil', get_template_directory_uri(). '/style.css');
}

/* gör att man kan välja vart man vill lägga menyn */
add_action('after_setup_theme', 'registrera_meny');
function registrera_meny() {
    register_nav_menu('footermeny', 'Meny placerad i footer');
}

?>