<?php

function load_stylesheets()
{
    wp_register_style('main', get_template_directory_uri().'/assets/css/main.css',array(),1,'all');
    wp_enqueue_style('main');

    wp_register_style('noscript', get_template_directory_uri().'/assets/css/noscript.css',array(),1,'all');
    wp_enqueue_style('noscript');

    
    
}

add_action('wp_enqueue_scripts','load_stylesheets');


// Load Scripts

function addjs()
{
    wp_deregister_script('jquery') ;

    wp_register_script('jquery',get_template_directory_uri() . '/assets/js/jquery.min.js',array(),1,1,1);
    wp_enqueue_script('jquery');

    wp_register_script('scrollex',get_template_directory_uri() . '/assets/js/jquery.scrollex.min.js',array(),1,1,1);
    wp_enqueue_script('scrollex');

    wp_register_script('scrolly',get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js',array(),1,1,1);
    wp_enqueue_script('scrolly');

    wp_register_script('browser',get_template_directory_uri() . '/assets/js/browser.min.js',array(),1,1,1);
    wp_enqueue_script('browser');

    wp_register_script('breakpoints',get_template_directory_uri() . '/assets/js/breakpoints.min.js',array(),1,1,1);
    wp_enqueue_script('breakpoints');

    wp_register_script('util',get_template_directory_uri() . '/assets/js/util.js',array(),1,1,1);
    wp_enqueue_script('util');

    wp_register_script('main',get_template_directory_uri() . '/assets/js/main.js',array(),1,1,1);
    wp_enqueue_script('main');


}
add_action('wp_enqueue_scripts', 'addjs');
























