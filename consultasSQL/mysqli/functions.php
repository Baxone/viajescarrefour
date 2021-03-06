<?php

    function printContacts($pConn, $pQuery)
    {
        //mysqli_query dos parametros la conexion y query a ejecutar.
        $consulta = mysqli_query($pConn, $pQuery);

       //necesito convertir esta consulta en un array que pueda manejar y este sera de tipo asociativo.

       while( $registro = mysqli_fetch_assoc($consulta))
       {
        ?>

            <tr>
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['name'] ?></td>
                <td><?= $registro['phone'] ?></td>
                <td><?= $registro['email'] ?></td>
                <td><a href="eliminar.php?id=<?= $registro['id'] ?>">Eliminar</a></td>
                <td><a href="actualizar.php?id=<?= $registro['id'] ?>">Actualizar</a></td>
            </tr>

        <?php
       }

    }

    //insertContact($conn, $nombre, $telefono, $email)
    function insertContact($pConn, $pName, $pPhone, $pEmail){
        $query = "INSERT INTO contactos (id, name, phone, email) VALUES (NULL, '$pName', '$pPhone', '$pEmail')";

        $insercion = mysqli_query($pConn, $query);

        return $insercion;
    }

    /*
    *   deleteContact
    *   Recibe el id y la conexion a la bbdd del registro a borrar
    *   Return true o false
    */

    function deleteContact($pConn, $pId){
        $query = "DELETE FROM contactos WHERE id='$pId'";

        $borrado = mysqli_query($pConn, $query);
        
        return $borrado;
    }

    /*
    *   getContact
    *   Recibe el id y la conexion a la bbdd del registro a recuperar
    *   Return el registro completo de la bbdd
    */

    function getContact($pConn, $pId){
        $query = "SELECT * FROM contactos WHERE id='$pId'";
        $consulta = mysqli_query($pConn, $query);

        return $registro = mysqli_fetch_assoc($consulta);
    }

?>