<?php
    $consulta = new Consultas();
    //getAllProducts que me devuelve un array de productos
    $registros = $consulta->getAllProducts();

     foreach ($registros as $registro) {
    ?>

        <tr>
            <td><?= $registro["id"] ?></td>
            <td><?= $registro['name'] ?></td>
            <td><?= $registro['description'] ?></td>
            <td><?= $registro['precio'] ?></td>
            <td class="<?= ($registro['stock'] == 'true')? 'verde' : 'rojo'  ?>"><?= ($registro['stock'] == 'true')? 'Hay Stock' : 'No hay stock' ?></td>
            <td><a href="update.php">Actualizar</a></td>
            <td><a href="delete.php">Borrar</a></td>
        </tr>

    <?php
    } 
?>

