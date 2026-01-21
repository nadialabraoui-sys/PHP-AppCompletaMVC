<?php

namespace Nadia\Src;
require_once "../vendor/autoload.php";

use PDO;
use PDOException;
use \Nadia\Tools\Conexion;

class GestorRestaurantes
{
    private PDO $conexion;

    public function __construct()
    {

        $this->conexion = Conexion::getConexion();
    }

    public function insertarDatos(array $datos, $tabla){

        try {

            $sentenciaSQL = "INSERT INTO :tabla (titulo, autor, paginas, terminado, fechaLectura)
		VALUES (:titulo, :autor, :paginas, :terminado, :fechaLectura)";


            //guardo la sentencia preparada en una variable
            $stmt= $this->conexion->prepare($sentenciaSQL);

            //sustituye los huecos que deje antes por su valor
            $stmt->execute([
                ':tabla' => $tabla,
                ':titulo' => $datos['titulo'],
                ':autor' => $datos['autor'],
                ':paginas' => $datos['paginas'],
                ':terminado' => $datos['terminado'],
                ":fechaLectura" => $datos['fechaLectura'] ]);


        } catch (PDOException $error){
            //comprobar si el error tiene que ver con una restricción, 2300 es el código de error que lanza mysql cuando esto pasa
            if($error->getCode() === 2300) {
                throw new PDOException("El libro ya existe o se ha violado alguna restricción");
            }

            throw new PDOException("Ha habido un error en la inserción: " . $error->getMessage() . $error->getCode());

        }

    }




}
