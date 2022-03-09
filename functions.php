<?php 

function register_header_menu() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu'),
            'extra-menu' => __( 'Extra Menu')
        )
    );
}

add_action( 'init', 'register_header_menu');