<?php 

    $numero = 4; //integer

    //asignar un valor por referencia para todos los tipos de datos.
    $otroNumero = &$numero;

    $numero = 7;
    
    var_dump($otroNumero);

     $numero = 6;

     var_dump($otroNumero);

     //definimos un string

     $apellidoPersona = "Perez";
     $cargo = 'Presidente';

     $titulo = '<h1 class="rojo">'.$cargo.'</h1>';
    
     echo $titulo;

     //boleanos true o false;

     $estado = true; //false
     var_dump($estado);

     //numericos

     $edad = 39; //interger
     $nota = 4.5; //double, float
     $negativo = -3; //negative

   //que pasa cuando declaro una varible pero no le asigno valor

   $dni;
   var_dump($dni);

   //cualquier variable declarada sin asignar valor tiene valor nulo.

   //NULL tambien me sirve para vaciar una variar de valor y dato.

   $edad = 0; //integer
       var_dump($edad);

       
   $edad = null;

   var_dump($edad);





?>