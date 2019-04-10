<?php
/*
    Functions Template
*/

// add theme support:featured images
add_theme_support('post-thumbnails');
set_post_thumbnail_size('676', '200', true); // false = no crop
add_image_size('featured', 676, 200, true);

// add theme support:custom post formats
add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

// add theme support:custom headers
add_theme_support('custom-header');

// add theme support:custom backgrounds
add_theme_support('custom-background');

// add theme support:nav menus
add_theme_support('menus');
// menu registration
function myMenus_register_menus(){
    register_nav_menus(array(
      'menu-main' => __('Main Menu', "Maxs' Theme"),
      'menu-footer' => __('Footer Menu', "Maxs' Theme"),
    ));
}
add_action('after_setup_theme', 'myMenus_register_menus');



// enable single-column dashboard (1 of 2)
function shapeSpace_screen_layout_columns($columns) {
  $columns['dashboard'] = 2;
   return $columns; }
   add_filter('screen_layout_columns', 'shapeSpace_screen_layout_columns');
// enable single-column dashboard (2 of 2)
function shapeSpace_screen_layout_dashboard() {
  return 1;
}
  add_filter('get_user_option_screen_layout_dashboard', 'shapeSpace_screen_ layout_dashboard');

// add theme support: HTML5 markup
add_theme_support('html5', array('searchform', 'comments-form', 'comment-list', 'gallery', 'caption' ));

//Function for lowering the excerpt word count
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Custom CSS
function customStyle_enqueue_style(){
    $url = get_stylesheet_directory_uri() . '/css/milli.css';
    wp_enqueue_style('milligram', $url,  array(), rand(111,9999));
    // array & rand() are fixes for updating the css on reload
}
add_action('wp_enqueue_scripts', 'customStyle_enqueue_style');

// Custom JS
function js_enqueue_script(){
  $url = get_template_directory_uri() . '/js/scripts.js';
  wp_enqueue_script('scripts', $url, array('jquery'), date("h:i:s"), true );

  $url_canvas = get_template_directory_uri() . '/js/canvas.js';
  wp_enqueue_script('canvas', $url_canvas, array('jquery'), null, true);

  $url_jquery = get_template_directory_uri() . '/js/jquery.js';
  wp_enqueue_script('jquery', $url_jquery, array('jquery'), null, false);
}
add_action('wp_enqueue_scripts', 'js_enqueue_script');


wp_register_script('jquery', ('http://ajax.googleapis.com/ ajax/libs/jquery/3.3.1/jquery.min.js'), false, null);
wp_enqueue_script('jquery');


//Google Fonts
function google_fonts(){
  echo "<link href='https://fonts.googleapis.com/css?family=Montserrat|Karla' rel='stylesheet'>";
}
add_filter('wp_head', 'google_fonts');
