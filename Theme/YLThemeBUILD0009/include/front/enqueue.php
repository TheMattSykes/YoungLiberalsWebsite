<?php

function yl_enqueue() {

    // Styles
    wp_register_style( 'yl_theme' , get_template_directory_uri() . '/style.css');
    wp_register_style( 'yl_header' , get_template_directory_uri() . '/css/header.css');
    wp_register_style( 'yl_posts' , get_template_directory_uri() . '/css/postsPage.css');
    wp_register_style( 'yl_front' , get_template_directory_uri() . '/css/front-page.css');
    wp_register_style( 'yl_pages' , get_template_directory_uri() . '/css/pages.css');
    wp_register_style( 'yl_footer' , get_template_directory_uri() . '/css/footer.css');


    wp_enqueue_style( 'yl_theme' );
    wp_enqueue_style( 'yl_header' );
    wp_enqueue_style( 'yl_footer' );

    //if (is_single()) {
      wp_enqueue_style( 'yl_posts' );
    //}

    if (is_page()) {
      wp_enqueue_style( 'yl_pages' );
    }

    // Apply front page CSS only to homepage
    if (is_front_page()) {
      wp_enqueue_style( 'yl_front' );
    }

    // Scripts
    // Do not override Wordpress versions of jQuery
    // wp_enqueue_script( 'jquery' ); // Uncomment this if using jquery at any point

    wp_register_script( 'yl_navScript' , get_template_directory_uri() . '/scripts/navMenu.js', array(), false, true);
    wp_enqueue_script( 'yl_navScript' );

}

?>
