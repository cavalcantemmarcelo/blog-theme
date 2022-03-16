<?php 

// configura menus
function register_header_menu() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu'),
            'extra-menu' => __( 'Extra Menu')
        )
    );
}

// adiciona menus
add_action( 'init', 'register_header_menu');

// habilita imagem destacada
add_theme_support('post-thumbnails'); 

// altera o tamanho das imagens destacadas
set_post_thumbnail_size(300, 150, true);

// adiciona um novo formato de imagem destaca
add_image_size('imagem_horizontal', 600, 200, true);

// habilita widgets
add_theme_support('widgets'); 


// Adiciona tipo de conteúdo customizado
function createPortfolio() {

    // usadas no painel do wordpress
    $labels  = [
        "name" => __("Portfólio"),
        "singular_name" => __("Item"),
        "menu_name" => __("Portfólio"),
        "all_itmes" => __("Todos os itens"),
    ];

    // parametros custom post type
    $args = [
        "label" => __("Portfolio"),
        "labels" => $labels,
        "description" => "Meu portfólio",
        "show_in_menu" => true,
        "public" => true,
        "has_archive" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "hierarchical" => false,
        "rewrite" => [
                "slug" => "portfolio", 
                "with_front" => true
        ],
        "menu_icon" => "dashicons-text-page",
        "supports" => [
            "title", 
            "editor", 
            "thumbnail", 
            // "excerpt", 
            // "comments", 
            // "revisions", 
            // "author", 
            "page-attributes",
            "post-formats"
        ]

    ];

    // nome oficial do tipo de conteúdo registrado
    register_post_type("portfolio", $args);
}

add_action("init", "createPortfolio");