<?php

function tds_theme_menus(){
    $locations = array(
        'primary' => 'Header Menu Items',
        'footer' => 'Footer Menu Items'
    );
    
    register_nav_menus($locations);
}

add_action('init', 'tds_theme_menus');