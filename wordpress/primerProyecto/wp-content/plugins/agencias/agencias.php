<?php 

    /*
        Plugin Name: Agencias. Mapa de agencias y fichas de proveedores
        Description: Lista de agencias en mapa de google maps con sus fichas.
        Version: 1.0
        Author: Juan Antonio Pérez
        License: GPL3+
    */

    add_action('init', 'agencias_init');

    function agencias_init(){

        $etiquetas = array(
            'name' => __('Agencias'),
            'singular_name' => __('agencia'),
            'menu_name' => __('Agencias'),
            'name_admin_bar' => __('agencia'),
            'add_new' => __('Añadir nuevo'),
            'add_new_item' => __('Añadir nuevo agencia'),
            'new_item' => __('Nuevo agencia'),
            'edit_item' => __('Editar agencia'),
            'view_item' => __('Ver agencia'),
            'all_items' => __('Todos los agencias'),
            'search_items' => __('Buscar agencias'),
            'not_found' => __('No hay nada publicado'),
            'not_found_in_trash' => __('No hay nada en la papelera')
        );

        $args = array(
            'labels' => $etiquetas,
            'description' => __('Descripción'),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_icon' => 'dashicons-admin-site-alt3',
            'query_var' => true,
            'rewrite' => array('slug' => 'agencia'),
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'show_in_rest' => true,
            'rest_base' => 'datos_agencia',
            'rest_controller_class' => 'WP_REST_Posts_Controller',
            'menu_position' => 9,
            'support' => array('title'),
            'taxonomies' => array('category')
        );

        register_post_type('agencia',$args);
    }

    //crear la rutas permanentes de agencia

    function rewrite_flush_agencia(){
        agencias_init();
        flush_rewrite_rules();
    }

    register_activation_hook(__FILE__, 'rewrite_flush_agencia');

    //como exponer los campos personalizados dentro de la api.

    function expose_ACF_data_rest(){

        $postypes = ['acf-field-group', 'acf-field'];
        $postype_extra = ['page'];
        $post_types = array_diff(get_post_types(['_builtin' => false], 'names'), $postypes);

        array_push($post_types, $postype_extra);


        foreach ($post_types as $post) {
            register_rest_field($post, 'datosAgencia', [
                'get_callback' => 'expose_fields',
                'schema' => null
            ]);
        }

    }

    function expose_fields($pObject)
    {
       $ID = $pObject['id'];
       return get_fields($ID);
    }

    //gancho que inicialice la funcion de expose_ACF_data_rest
    add_action('rest_api_init','expose_ACF_data_rest');

    //Vamos a cargar los script necesarios para usar la api de googlemaps. OJO para poder hacer esto tenemos que haber habilitado wp_head() y wp_footer(), estas funciones cargan entro otras cosas los js de los plugins.
    add_action('wp_enqueue_scripts', 'agencias_script_init');

    function agencias_script_init()
    {
        wp_enqueue_script('api-google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCdcoRTfAuefU2TYsDW2NhLeO2ssYhSbmk', [], "", true);

        wp_enqueue_script('my-google-maps', plugins_url('google-maps.js', __FILE__), [], "", true);

    }

    //voy a crear un shortcode para poder insertar en cualquier pagina contenido el mapa.
    // [map atributos=""] contenido[/map] [map][/map]
    add_shortcode('map', 'shortcode_googlemaps');

    function shortcode_googlemaps(){
        return '<div id="map"></div>';
    }




?>