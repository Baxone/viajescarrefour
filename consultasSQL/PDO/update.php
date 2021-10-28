<?php include('inc/header.php'); ?>
    <h1>Actualizar producto</h1>
    <?php
        $consulta = new Consultas();
        $producto = $consulta->getProductById($_GET['id']);
    ?>
    <form class="form" action="inc/update.php" method="POST">
         <input name="id" type="hidden" value="<?= $producto['id'] ?>">
        <div>
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" placeholder="Introduce el producto" value="<?= $producto['name'] ?>">
        </div>

        <div>
            <label for="precio">Precio</label>
            <input type="text" id="precio" name="precio" placeholder="Introduce el precio" value="<?= $producto['precio'] ?>">
        </div>

        <div>
            <label for="stock">Stock</label>
            <?php 
              if($producto['stock'] === 'true')
              {
                ?>
                    <select name="stock" id="stock">
                        <option value="true" selected>Hay Stock</option>
                        <option value="false" >No hay Stock</option>
                    </select>
             <?php
              } 
              else if($producto['stock'] === 'false')
              {
                ?>
                    <select name="stock" id="stock">
                        <option value="true" >Hay Stock</option>
                        <option value="false"  selected>No hay Stock</option>
                    </select>
            <?php 
               }
            ?>
        </div>

        <div>
            <label for="description">Descripción</label>
            <textarea name="description" id="description" cols="10" rows="10"><?= $producto['description'] ?></textarea>
        </div>
        <input type="submit" value="Actualizar">

    </form>
<?php include('inc/footer.php') ?>