<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio por POST</title>
</head>
<body>

<!-- El envio por post se hace a traves del protocolo http y queda 'oculto' a las vista de los usuarios. Solo podemos realizar envio por post a traves de formularios.-->

    <form action="post.php" method="POST">

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