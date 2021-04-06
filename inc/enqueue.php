<?php
/*
    ===================
        FRONT-END ENQUEUE FUNCTIONS  
    ===================
*/
function tds_load_scripts()
{
    $version = wp_get_theme()->get('Version');

    // Style css
    wp_enqueue_style('standards_style', get_template_directory_uri().'/style.css', array(), $version, 'all'); 
    wp_enqueue_style('standards_bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all'); 
    wp_enqueue_style('standards_fontawesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all');

    // Script js
    wp_enqueue_script('standards_jquery','https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true); 
    wp_enqueue_script('standards_holder', get_template_directory_uri().'/assets/js/holder.js', array(), '2.9.4', true);
    wp_enqueue_script('standards_script', get_template_directory_uri().'/assets/js/main.js', array(), $version, true); 
    wp_enqueue_script('standards_popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '5.13.0', true);
    wp_enqueue_script('standards_bootstrapcdn','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
    
}
add_action('wp_enqueue_scripts', 'tds_load_scripts');