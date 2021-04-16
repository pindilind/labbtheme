<?php 
//get_sidebar(); // tänk get_header(); eller get_footer eller...
//dynamic_sidebar(); //tänk wp_nav_menu()

/* lägger till meny i admin */
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');


//Sidebar på bloggsidan
register_sidebar(
    [
        'name' => 'sidebarHome',
        'description' => 'Demo av widget',
        'id' => 'sidebarHome',
        'before_widget' => ' ',
        
    ]
); 

//Kort om oss widget footer
register_sidebar(
    [
        'name' => 'kortOmOssWidget',
        'description' => 'Demo av widget igen',
        'id' => 'kortOmossWidget',
        'before_widget' => ' '
    ]
); 

//kontakt widget i footer
register_sidebar(
    [
        'name' => 'kontaktWidget',
        'description' => 'Demo av widget 3',
        'id' => 'kontaktWidget',
        'before_widget' => ' '
    ]
); 

//Sociala medier widget, footer
register_sidebar(
    [
        'name' => 'socialWidget',
        'description' => 'Demo av widget 4',
        'id' => 'socialWidget',
        'before_widget' => ' '
    ]
); 



//kontaktformulär på kontaktsida
register_sidebar(
    [
        'name' => 'mejl Widget',
        'description' => 'Demo av widget 6',
        'id' => 'mejlWidget',
        'before_widget' => ' '
    ]
); 

//sidebar på undersida 
register_sidebar(
    [
        'name' => 'undersida',
        'description' => 'Demo av widget 6',
        'id' => 'undersida',
        'before_widget' => '  ',
        'after_widget' => '  '
    ]
); 


register_sidebar(
    [
        'name' => 'arkiv Widget',
        'description' => 'arkiv på sidebaren',
        'id' => 'arkivwidget',
        'before_widget' => ' '
    ]
);

register_sidebar(
    [
        'name' => 'kategori Widget',
        'description' => 'arkiv på sidebaren',
        'id' => 'kategoriwidget',
        'before_widget' => ' '
    ]
);


/* lägger till CSS-filer, JS-filer*/
/* add_action('wp_enqueue_scripts', 'min_css_och_js_function');
function min_css_och_js_function() { */
  /*  wp_enqueue_style('bootStil', get_template_directory_uri(). './css/bootstrap.css');
    wp_enqueue_style('fontStil', get_template_directory_uri(). './css/font-awesome.css');
    wp_enqueue_style('temaStil', get_template_directory_uri(). './css/style.css');  */
    
/* } */

/* gör att man kan välja vart man vill lägga menyn */
add_action('after_setup_theme', 'registrera_meny');
function registrera_meny() {
    register_nav_menu('footermeny', 'Meny placerad i footer');
    register_nav_menu('bloggmeny', 'Blogg sido meny');
}

?>