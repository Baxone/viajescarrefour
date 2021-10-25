<?php 

    $nota = 4;
    $mensaje = "";

    if($nota < 5)
    {
        $mensaje = "Has suspendido";
    }
    else
    {
        $mensaje = "Has Aprobado";
    }

    echo '<h1>'.$mensaje.'</h1>';

    //operador ternario

    $otromensaje = "";

    $otromensaje = ($nota < 5)? "Estas suspendido": "Estas aprobado";

    echo '<h1>'.$otromensaje.'</h1>';

?>