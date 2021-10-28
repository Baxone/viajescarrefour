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

    public function insertProduct($pName, $pDescription, $pPrecio, $pStock){
            $conn = new Conexion();
            $conexion = $conn->getConexion();

            $query = "INSERT INTO productos VALUES (NULL, :name, :description, :precio, :stock)";

            $insercion = $conexion->prepare($query);
            $insercion->bindParam(':name', $pName);
            $insercion->bindParam(':description', $pDescription);
            $insercion->bindParam(':precio', $pPrecio);
            $insercion->bindParam(':stock', $pStock);

            if(!$insercion){
                return "Error al insertar el producto";
            }else{
                $insercion->execute();
                return "El producto ha sido registrado correctamente";
            }
    }

    public function deleteProduct($pId){
        $conn = new Conexion();
        $conexion = $conn->getConexion();
        $query = "DELETE from productos WHERE id=:id";

        $delete = $conexion->prepare($query);
        $delete->bindParam(':id', $pId);

        if(!$delete)
        {
            return "No se ha podido eliminar el producto";
        }else{
            $delete->execute();
            return 'El producto se ha borrado correctamente';
        }
    }

    public function getProductById($pId){
       $idProduct = (int) $pId;
       $conn = new Conexion();
       $conexion = $conn->getConexion();

        $query = "SELECT * FROM productos WHERE id= :id";

        $consulta = $conexion->prepare($query);
        $consulta->bindParam(':id', $pId);
        $consulta->execute();

        $producto = $consulta->fetch();
        return $producto;

    }

    public function updateProduct($pProduct)
    {
            
        $conn = new Conexion();
        $conexion = $conn->getConexion();

        $query = "UPDATE productos SET name=:name, description=:description, stock=:stock, precio=:precio WHERE id=:id";

        $precio = floatval($pProduct['precio']);
        $myId = (int) $pProduct['id'];

        $actualizar = $conexion->prepare($query);
        $actualizar->bindParam(':name', $pProduct['name']);
        $actualizar->bindParam(':description', $pProduct['description']);
        $actualizar->bindParam(':stock', $pProduct['stock']);
        $actualizar->bindParam(':precio',$precio );
        $actualizar->bindParam(':id', $myId );

        if(!$actualizar)
        {
            return "No se ha podido modificar el producto";
        }
        else
        {
            $actualizar->execute();
            return "El producto se ha modificado correctamente";
        } 
    }

}


?>