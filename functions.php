<?php 
//get_sidebar(); // tänk get_header(); eller get_footer eller...
//dynamic_sidebar(); //tänk wp_nav_menu()

/* lägger till meny i admin */
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');


// register_nav_menu() Skippa område att placera valfri widget
register_sidebar(
    [
        'name' => 'sidebarHome',
        'description' => 'Demo av widget',
        'id' => 'sidebarHome',
        'before_widget' => ' '
    ]
); 

// register_nav_menu() Skippa område att placera valfri widget
register_sidebar(
    [
        'name' => 'kortOmOssWidget',
        'description' => 'Demo av widget igen',
        'id' => 'kortOmossWidget',
        'before_widget' => ' '
    ]
); 

register_sidebar(
    [
        'name' => 'kontaktWidget',
        'description' => 'Demo av widget 3',
        'id' => 'kontaktWidget',
        'before_widget' => ' '
    ]
); 

register_sidebar(
    [
        'name' => 'socialWidget',
        'description' => 'Demo av widget 4',
        'id' => 'socialWidget',
        'before_widget' => ' '
    ]
); 

register_sidebar(
    [
        'name' => 'labbLogoWidget',
        'description' => 'Demo av widget 5',
        'id' => 'labbLogoWidget',
        'before_widget' => ' '
    ]
); 

register_sidebar(
    [
        'name' => 'sokWidget',
        'description' => 'Demo av widget 6',
        'id' => 'sokWidget',
        'before_widget' => ' '
    ]
); 

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
