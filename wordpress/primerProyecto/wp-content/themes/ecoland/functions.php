<?php 

//añadimos a nuestro tema la posibilidad de tener imagen destacada.

add_theme_support('post-thumbnails');


//como crear un shortcode para maquetar diferentes tipos de contenidos.

add_shortcode('caja', 'shortcode_mostrar_caja');

function shortcode_mostrar_caja($atributos, $content=""){
 //si no me pasan atributos los pinto en blanco

 $params = shortcode_atts( array(
   'icon' => "flaticon-gliding",
   'title' => "Este es un texto de prueba"
 ), $atributos);
  
    return '<div class="col-md d-flex align-self-stretch">
            <div class="media block-6 services text-center d-block">
              <div class="icon justify-content-center align-items-center d-flex"><span class="'.$params['icon'].'"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">'.$params['title'].'</h3>
                <p>'.$content.'</p>
              </div>
            </div>      
          </div>';
      
}

//vamos crear una seccion nueva para introducir destinos, lo quiero como un menu de wordpress separado y quiero que tenga posibilidad de poner categorias y tipos de viajes

add_action('init', 'destinos_init');


function destinos_init(){

  $etiquetas = array(
            'name' => __('Destinos'),
            'singular_name' => __('Destino'),
            'menu_name' => __('Nuestros Destinos'),
            'name_admin_bar' => __('Destino'),
            'add_new' => __('Añadir nuevo'),
            'add_new_item' => __('Añadir nuevo Destino'),
            'new_item' => __('Nuevo destino'),
            'edit_item' => __('Editar destino'),
            'view_item' => __('Ver destino'),
            'all_items' => __('Todos los destinos'),
            'search_items' => __('Buscar destinos'),
            'not_found' => __('No hay nada publicado'),
            'not_found_in_trash' => __('No hay nada en la papelera')
  );
  //voy a definir el tipo de contenido
    $argumentos = array(
      'labels' => $etiquetas,
      'Description' => 'Descripción',
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_icon' => 'dashicons-admin-site-alt',
      'query_var' => true,
      'rewrite' => array('slug' => 'destino'),
      'capabality_type' => 'post',
      'has_archive' => true,
      'hierarchical' => false,
      'menu_position' => 5,
      'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
      'taxonomies' => array('category'),
      'show_in_rest' => true,
    );

    register_post_type('destinos', $argumentos);
}

//crear una taxonomia personlizada que no sea una categoria
  //tipo

    add_action('init', 'destinos_taxonomy');

    function destinos_taxonomy(){

      $labels = array(
            'name' => __('Tipos'),
            'singular_name' => __('Tipo'),
            'search_items' => __('Buscar tipo'),
            'all_items' => __('Todos los tipos'),
            'parent_item' => null,
            'parent_item_colon' => null,
            'edit_item' => __('Editar tipo'),
            'update_item' => __('Actualizar tipo'),
            'add_new_item' => __('Añadir Nuevo tipo'),
            'separate_items_with_commas' => __('Separe los tipos por comas'),
            'add_or_remove_items' => __('Añadir o quitar tipos'),
            'choose_from_most_used' => __('Seleccionar entre las categorias mas usadas') 
      );

      register_taxonomy('tipo', 'destinos', array(
        'labels' => $labels,
        'hierarchical' => true,
        'query_var' => true,
        'show_ui' => true
      ));


    }

    
?>