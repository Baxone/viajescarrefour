<?php require('db.php') ?>
<?php require('functions.php') ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de contactos Mysqli</title>
    <style>
        input{
            padding: 10px;
            width: 100%;
            margin-bottom: 10px;
        }

        table{
            width: 100%;
            border: 1px solid black;
        }

        table td,  table th{
            border-bottom: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>CRUD MySQLi</h1>

    <div class="form">
        <form action="insertar.php" method="POST">
            <div>
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name">
            </div>
             <div>
                <label for="phone">Teléfono</label>
                <input type="text" name="phone" id="phone">
            </div>
             <div>
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </div>
            <input type="submit" value="Guardar">
        </form>
    </div>
    <hr>
    <table>
        <theader>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>TELEFONO</th>
            <th>EMAIL</th>
            <th></th>
            <th></th>
        </theader>
        <!-- consulta a BBDD para traerme primero los elemntos de mi tabla -->
      
        <?php 
            $query = "SELECT contactos.* FROM contactos ORDER BY name ASC";
            printContacts($conn, $query);
        ?>

    </table>


</body>
</html>