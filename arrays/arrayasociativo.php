<?php 

    //en los array  asociativos se elemina el concepto de posición por el concepto de clave.

    // clave => valor

    $registro = array(
        'nombre' => 'Juan',
        'apellido' => 'Perez',
        'edad' => 39,
        'email' => 'jantonio.perez@gmail.com',
        'activo' => true
    );

    //var_dump($registro);
    
    echo $registro['nombre']; //Juan

    //opcion 1: foreach

    echo '<ul>';

        foreach ($registro as $clave => $valor) {
            echo '<li>'.$clave.' : '.$valor.'</li>';
        }

    echo'</ul>';



    //opcion 2: forech sin clave

         echo '<ul>';

        foreach ($registro as $valor) {
            echo '<li>'.$valor.'</li>';
        }

        echo'</ul>';
?>