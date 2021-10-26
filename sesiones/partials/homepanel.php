<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido</h1>

    <?php 
        if($_SESSION['rol'] == 'admin')
        {
            require('menuadmin.php');
        }else{
            require('menususcriptor.php');
        }

    ?>
</body>
</html>