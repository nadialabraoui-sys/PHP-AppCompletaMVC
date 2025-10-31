<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>HOLA</title>
</head>
<body>
<?php
require_once "./src/visitaApp.php";
if(isset($_GET["visita"])) {

    echo "<h2>".$_GET["visita"]."</h2>";
    }
?>
  <form action="src/idioma.php" method="POST">
    <select>
        <option value="ES">Español</option>
        <option value="EN">Inglés</option>
        <option value="DE">Alemán</option>
    </select>
       <input type="submit" value="Enviar">
   </form>


</body>
</html>