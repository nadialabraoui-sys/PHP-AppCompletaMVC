<?php
session_start();
require_once "../vendor/autoload.php";
use Nadia\Tools\Conexion;
use Nadia\Src\Pedido;
use Nadia\Src\LineaPedido;
use Nadia\Tools\Mailer;
if (!isset($_SESSION['usuario'])) {
    header("Location: ../public/login.php");
    exit();
}

if(insertarDatos()){
    unset($_SESSION["carrito"]);
    $correo = new Mailer("madrid1@empresa.com", $_SESSION["usuario"][0], "Pedido realizado correctamente", "Pedido confirmado");
    $correo->enviarCorreo();
    header("Location: ../public/index.php");
}


function insertarDatos(): bool{

    $pdo = Conexion::getConexion();

    try {
        $pdo->beginTransaction();

        $pedido = new Pedido((int) $_SESSION['usuario'][1]);
        if (!$pedido->guardar($pdo)) {
            echo "No se pudo guardar el pedido";
        }

        $codPed = $pedido->getCodPed();

        foreach ($_SESSION["carrito"] as $producto => $unidades) {
            $lineaPedido = new LineaPedido($codPed, $producto, $unidades);
            if (!$lineaPedido->guardar($pdo)) {
                echo"No se pudo guardar la línea de pedido para el producto $producto";
            }
            $pedido->setLineas($lineaPedido);
        }

        return $pdo->commit();



    } catch (Exception $e) {
        $pdo->rollBack();
        error_log("Error transacción: " . $e->getMessage());
        echo "Hubo un error al guardar el pedido";
        return false;
    }


}