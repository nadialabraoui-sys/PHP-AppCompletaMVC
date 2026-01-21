<?php
namespace Nadia\Src;
use PDO;
use PDOException;

class LineaPedido {

    private int $codPedProd;
    private int $pedido;
    private int $producto;
    private int $unidades;

    public function __construct($pedido, $producto, $unidades){
        $this->pedido = $pedido;
        $this->producto = $producto;
        $this->unidades = $unidades;
    }

    public function guardar(PDO $pdo)  {
        try {
            $sentenciaSQL = "INSERT INTO pedidosproductos (pedido, producto, unidades)
		VALUES (:pedido, :producto, :unidades)";

            $stmt= $pdo->prepare($sentenciaSQL);

            $exito = $stmt->execute([
                ":pedido"   => $this->pedido,
                ":producto" => $this->producto,
                ":unidades" => $this->unidades
            ]);

            if ($exito) {
                $this->codPedProd = (int)$pdo->lastInsertId();
            }

            return $exito;


        } catch (PDOException $error){
            echo "Ha habido un error en la inserción de las lineas del pedido";
            error_log("Error: " . $error->getMessage() . $error->getCode());

        }

    }



    public function getCodPedProd(): int
    {
        return $this->codPedProd;
    }

    public function setCodPedProd(int $codPedProd): void
    {
        $this->codPedProd = $codPedProd;
    }

    public function getPedido(): int
    {
        return $this->pedido;
    }

    public function setPedido(int $pedido): void
    {
        $this->pedido = $pedido;
    }


    public function getProducto(): int
    {
        return $this->producto;
    }


    public function setProducto(int $producto): void
    {
        $this->producto = $producto;
    }

    public function getUnidades(): int
    {
        return $this->unidades;
    }

    public function setUnidades(int $unidades): void
    {
        $this->unidades = $unidades;
    }


}