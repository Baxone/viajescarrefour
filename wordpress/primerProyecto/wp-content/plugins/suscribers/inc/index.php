<?php 

    if(isset($_GET['action']) && $_GET['action'] == 'delete')
    {
        //borrando
        include('borrar.php');
    }
    else if(isset($_GET['action']) && $_GET['action'] == 'update')
    {
        //actualizacion
        include('actualizar.php');
    }
    else if(isset($_GET['action']) && $_GET['action'] == 'insert')
    {
        //insercion
        include('insertar.php');
    }
    else{
        //pintando datos
        include('consulta.php');
    }



?>