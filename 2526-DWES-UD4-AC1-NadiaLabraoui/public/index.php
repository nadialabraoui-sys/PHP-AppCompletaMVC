<?php
session_start();
require_once "../vendor/autoload.php";
use Nadia\Src\Categoria;

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
$categorias = (new Categoria())->listar();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
</head>
<body>

<h1>Lista de categorías</h1>
<ul>
<?php foreach ($categorias as $cat):?>

        <li><a href="./productos.php?CodCat=<?= urlencode($cat->CodCat)?>&nombreCat=<?=urlencode($cat->Nombre) ?>"> <?= htmlspecialchars($cat->Nombre) ?> </a></li>

<?php endforeach; ?>
</ul>

<button><a href="../src/logout.php">Cerrar Sesión</a></button>
</body>
</html>
