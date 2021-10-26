<?php 

    include('inc/session.php');

    //vaciar cualquier dato que se pueda haber guardado en la $_SESSION
    session_unset();

    //destruyo la variable de session
    session_destroy();

    header('Location: index.php?msg=1');

?>