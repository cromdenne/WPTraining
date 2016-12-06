<?php
    
    // Add scripts and stylesheets
    function janus_scripts() {
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7');
        wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.7', true );
    }

    add_action( 'wp_enqueue_scripts', 'janus_scripts' );

    // Add Google Fonts
    function janus_google_fonts() {
        wp_register_style( 'OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
        wp_enqueue_style( 'OpenSans' );
    }

    add_action( 'wp_print_styles', 'janus_google_fonts' );

    // WordPress titles
    add_theme_support( 'title-tag' );

?>