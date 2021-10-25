<?php

    //determina la cantidad de caracteres de cualquier string

    $nombre = "Juan Antonio";

    echo strlen($nombre); //12

    //cortar la cadena

    $nombreCortado = "";

    //var_dump($nombre[11]);

    for($i = 0; $i < strlen($nombre); $i++)
    {
        if($i == 5)
        {
            break;
        }
        //$nombreCortado = $nombreCortado . $nombre[$i];
        $nombreCortado .= $nombre[$i];
    }

    var_dump($nombreCortado."...");



?>