<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodos de envio REQUEST</title>
</head>
<body>

<!-- REQUEST ES UN METODO QUE SIRVE PARA RECEPCIONAR CUALQUIER METODO DE ENVIO CUANDO NO SE SABE COMO VIENE LA PETICION -->

<?php 
    //pasar datos a traves de un enlace.

    $nombre = "David";
    $edad = 39;
?>

    <a href="request.php?name=<?= $nombre ?>&age=<?= $edad?>">Enviar informacion</a>

<?php
    //Puedo enviar por post a traves de un formulario
?>

    <form action="request.php" method="POST">
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