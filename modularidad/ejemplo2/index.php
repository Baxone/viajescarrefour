<?php require('funciones.php') ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de fotos</title>
    <style>

        .imagen{
            max-width: 200px;
            margin: 0 auto;
        }

        .imagen img{
            width: 100%;
            height: auto;
        }

    </style>
</head>
<body>
<h3>Galeria</h3>
<?php var_dump($_GET); ?>
<div class="imagen">
        <img src="images/<?= cargarImagen(); ?>" >
        <?php cargarBotones($listaImagenes) ?>
</div>

    
</body>
</html>