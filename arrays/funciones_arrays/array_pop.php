<?php 

    //pop elimina elementos por la ultima posicion.

    $lista = array('uno', 'dos', 'tres');

    array_pop($lista);
    //var_dump($lista);

    //otro  equivalente para borrar por la primera posicion

    array_shift($lista);
    var_dump($lista);
?>