<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
	  wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'footer', __( 'Footer Menu', 'saylor' ) );
  register_nav_menu( 'footer2', __( 'Footer Menu 2', 'saylor' ) );
}

function saylorstrap_widgets_init() {
  register_sidebar( array(
    'name'          => 'Top Container',
    'id'            => 'top-container',
    'description'   => 'Top widget container',
      'before_widget'  => '<div id="%1$s" class="top-widget card-body %2$s">', 
      'after_widget'   => '</div>', 
      'before_title'   => '<h3 class="widget-title">', 
      'after_title'    => '</h3>'
  ) );
}
add_action( 'widgets_init', 'saylorstrap_widgets_init');

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1200, 630, true );

function get_excerpt($count, $post_id){
  $permalink = get_permalink($post_id);
  $excerpt = get_post($post_id);
  $excerpt = $excerpt->post_content;
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, $count);
  $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
  $excerpt = $excerpt;
  // Want a read more link and ellipsis, remove the line above this and replace it with the one below.
  $excerpt = $excerpt.'... <a href="'.$permalink.'">Read more</a>';
  return $excerpt;
}

add_theme_support( 'yoast-seo-breadcrumbs' );
