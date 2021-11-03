<?php 
/*
*   Plugin Name: Testimonios
*   Description: Listado de testimonios para mi web
*   Version: 1.0
*   Author: Juan Antonio Pérez
*   License: MIT
*/

    add_action('init', 'testimonios_init');


function testimonios_init(){

  $etiquetas = array(
            'name' => __('testimonios'),
            'singular_name' => __('testimonio'),
            'menu_name' => __('Testimonios'),
            'name_admin_bar' => __('testimonio'),
            'add_new' => __('Añadir nuevo'),
            'add_new_item' => __('Añadir nuevo testimonio'),
            'new_item' => __('Nuevo testimonio'),
            'edit_item' => __('Editar testimonio'),
            'view_item' => __('Ver testimonio'),
            'all_items' => __('Todos los testimonios'),
            'search_items' => __('Buscar testimonios'),
            'not_found' => __('No hay nada publicado'),
            'not_found_in_trash' => __('No hay nada en la papelera')
  );
  //voy a definir el tipo de contenido custom post type
    $argumentos = array(
      'labels' => $etiquetas,
      'Description' => 'Descripción',
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_icon' => 'dashicons-welcome-comments',
      'query_var' => true,
      'rewrite' => array('slug' => 'testimonio'),
      'capabality_type' => 'post',
      'has_archive' => true,
      'hierarchical' => false,
      'menu_position' => 7,
      'supports' => array('title', 'editor', 'thumbnail'),
      'show_in_rest' => true,
    );

    register_post_type('testimonios', $argumentos);
}




?>