<?php
session_start();
require('models/class.consultas.php');

$user = $_POST['user'];
$pass = $_POST['pass'];

if($user == "" || $pass == ""){
    header('Location:index.php?error=1');
}else{
    $consultas = new Consultas();
    $usuario = $consultas->getUserByName($user);
    //verificar que el password del usuario coincide con el password recibido

    if($usuario && password_verify($pass, $usuario['password']))
    {
        //entrariamos en el panel de control de mi crm, creamos las variables de sesion
        $_SESSION['user'] = $usuario['user'];
        $_SESSION['logueado'] = true;
        header('Location:panel.php');
       
    }
    else{
        header('Location:index.php?error=2');
    }

}

