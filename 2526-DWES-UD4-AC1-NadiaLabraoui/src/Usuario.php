<?php
namespace Nadia\Src;
use PDO;
use Nadia\Tools\Conexion;
use PDOException;

class Usuario
{


    private PDO $pdo;
    private int $codigo;
    private string $email;
    private string $clave;
    private int $CP;
    private string $pais;
    private string $ciudad;
    private string $direccion;

    public function __construct($email = "", $clave = "")
    {
        if ($email != "") $this->email = $email;
        if ($clave != "") $this->clave = $clave;
        $this->pdo = Conexion::getConexion();
    }

    public function __destruct()
    {
        unset($this->email, $this->clave, $this->pais, $this->ciudad, $this->direccion, $this->CP, $this->codigo);
    }

    public function login(): bool
    {
        try {
            $sql = "SELECT *
            FROM restaurantes
            WHERE correo = :correo AND clave = :clave";

            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ':correo' => $this->email,
                ':clave' => $this->clave
            ]);

            $fila = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($fila !== false) {
                $this->codigo = $fila['CodRes'];
                $this->ciudad = $fila['Ciudad'];
                $this->pais = $fila['Pais'];
                $this->direccion = $fila['Direccion'];
                $this->CP = $fila['CP'];

                $_SESSION['usuario'] = [$this->email, $this->codigo];
                $_SESSION['carrito'] = [];
            }

            return $fila !== false;

        } catch (PDOException $e) {
            echo "Ha habido un error de autenticacion";
            error_log("Error de login: " . $e->getMessage() . " / " . $e->getCode());

        }
    }

    public function logout(){
        unset($_SESSION['usuario']);
        unset($_SESSION['carrito']);
        session_destroy();
    }


}

