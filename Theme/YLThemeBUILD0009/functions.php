<?php

// Menus
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

// Setup

// Includes
include ( get_template_directory() . '/include/front/enqueue.php' );
include ( get_template_directory() . '/include/setup.php' );
include ( get_template_directory() . '/include/widgets.php' );
include ( get_template_directory() . '/include/excerpt.php' );

// Action & Filter hooks
add_action( 'wp_enqueue_scripts', 'yl_enqueue' );
add_action( 'after_setup_theme', 'yl_setup_theme' );
add_action( 'widgets_init', 'yl_widgets' );

add_filter('excerpt_length', 'yl_excerpt_length');

// Shortcodes


?>
