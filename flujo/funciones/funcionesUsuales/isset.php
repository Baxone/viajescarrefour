<?php

    //determina si las variables estan definidas y no son nulas.

    $nombre = "Juan";
    $apellido = "";
    $edad = NULL;

    echo isset($nombre); //1 true 0 false
    var_dump(isset($nombre));

    echo '<br>';

    echo isset($apellido); 
    var_dump(isset($apellido));

      echo '<br>';

    echo isset($edad); 
    var_dump(isset($edad));

?>