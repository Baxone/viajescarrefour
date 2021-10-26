<?php

    $conn = mysqli_connect(
        'localhost:8889',
        'root',
        'root',
        'agenda'
    );
    
    $conn -> set_charset('utf8mb4');

    if(mysqli_connect_errno())
    {
        printf('Fallo de conexion');
        exit();
    }


?>