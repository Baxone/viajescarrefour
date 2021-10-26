<?php 

    $listaAlumnos = array(
        array(
            'nombre' => 'Juan',
            'apellido' => 'Perez',
            'edad' => 39,
            'email' => 'jj@gmail.com',
            'activo' => true
        ),
        array(
            'nombre' => 'Lucia',
            'apellido' => 'Garcia',
            'edad' => 23,
            'email' => 'lucia@gmail.com',
            'activo' => false
        ),
    );

    $alumnoX = array(
        'nombre' => 'Pepe',
        'apellido' => 'Villuela',
        'edad' =>  65,
        'email' => 'pepe@gmail.com',
        'activo' => true
    );

    array_push($listaAlumnos, $alumnoX);

    var_dump($listaAlumnos);

?>