<?php 
require('class.conexion.php');
class Consultas{

    public function getUserByName($pNombre)
    {
        $conn = new Conexion();
        $conexion = $conn->getConexion();
        $query = "SELECT * FROM usuarios WHERE user=:user";
        //preparar la consulta
        $peticion = $conexion->prepare($query);
        $peticion->bindParam(':user', $pNombre);
        $peticion->execute();

        //tengo que convertirla en un array asociativo

        $registro = $peticion->fetch();
        return $registro;

    }

    public function getAllProducts(){
        $conn = new Conexion();
        $conexion = $conn->getConexion();
        $query = "SELECT * FROM productos";
        //preparo la consulta
        $peticion = $conexion->prepare($query);
        //no paso parametros no tengo que hacer bindParams
        $peticion->execute();

        $registros = $peticion->fetchAll();
        
        return $registros;
    }

}


?>