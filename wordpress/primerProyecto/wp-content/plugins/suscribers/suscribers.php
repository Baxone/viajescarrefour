<?php 

    /*
        Plugin Name: Lista de suscriptores newsletter
        Description: Plugin para recoger listas de suscripcion
        Author: Juan Antonio Pérez
        Version: 1.0
    */

    //paso 1: crear el menu de administración
    add_action('admin_menu', 'crear_menu_newsletter');

    function crear_menu_newsletter(){

        //llamamos al metodo add_menu_page, este metodo recibe una serie de parametros que me permite configurar la pagina que estoy creando dentro del administrador

        $page_title = "Newsletter Ecoland";
        $menu_title = "Suscriptores";
        $capability = "manage_options";
        $menu_icon_url = "dashicons-email-alt";
        $menu_slug = "eco_newsletter";
        $content_function = "pintarContenido";
        add_menu_page($page_title, $menu_title, $capability, $menu_slug, $content_function);


    }

    function pintarContenido()
    {
        include('inc/index.php');
    }


    //crear el widget de el formulario de suscription

    add_action('widgets_init', 'crearWidgetSuscribers');

    function crearWidgetSuscribers(){
        require('inc/eco_widget_class.php');
        register_widget('widget_suscriber');
    }



?>