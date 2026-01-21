<?php
session_start();
require_once "../vendor/autoload.php";
use Nadia\Src\Producto;
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
$titulo = $_GET["nombreCat"];
$producto = (new Producto())->productosDeCategoria($_GET["CodCat"]);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$titulo ?></title>
</head>
<body>
<h1><?=$titulo ?></h1>
<form method="POST" action="../src/anadir_carrito.php">
<ul>

<?php foreach ($producto as $prod):?>
    <li>
        <label for="unidades" ><?= htmlspecialchars($prod->Nombre) ?> </label> <aside>Stock: <?= htmlspecialchars($prod->Stock)?> </aside> <input type="number" name="productos[<?=htmlspecialchars($prod->CodProd)?>]" required min="0" max="<?=htmlspecialchars($prod->Stock)?>"></li>
    <?php endforeach; ?>

        <input type="hidden" name="enviado">
        <input type="submit" value="Enviar">

</ul>
</form>
</body>
</html>