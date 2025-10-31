<?php
require_once 'Bailar.php';
if (isset($_GET['objeto'])) {
    $objeto = unserialize(urldecode($_GET['objeto']));

    echo "<h2 style='text-align:center'>Tus datos:</h2>";
    echo "<p style='text-align:center'>Nombre: {$objeto->nombre}</p>";
    echo "<p style='text-align:center'>Años practicados: {$objeto->aniosPractica}</p>";
    echo "<p style='text-align:center'>Estilo: {$objeto->estilo}</p>";
    echo "<p style='text-align:center'>Nivel de habilidad: {$objeto->habilidad}</p>";
    echo "<p style='text-align:center'>Ruta del PDF: {$objeto->imagen}</p>";
}
?>
<br>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comic+Relief:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <?php if(isset($_GET['imprimir'])){
      echo "<p>" .$_GET['imprimir'] ."<p>";
      };
 ?>
    <form method="post" action="destino.php" enctype="multipart/form-data">
      <label
        >Nombre:
        <input class="campos" type="text" name="nombre" placeholder="Tu nombre" />
      </label>
      <label
        >Años que llevas practicando:
        <input class="campos" type="number" name="aniosPracticados" placeholder="0" min="0" />
      </label>
      <label
        >Estilo:
        <input class="campos" type="text" name="estilo" placeholder="Ballet, urbano..." />
      </label>
      <label
        >Nivel de habilidad (del 1 al 10):
        <input
        class="campos"
          type="number"
          name="nivelHabilidad"
          min="1"
          max="10"
          placeholder="1"
        />
      </label>
            <label
        >Incluye una imagen(PDF, max 2MB):
        <input type="file" name="imagen"/>
      </label>
      <input type="hidden" name="enviar" value="1" />
      <input id="botonEnviar" type="submit"/>
    </form>
  </body>
</html>
