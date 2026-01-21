<?php

class Categoria
{

    private $db;

    public function __construct()
    {
        $this->bd = new Db();

    }

    public function obtenerCategorias(): array {
        try {
            $sentencia = "select * from categorias";
            $stmt = $this->bd->query($sentencia);
            return $stmt->fetchAll(PDO::FETCH_OBJ);

        } catch (PDOException $e) {

            throw new PDOException("No se pueden listar los datos: " . $e->getMessage() . "Código de error:" . $e->getCode());
        }
    }
}