<?php 

    $palabra = 'Bermellon';
    $palabra = strtolower($palabra);
    // strtoupper()

    //traductor de ingles

    switch ($palabra) {

        case 'bermellon':
        case 'rojo':
            echo 'red';
        break;

        case 'verde':
            echo 'green';
        break;

        case 'amarillo':
            echo 'yellow';
        break;

        default:
            echo 'no existe la palabra en el diccionario';
        break;

    }






?>