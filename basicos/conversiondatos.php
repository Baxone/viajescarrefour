<?php 

    $numeroA = "34";
    $numeroB = 3;


    $suma = $numeroA + $numeroB; 

    var_dump($suma);

    //conversion de dato string a numero

    $numeroConvertido = (int) $numeroA;
    var_dump($numeroConvertido);

    //convertir un numero en string

    $string = (string) $numeroB;
    var_dump($string);

    //valores de conversion
    /*
        (int) -> integet
        (string) -> string
        (float) -> racional
        (array) -> array
        (object) -> object
    */

?>