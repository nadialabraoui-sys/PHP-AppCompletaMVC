<?php
require "./src/visita_app.php";
include "./src/idioma.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1><?php
    echo $mensajeIdioma;
    ?></h1>
<form method="post" action="">
<select name="idioma">
    <option value="ES">Español</option>
    <option value="EN">Inglés</option>
    <option value="DE">Alemán</option>
    <option value="KO">Coreano</option>
    <option value="ZH">Chino</option>
</select>
    <input type="submit" value="Enviar">
</form>
</body>
</html>