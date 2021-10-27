<?php include('inc/header.php'); ?>
    <main>
     <h2>Listado de productos</h2>

     <table class="productos">
        <thead>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>DESCRIPCIÓN</th>
            <th>PRECIO</th>
            <th>STOCK</th>
            <th></th>
            <th></th>
        </thead>
        <?php include('inc/productos.php') ?>
     </table>

    </main>
<?php include('inc/footer.php') ?>