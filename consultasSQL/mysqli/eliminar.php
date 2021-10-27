<?php 

   require('db.php');
   require('functions.php');

   $id = $_GET['id'];

   $result = deleteContact($conn,$id);

   if($result)
   {
        header('Location: index.php');
   }
   else
   {
       echo 'Fallo en el borrado';
   }

?>