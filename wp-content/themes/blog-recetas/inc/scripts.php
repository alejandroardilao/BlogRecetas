<?php

function materialize_template_scripts()
{
    wp_enqueue_script('comment-reply');

    // Internet Explorer HTML5 support
    wp_enqueue_script( 'blog-recetas-html5',get_template_directory_uri() . '/js/html5.min.js', array(), null, false);
    wp_script_add_data( 'blog-recetas-html5', 'conditional', 'lt IE 9' );

    // Add materialize fonts
    wp_enqueue_style('blog-recetas-fonts', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), null);

    // Load materialize css
    wp_enqueue_style('blog-recetas-style', get_template_directory_uri() . '/css/materialize.min.css');

    // Load custom css
    wp_enqueue_style('blog-recetas-custom-style', get_template_directory_uri() . '/css/style.css');

    // Load materialize js
    wp_enqueue_script(
        'blog-recetas-script',
        get_template_directory_uri() . '/js/materialize.min.js',
        array('jquery'),
        null
    );

    // Load custom script
    wp_enqueue_script(
        'blog-recetas-custom-script',
        get_template_directory_uri() . '/js/custom.js',
        array('jquery'),
        null
    );
}

add_action( 'wp_enqueue_scripts', 'materialize_template_scripts' );