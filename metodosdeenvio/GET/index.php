<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodos de envio GET</title>
</head>
<body>

<!-- GET me permite pasar variables o datos de un php a otro php -->
<!-- GET es un array asocitivo que pertenece a variables superglobales -->

<?php 
    //pasar datos a traves de un enlace.

    $nombre = "David";
    $edad = 39;
?>

    <a href="get.php?name=<?= $nombre ?>&age=<?= $edad?>">Enviar informacion</a>

<?php
    //Puedo enviar por get a traves de un formulario
?>

    <form action="get.php" method="GET">
        <label>
            Usuario
            <input type="text" name="user" placeholder="introduce el nombre de usuario">
        </label>
        <br>
        <label>
            Contraseña
            <input type="password" name="pass" placeholder="introduce la contraseña">
        </label>
        <br>
        <input type="submit" value="Enviar">
    </form>

    
</body>
</html>