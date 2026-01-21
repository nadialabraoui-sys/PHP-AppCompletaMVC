<?php

class CategoriasModel
{

    private $db;

    public function __construct()
    {
        $this->bd = new Db();

    }

    public function obtenerCategorias(): array {
        try {
            $this->bd->query("SELECT * FROM categorias");
            return $this->bd->registros();

        } catch (PDOException $e) {

            throw new PDOException("No se pueden listar los datos: " . $e->getMessage() . "Código de error:" . $e->getCode());
        }
    }
}