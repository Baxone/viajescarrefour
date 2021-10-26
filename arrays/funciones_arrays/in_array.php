<?php 

    $animales = array('perro', 'gato', 'halcon', 'cocodrilo');

    $palabra = 'Perro';

    //in_array me devuelve true o false (1, 0) dependiendo de si encuentra o no el elemento dentro del array.

    $resultado = in_array(strtolower($palabra), $animales);

    if($resultado)
    {
        echo 'Existe la palabra ' . $palabra;
    }else{
        echo 'No existe la palabra ' .  $palabra;
    }





?>