<?php

    $listaAlumnos = array(
        array(
            'nombre' => 'Juan',
            'apellido' => 'Perez',
            'edad' => 39,
            'email' => 'jantonio.perez@gmail.com',
            'activo' => true
        ),
        array(
            'nombre' => 'Pepe',
            'apellido' => 'Villuela',
            'edad' => 65,
            'email' => 'pepe@gmail.com',
            'activo' => false
        ),
        array(
            'nombre' => 'Ana',
            'apellido' => 'Garcia',
            'edad' => 32,
            'email' => 'ana@gmail.com',
            'activo' => true
        ),


    );

    foreach($listaAlumnos as $alumno)
    {
    ?>
        <!-- html -->
        <div class="registro">
            <h2><?= $alumno['nombre'] ?>  <?= $alumno['apellido'] ?> </h2>
            <ul>
                <li>Edad : <?= $alumno['edad'] ?></li>
                <li>Email: <?= $alumno['email'] ?></li>
            </ul>
        </div>
    <?php
    }

?>