<?php
    //simpre que trabajemos con variables de session tenemos que hacer session_start();

     include('inc/session.php');
    if($_SESSION['estado'] != 'ok')
    {
        header('Location: index.php?error=2');
    }

    include('partials/homepanel.php');
?>

<a href="cerrarsesion.php">Logout</a>