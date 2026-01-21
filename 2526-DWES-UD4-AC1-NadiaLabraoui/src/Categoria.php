<?php
namespace Nadia\Src;
use PDO;
use Nadia\Tools\Conexion;
use PDOException;

class Categoria
{
    private PDO $conexion;
    public function __construct(){
        $this->conexion = Conexion::getConexion();
    }

    public function listar(): array {

        try{

            $sentencia = "select * from categorias";

            $stmt = $this->conexion->query($sentencia);

            return $stmt->fetchAll(PDO::FETCH_OBJ);


        } catch (PDOException $e){

            throw new PDOException("No se pueden listar los datos: ". $e->getMessage() . "Código de error:" .$e->getCode());
        }

    }

}