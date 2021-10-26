<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones en php</title>
</head>
<body>

    <form action="comprobarUser.php" method="POST">
        <div>
            <label for="user">Usuario</label>
            <input type="text" name="user" id="user">
        </div>

        <div>
            <label for="pass">Password</label>
            <input type="pasword" name="pass" id="pass">
        </div>
        <input type="submit" value="Entrar">
    </form>
    
    <?php 

    if(isset($_GET['error']) && $_GET['error'] == 1)
    {
        echo '<p style="color:red">Usuario o contraseña incorrectos</p>';
    }else if(isset($_GET['error']) && $_GET['error'] == 2)
    {
        echo '<p style="color:red">No tienes permisos para acceder aqui</p>';
    }else if(isset($_GET['msg']) && $_GET['msg'] == 1)
    {
        echo '<p style="color:green">Hasta pronto</p>';
    }

    ?>
</body>
</html>