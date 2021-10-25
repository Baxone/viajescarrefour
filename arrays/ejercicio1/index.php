<!DOCTYPE html>
<?php include('inc/datos.php') ?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de alumnos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Listado alumnos</h1>
    <section class="alumnos">
        <?php foreach($listaAlumnos as $alumno){ ?>
        <article>
            <h2><?= $alumno['nombre'] ?> <?= $alumno['apellido'] ?></h2>
            <ul>
                <li>EDAD: <?php echo $alumno['edad'] ?></li>
                <li>EMAIL: <?php echo $alumno['email'] ?></li>
            </ul>
        </article>
        <?php } ?>
    </section>

</body>
</html>