<?php 

    $id = $_GET['id'];

    global $wpdb;
    global $table_prefix;
    $table = $table_prefix.'suscribers';
    $peticion = "DELETE FROM {$table} WHERE id={$id}";
    $borrado = $wpdb->get_results($peticion);

    if(isset($borrado)){
        echo '<p>El registro se ha borrado correctamente Volver a <a href="?page=eco_newsletter">Suscriptores</a></p>';
    }else{
        echo '<p>No se ha podido borrar el registro intentelo de nuevo mas tarde. <a href="?page=eco_newsletter">Volver</a></p>';
    }
?>