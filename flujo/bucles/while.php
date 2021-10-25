<?php 

//es un bucle mas inderminado es mas facil cometer errores.

    $peso = 100;
    $kilometros = 0;

    while($peso > 80)
    {
        echo 'corre'. $kilometros. 'km<br>';
        $kilometros++;
        $peso--;
    }

    var_dump($peso);


?>