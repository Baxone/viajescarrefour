<?php include('inc/functions.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de acceso a mi plataforma</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="wrapper">
    <main class="login">
        <form action="login.php" method="POST">
            <input type="text" name="user" placeholder="Introduce usuario">
            <input type="password" name="pass" placeholder="Introduce tu password">
            <input type="submit" value="Entrar">
        </form>
        <?=  getNotifications(); ?>
    </main>
</div>

</body>
</html>