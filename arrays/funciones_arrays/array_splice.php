<?php 

    //elimina un elemento de una array en cualquier posicion. Restructurando las posiciones en el array principal

     $lista = array('uno', 'dos', 'tres');

     array_splice($lista,1, 1);

     var_dump($lista);


    for($i = 0; $i < count($lista); $i++)
    {
        echo $lista[$i].'<br>';
    }


?>