<?php

    class Conexion {

        public function getConexion(){
            $user = "root";
            $pass = "root";
            $host = "localhost";
            $db = "crm";


            $conexion = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
            return $conexion;
        }

        //si necesitas parar la conexion por motivos n 
        //$conexion->close();

    }


?>