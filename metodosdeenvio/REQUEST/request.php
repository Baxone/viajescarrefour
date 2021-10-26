<h1>Estoy en REQUEST</h1>

<?php 

    $nombreRecibido = $_REQUEST['name'];
    $edadRecibida = $_REQUEST['age'];

    echo $nombreRecibido.'<br>';
    echo $edadRecibida.'<br>';


    echo $_REQUEST['user'];
    echo $_REQUEST['pass'];

?>