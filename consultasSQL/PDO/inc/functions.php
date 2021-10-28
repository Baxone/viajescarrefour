<?php

function getNotifications(){
    $msg = "";
            if(isset($_GET['error']) && $_GET['error'] == 1)
            {
                $msg = '<p style="color: red">El usuario o la contraseña no puedes estar vacios</p>';
            }
            else if(isset($_GET['error']) && $_GET['error'] == 2)
            {
                $msg = '<p style="color: red">Usuario o contraseña incorrectos</p>';
            }
            else if(isset($_GET['msg']) && $_GET['msg'] == 1)
            {
                $msg = '<p style="color: green">Hasta pronto, te has desconectado</p>';
            }
            else if(isset($_GET['error']) && $_GET['error'] == 3)
            {
                $msg = '<p style="color: red">No tienes privilegios para entrar aquí</p>';
            }else{
                $msg = '<p style="color: green">'.$_GET['msg'].'</p>';
            }
           return $msg;
}


?>