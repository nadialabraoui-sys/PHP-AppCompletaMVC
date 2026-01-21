<?php
session_start();
require_once "../vendor/autoload.php";
use Nadia\Src\Producto;
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
if(!isset($_SESSION["carrito"])) $_SESSION["carrito"]=[];
$producto = (new Producto())->productoPorCodigo($_GET["codProd"]);

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["enviar"])) {
    $_SESSION["carrito"][$_GET["codProd"]] = $_POST["unidades"];
        if($_SESSION["carrito"][$_GET["codProd"]] == 0) {
            unset($_SESSION['carrito'][$_GET['codProd']]);
        }
    header("Location: ./carrito.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet">
    <meta charset="utf-8">
    <title>Editar Carrito</title>
</head>
<body>
<h1>Editar Unidades</h1>
<form action="" method="post">
    <label><?=$producto?>
        <input type="number" name="unidades" value="<?= $_SESSION["carrito"][$_GET["codProd"]]?>">
    </label>
        <input type="submit" value="Confirmar" name="enviar">
</form>

</body>
</html>