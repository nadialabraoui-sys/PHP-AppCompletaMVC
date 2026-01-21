<?php
namespace Nadia\Src;
use PDO;
use Nadia\Tools\Conexion;
use PDOException;

class Producto
{
    private PDO $conexion;
    public function __construct(){
        $this->conexion = Conexion::getConexion();
    }

   /*1*/ public function productosDeCategoria($codCat): array{

        try{

            $sentencia = "select * from productos where categoria = :codCat";

            $stmt = $this->conexion->prepare($sentencia);
            $stmt->execute([
                ':codCat' => $codCat
            ]);

            $producto = $stmt->fetchAll(PDO::FETCH_OBJ);

            return $producto;

        } catch (PDOException $e){
            echo "Ha habido un error al conectar con la base de datos";
            error_log("Error de de la clase Producto-1: " . $e->getMessage() . " / " . $e->getCode());

        }

    }

    /*2*/   public function productoPorCodigo($codProd) {
        try{

            $sentencia = "select Nombre from productos where CodProd = :codProd";

            $stmt = $this->conexion->prepare($sentencia);
            $stmt->execute([
                ':codProd' => $codProd
            ]);

            $producto = $stmt->fetch(PDO::FETCH_ASSOC);

            return $producto['Nombre'];

        } catch (PDOException $e){
            echo "Ha habido un error al conectar con la base de datos";
            error_log("Error de de la clase Producto-2: " . $e->getMessage() . " / " . $e->getCode());

        }

    }



}
