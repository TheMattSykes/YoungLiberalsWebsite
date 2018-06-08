<?php

// Menus
add_theme_support( 'menus' );

// Setup


// Includes
include ( get_template_directory() . '/include/front/enqueue.php' );
include ( get_template_directory() . '/include/setup.php' );
include ( get_template_directory() . '/include/widgets.php' );

// Action & Filter hooks
add_action( 'wp_enqueue_scripts', 'yl_enqueue' );
add_action( 'after_setup_theme', 'yl_setup_theme' );
add_action( 'widgets_init', 'yl_widgets' );

// Shortcodes


?>