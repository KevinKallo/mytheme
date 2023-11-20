<?php 

function registerNav(){
    register_nav_menus([
        'main-nav' => __('Main Nav')
    ]);
}

add_action('init', 'registerNav');

function get_nav_items() {
    $menu_slug_to_retrieve = 'main-nav';
    $locations             = get_nav_menu_locations();
    $menu                  = wp_get_nav_menu_object($locations[ $menu_slug_to_retrieve ]);
    return wp_get_nav_menu_items( $menu->term_id );
}

wp_enqueue_style('mystyle', get_template_directory_uri() . '/mystyle.css');
wp_enqueue_script('myscript', get_template_directory_uri() . '/script.js');