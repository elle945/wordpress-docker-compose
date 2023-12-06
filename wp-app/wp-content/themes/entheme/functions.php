<?php
function entheme_styles(){
    //versionen specifieras i style.css
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('entheme-style',
    get_template_directory_uri() . "/style.css",
    array(), $version, 'all');
   }
   add_action('wp_enqueue_scripts', 'entheme_styles');

   function entheme_scripts(){
    //versionen specifieras i style.css
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), $version, true);
     wp_enqueue_script('custom', get_template_directory_uri() . "/js/custom.js", array('jquery', 'bootstrap'), $version, true);
    wp_enqueue_script('entheme-custom_script',
    get_template_directory_uri() . "/assets/js/script.js",
    array(), $version, true);
   }
   add_action('wp_enqueue_scripts', 'entheme_scripts');

   function entheme_menus(){
    $locations = array(
    'primary' => 'Navbar second',
    'sidemenu' => 'Side menu'
    );
    register_nav_menus($locations);
   }
   add_action('init', 'entheme_menus' );

   function entheme_theme_support(){ 
    add_theme_support( 'post-thumbnails' ); 
  } 
  add_action("after_setup_theme" , "entheme_theme_support" );


  function entheme_register_sidebars() {
    register_sidebar( array(
    'name' => 'adress widget',
    'id' => 'adress-widget',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>'
   
    ) );
   }
   add_action( 'widgets_init', 'entheme_register_sidebars' );

   // Registrera en ny Widget Area för sociala medier
function entheme_register_social_media_widget_area() {
  register_sidebar( array(
    'name' => 'Social Media Icons',
    'id' => 'social-media-icons',
    'description' => 'Widget Area for Social Media Icons',
    'before_widget' => '<div class="social-media-widget">',
    'after_widget' => '</div>',
    'before_title' => '',
    'after_title' => '',
  ) );
}
add_action( 'widgets_init', 'entheme_register_social_media_widget_area' );

