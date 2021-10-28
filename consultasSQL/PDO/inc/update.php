<?php

    require('../models/class.consultas.php');

    $actualizar = new Consultas();
    $msg = $actualizar->updateProduct($_POST);

   header('Location: ../panel.php?msg='.$msg);


?>