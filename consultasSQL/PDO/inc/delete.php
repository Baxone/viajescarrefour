<?php 

    require('../models/class.consultas.php');

    if(isset($_GET['id']))
    {
        $consulta = new Consultas();
        $msg = $consulta->deleteProduct($_GET['id']);
        header('Location: ../panel.php?msg='.$msg);
    }


?>