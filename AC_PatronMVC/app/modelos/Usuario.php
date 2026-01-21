<?php

class Usuario
{


    private Db $db;

    public function __construct()
    {
        $this->bd = new Db();

    }

    public function obtenerUsuario(): array {
        try {
            $sentencia = "select correo, clave from restaurantes";
            $stmt = $this->bd->query($sentencia);
            return $stmt->fetchAll(PDO::FETCH_OBJ);

        } catch (PDOException $e) {

            throw new PDOException("No se pueden listar los datos: " . $e->getMessage() . "Código de error:" . $e->getCode());
        }
    }
}