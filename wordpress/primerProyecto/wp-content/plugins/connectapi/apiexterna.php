<?php 

    /*
        Plugin Name: Wordpress Api Connect
        Description: Un plugin que me permitirá conectarme a una api externa
        Version: 1.0
        Author: Juan Antonio Pérez
        License: GPL2
    */

    function getApiData($pEndPoint, $pMethod, $pHeaders = [], $pQueryParams = [], $pBody = []){
        $api_endpoint = $pEndPoint;
        $api_args = array(
            'method' => $pMethod,
            'headers' => $pHeaders,
            'body' => $pBody
        );
        $queriesParams = $pQueryParams;

        $api_endpoint = add_query_arg($queriesParams, $api_endpoint);
        $response = wp_remote_request($api_endpoint, $api_args);
        //el true del final de la funcion lo que hace es convertirme el JSON de javascript en array asociativo de PHP.
        $data = json_decode( wp_remote_retrieve_body($response), true);
        
        return $data;
    }

?>