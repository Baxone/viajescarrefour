<?php 

    //array_filter: filtra elementos de un array usando un funcion que marca la condicion que si tiene que cumplir. Callback

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
        array(
            'nombre' => 'Rodrigo',
            'apellido' => 'Lopez',
            'edad' => 27,
            'email' => 'rodrigo@gmail.com',
            'activo' => false
        )
    );

//opcion 1 juan no me acuerdo de los metodos de array, recorrer y buscar lo necesito a través de condicionales.

    $listaPeq = array();
    //quiero filtrar todos los alumnos que tenga menos de 30años
    foreach ($listaAlumnos as $alumno) {
        if($alumno['edad'] <= 30)
        {
            array_push($listaPeq, $alumno);
        }
    }

    //var_dump($listaPeq);

//con array_filter
    $edadCorte = 30;
    function compararEdad($pAlumno){
        return $pAlumno['edad'] >= $GLOBALS['edadCorte'];
    }

    $listaFiltrada = array();

    $listaFiltrada = array_filter($listaAlumnos, 'compararEdad');

    var_dump($listaFiltrada);




?>