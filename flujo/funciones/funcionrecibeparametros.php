<?php

    $numero1 = 3;
    $numero2 = 5;

    function sumar($pNumero1, $pNumero2 = 4)
    {
        $resultado = $pNumero1 + $pNumero2;
        echo '<h1>'.$resultado.'</h1>';
    }

    sumar(1,2);
     sumar(10,3);
      sumar(111,111);
      sumar(3);



?>