<?php
session_start();
require_once "../vendor/autoload.php";
use Nadia\Src\Producto;
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
if(!isset($_SESSION["carrito"])) $_SESSION["carrito"]=[];
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title>Carrito</title>
</head>
<body>
<h1>Carrito</h1>
<table>
    <thead>
    <tr>
        <th>Producto</th>
        <th>Unidades</th>
        <th>Modificar</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($_SESSION["carrito"] as $clave => $valor): ?>
    <tr>
        <td> <?= (new Producto())->productoPorCodigo($clave) ?> </td>
        <td> <?= htmlspecialchars($valor) ?> </td>
        <td><button><a href="../src/eliminar_carrito.php?codProd=<?= urlencode($clave)?>">Eliminar</a></button>
            <button><a href="./editar_carrito.php?codProd=<?= urlencode($clave)?>">Editar Unidades</a></button> </td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>
<button><a href="./index.php">Volver</a></button>
<button><a href="../src/confirmar_pedido.php">Confirmar pedido</a></button>

</body>
</html>