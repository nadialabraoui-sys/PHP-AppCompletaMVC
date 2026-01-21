<?php
session_start();
if (isset($_GET['error'])) {
   echo "<p>  " .$_GET['error'] ." </p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title>Gestor Restaurantes</title>
</head>
<body>

<form method="POST" action="../src/loginValidacion.php">

    <label>Correo electrónico
        <input type="email" name="email" value="contacto@restauranteejemplo.com" placeholder="..." required>
    </label>

    <label> Contraseña
        <input type="password" name="passwd" value="claveSegura123" placeholder="*********" required>
    </label>

    <input type="hidden" value="1" name="enviado">
    <input type="submit" value="Enviar">

</form>

</body>
</html>