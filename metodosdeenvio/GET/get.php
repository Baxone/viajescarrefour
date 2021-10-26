<h1>Estoy en GET</h1>
<?php 

    //var_dump($_GET);

    $nombreRecibido = $_GET['name'];
    $edadRecibida = $_GET['age'];

    echo $nombreRecibido.'<br>';
    echo $edadRecibida.'<br>';

    echo $_GET['user'];
    echo  $_GET['pass'];

?>