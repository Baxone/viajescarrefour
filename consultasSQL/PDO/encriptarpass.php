<?php 

    $mipass = 34567;
    $encriptar = password_hash($mipass, PASSWORD_DEFAULT, array('cost' => 10));
    echo $encriptar;
    echo '<br>';
    echo MD5($mipass);
