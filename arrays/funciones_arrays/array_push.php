<?php 
    //es un funcion que me permite añadir elementos dentro de un array. Lo hace en la última posicion disponible de mi array.


    $listaPalabras = array('Casa', 'Perro');

    $palabra = "Coche";
    $otraPalabra = "Camion";

    //opcion sin push

    $listaPalabras[count($listaPalabras)] = $palabra;

    //var_dump($listaPalabras);

    //opcion con push

    array_push($listaPalabras, $otraPalabra, 'Motocicleta');

    var_dump($listaPalabras);


?>