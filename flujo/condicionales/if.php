<?php 
    $genero = "mujer";
    $edad =19;

    //filtrar que necesito saber datos de mujeres mayores de 20 años.

    if($genero == "mujer" && $edad >= 20){
        echo '<h1>Es mujer mayor de 20</h1>';
    }else{
        echo '<h1>Es mujer menor de 20</h1>';
    }


?>