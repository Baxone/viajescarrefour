<?php
    include('otrofichero.php');

    

    function pintar(){
        $edad = 35; //local 
        echo $edad; //variable local
        echo  $GLOBALS['numero'];
    }
        pintar();
       
    // error echo $GLOBALS['edad'];

?>