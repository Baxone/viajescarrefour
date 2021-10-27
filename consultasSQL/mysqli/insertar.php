<?php 
    //recibe los datos, insertar los datos y me redirige al index.php
    require('db.php');
    require('functions.php');

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
   
     $result = insertContact($conn, $name, $phone, $email);
  
     if($result)
    {
        //se ha insertado correctamente
        header('Location: index.php');
    }else{
        echo 'fallo en la insercion';
    }  

?>