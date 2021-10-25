<?php
    $numeroA= 34;
    $numeroB = 6.5;
    
    $numero = 34;
    $nombreAlumno = "Juan";
    $studentName = "David";


    $suma = $numeroA + $numeroB;    

    //funciones de depuracion
    print_r($numeroA); //no es para pintar simplemente para depurar, solo muestra el valor
    print_r('<br>');

    var_dump($numeroA); //no solo me da el dato sino tambien el tipo y mas informacion.

    echo gettype($nombreAlumno); //solo me devuelve el tipo de dato.
?>

<h1><?php echo $nombreAlumno; ?></h1>
<h1><?= $suma; ?></h1>