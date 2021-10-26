<?php 

    //busca un valor determinado en un array y devuelve la primera clave correspondiente a la busqueda.

    $alumno = array(
        'nombre'=> 'Lucia',
        'apellido' => 'Garcia',
        'edad' => 23,
        'email' => 'lucia@gmail.com'
    );

    $clave = array_search('Garcia', $alumno);

    echo $clave;
    echo '=>';
    echo $alumno[$clave];
?>