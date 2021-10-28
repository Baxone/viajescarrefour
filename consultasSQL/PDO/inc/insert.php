<?php
require('../models/class.consultas.php');

$msg="";

$nombre = $_POST['name'];
$stock = $_POST['stock'];
$descripcion = $_POST['description'];
$precio = $_POST['precio'];

//aqui deberiamos hacer la validacion de los campos del formulario, yo simplemente voy a comprobar que no son vacios.
    if(strlen($nombre) > 0 && strlen($stock) > 0 && strlen($descripcion) > 0 && strlen($precio) > 0 )
    {
        //puedo insertar tengo que ir a la clase consultas ha hacer la consulta.
        $consulta = new Consultas();

        $msg = $consulta->insertProduct($nombre, $descripcion, $precio, $stock);
        header('Location:../panel.php?msg='.$msg);
    }
    else
    {
        echo "Ingresa todos los campos por favor";
    }



?>