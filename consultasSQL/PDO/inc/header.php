<?php 
    session_start();
    if(!isset($_SESSION['logueado']))
    {
        header('Location: index.php?error=3');
    }
    require('models/class.consultas.php');
     require('inc/functions.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de productos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <header>
        <nav>
            <ul>
                <li><a href="panel.php">Catalogo</a></li>
                <li><a href="new.php">Nuevo Producto</a></li>
                 <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <?= getNotifications() ?>