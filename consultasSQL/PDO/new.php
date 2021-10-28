<?php include('inc/header.php'); ?>
    <h1>Insertar nuevo producto</h1>
    <form class="form" action="inc/insert.php" method="POST">
        <div>
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" placeholder="Introduce el producto">
        </div>

        <div>
            <label for="precio">Precio</label>
            <input type="text" id="precio" name="precio" placeholder="Introduce el precio">
        </div>

        <div>
            <label for="stock">Stock</label>
            <select name="stock" id="stock">
                <option value="true" selected>Hay Stock</option>
                <option value="false">No hay Stock</option>
            </select>
        </div>

        <div>
            <label for="description">Descripción</label>
            <textarea name="description" id="description" cols="10" rows="10"></textarea>
        </div>
        <input type="submit" value="Guardar">

    </form>
<?php include('inc/footer.php') ?>