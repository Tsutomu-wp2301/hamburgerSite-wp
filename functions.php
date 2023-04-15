<?php 
  add_theme_support('menus');



function add_files(){
    wp_enqueue_style('my_style', get_template_directory_uri().'/css/style.css');
    wp_enqueue_script('fadeIn_script', get_template_directory_uri().'/JS/fadeIm.js');
    wp_enqueue_script('fadeOut_script', get_template_directory_uri().'/JS/fadeOut.js');
    wp_enqueue_script('toggle_class_close_script', get_template_directory_uri().'/JS/toggle-class--close.js');
    wp_enqueue_script('toggle_class_open_script', get_template_directory_uri().'/JS/toggle-class--open.js');
}
add_action('wp_enqueue_scripts', 'add_files');




