<?php
//para variar el tiempo de la sesion a nivel de codigo utilizamos
 include('inc/session.php');
    $listaUsuarios = array(
        ['user' => 'Juan', 'password' => '12345', 'rol' => 'admin'],
        ['user' => 'Patricia', 'password' => '22222', 'rol' => 'suscriptor'],
        ['user' => 'Rodrigo', 'password' => '01010', 'rol' => 'suscriptor']
    );

    $miUser = $_POST['user'];
    $miPass = $_POST['pass'];
    
    foreach ($listaUsuarios as $usuario) {
         
        if (( strtolower($usuario['user']) == strtolower($miUser) ) &&
                ( $usuario['password'] == $miPass)){
            $existe = true;
            $rol = $usuario['rol'];
            break;       
        }
       
    }
 
      if($existe)
        {
            //me redirija a el panel de acceso restringido.
            $_SESSION['estado'] = 'ok';
            $_SESSION['usuario'] = $miUser;
            $_SESSION['rol'] = $rol;
           header('Location:panel.php');
        }else{
            //me redirija a el formulario dando un error.
           header('Location:index.php?error=1');
        }



?>