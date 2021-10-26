<?php 

    //unset: elimina los elementos concretos de un array, entendiendo como elemento concreto el de una posicion determinada. Pero no cambia los posicion

    $lista = array('uno', 'dos', 'tres');

    unset($lista[1]);

    
    //tambien vale para cadenas de caracteres.

    for($i = 0; $i < count($lista); $i++)
    {
        echo $lista[$i].'<br>';
    }


?>