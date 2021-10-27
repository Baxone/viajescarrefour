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
<?php

    require('db.php');
    require('functions.php');

    if(!isset($_GET['id']))
    {
        //llamar a la funcion de actualizar con los datos del formulario.
        $id = $_POST['id'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        $query = "UPDATE contactos SET name='$name', phone='$phone', email='$email' WHERE id='$id'";

        $result = mysqli_query($conn, $query);

        if($result)
        {
            header('Location: index.php');
        }
        else
        {
            echo 'fallo al actualizar';
        }


    }
    else
    {
        //primero recibo el id hago un consulta de seleccion de los datos de ese id, pinto un formulario con dichos datos y permite al usuario actualizarlos.

        //consultar el registro con el id correspondiente.
        $registro = getContact($conn, $_GET['id']);

    ?>    
    
        <div class="form">
            <form action="actualizar.php" method="POST">
                <input type="hidden" name="id" value="<?= $registro['id']?>">
                <div>
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" value="<?= $registro['name'] ?>">
                </div>
                <div>
                    <label for="phone">Teléfono</label>
                    <input type="text" name="phone" id="phone" value="<?= $registro['phone'] ?>">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" value="<?= $registro['email'] ?>">
                </div>
                <input type="submit" value="Actualizar">
            </form>
        </div>




    <?php
    }



?>