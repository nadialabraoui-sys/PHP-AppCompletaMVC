<?php
namespace Nadia\Src;
use PDO;
use PDOException;
use Nadia\Src\LineaPedido;
class Pedido
{
    private ?int $codPed = null;
    private string $fecha;
    private bool $enviado;
    private int $restaurante;
    private array $lineas;
    public function __construct($restaurante)
    {
        $this->restaurante = $restaurante;
        $this->fecha = date("Y-m-d");
        $this->enviado = false;
        $this->lineas = [];
    }


    public function guardar(PDO $pdo)  {
        try {
            $sentenciaSQL = "INSERT INTO pedidos (fecha, enviado, restaurante)
		VALUES (:fecha, :enviado, :restaurante)";

            $stmt= $pdo->prepare($sentenciaSQL);

            $exito = $stmt->execute([
                ":fecha"      => $this->fecha,
                ":enviado"    => $this->enviado ? 1 : 0,
                ":restaurante"=> $this->restaurante
            ]);

            if ($exito) {
                $this->codPed = (int)$pdo->lastInsertId();
            }

            return $exito;

        } catch (PDOException $error){
            echo "Ha habido un error en la inserción del pedido";
            error_log("Error: " . $error->getMessage() . $error->getCode());

        }

    }


    /**
     * @return int
     */
    public function getCodPed(): int
    {
        return $this->codPed;
    }

    /**
     * @param int $codPed
     */
    public function setCodPed(int $codPed): void
    {
        $this->codPed = $codPed;
    }

    /**
     * @return string
     */
    public function getFecha(): string
    {
        return $this->fecha;
    }

    /**
     * @param string $fecha
     */
    public function setFecha(string $fecha): void
    {
        $this->fecha = $fecha;
    }

    /**
     * @return bool
     */
    public function isEnviado(): bool
    {
        return $this->enviado;
    }

    /**
     * @param bool $enviado
     */
    public function setEnviado(bool $enviado): void
    {
        $this->enviado = $enviado;
    }

    /**
     * @return int
     */
    public function getRestaurante(): int
    {
        return $this->restaurante;
    }

    /**
     * @param int $restaurante
     */
    public function setRestaurante(int $restaurante): void
    {
        $this->restaurante = $restaurante;
    }

    /**
     * @return array
     */
    public function getLineas(): array
    {
        return $this->lineas;
    }

    /**
     * @param array $lineas
     */
    public function setLineas(LineaPedido $linea): void
    {
        $this->lineas[] = $linea;
    }


}
