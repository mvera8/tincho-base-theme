<?php
// functions.php

function cleanmax_cpt_servicios() {

    $labels = array(
        'name'                  => _x( 'Servicios', 'Post Type General Name', 'textdomain' ),
        'singular_name'         => _x( 'Servicio', 'Post Type Singular Name', 'textdomain' ),
        'menu_name'             => __( 'Servicios', 'textdomain' ),
        'name_admin_bar'        => __( 'Servicio', 'textdomain' ),
        'add_new'               => __( 'Añadir nuevo', 'textdomain' ),
        'add_new_item'          => __( 'Añadir nuevo servicio', 'textdomain' ),
        'edit_item'             => __( 'Editar servicio', 'textdomain' ),
        'new_item'              => __( 'Nuevo servicio', 'textdomain' ),
        'view_item'             => __( 'Ver servicio', 'textdomain' ),
        'view_items'            => __( 'Ver servicios', 'textdomain' ),
        'search_items'          => __( 'Buscar servicios', 'textdomain' ),
        'not_found'             => __( 'No encontrado', 'textdomain' ),
        'not_found_in_trash'    => __( 'No encontrado en la papelera', 'textdomain' ),
        'all_items'             => __( 'Todos los servicios', 'textdomain' ),
    );

    $args = array(
        'label'                 => __( 'Servicios', 'textdomain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ), // Solo título, descripción e imagen destacada
        'public'                => true,
        'show_in_menu'          => true,
        'menu_icon'             => 'dashicons-hammer', // Cambialo por el icono que quieras
        'has_archive'           => true,
        'rewrite'               => array( 'slug' => 'servicios' ),
        'show_in_rest'          => true, // Para soportar Gutenberg / API REST
    );

    register_post_type( 'servicios', $args );
}

add_action( 'init', 'cleanmax_cpt_servicios' );
