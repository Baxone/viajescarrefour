<?php  

    // $listaAlumnos = array('David', 'Miguel Angel', 'Cristina');

    $listaAlumnos = array();
    $listaAlumnos = ['David', 'Miguel Angel', 'Cristina', 'Juan Antonio'];

    //los arrays son listados de elementos que estan numerados de 0 a n-1 siendo n la longitud de la lista.

    echo $listaAlumnos[0]; //David
    echo '<br>';
    echo count($listaAlumnos); //3

    //si quiero pintar todos los elementos, al final tengo que contar posiciones.

    echo '<ul>';

    for($i =0; $i < count($listaAlumnos); $i++)
    {
        echo '<li>'. $listaAlumnos[$i].'</li>';
    }
    echo '</ul>';

?>