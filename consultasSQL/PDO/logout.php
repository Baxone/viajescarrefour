<?php

    session_start();
    //vaciar cualquier dato que se guarde en la session
    session_unset();

    //destruir la session
    session_destroy();

    header('location:index.php?msg=1');


?>