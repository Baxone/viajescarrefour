<?php 

    function media($pNumero1, $pNumero2)
    {
        $resultado = ($pNumero1 + $pNumero2) / 2;
        return $resultado;
        //despues del return no se puede hacer nada, por es como si no existiera.
    }

    $mediaAritmetica = media(4,6);
    $mediaAritmetica2 = media(24,65);
    var_dump($mediaAritmetica);
    var_dump($mediaAritmetica2);




?>