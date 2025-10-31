<?php
require_once 'Bailar.php';

/*if(isset($_GET['enviar'])) {
    $nombre = empty(trim($_GET['nombre'])) ? null : trim($_GET['nombre']);
    $anios = isset($_GET['aniosPracticados']) ? (int) $_GET['aniosPracticados'] : null ;
    $estilo = empty(trim($_GET['estilo'])) ? null : trim($_GET['estilo']);
    $habilidad = isset($_GET['nivelHabilidad']) ? (int) $_GET['nivelHabilidad'] : null; 

    if($nombre === null || $anios === null || $estilo === null || $habilidad === null) {
    // echo "No se han recibido todos los parámetros"; (Modo ejercicio 3)
    $mensaje = "No se han recibido todos los parámetros";
    header("Location: index.php?imprimir=".urlencode($mensaje));
}else{
    // echo "Se han recibido correctamente todos los parámetros"; (Modo ejercicio 3)
     $mensaje = "Se han recibido correctamente todos los parámetros";
     header("Location: index.php?imprimir=".urlencode($mensaje));
}
}*/

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['enviar'])) {
    $nombre = empty(trim($_POST['nombre'])) ? null : trim($_POST['nombre']);
    $aniosPractica = isset($_POST['aniosPracticados']) ? (int) $_POST['aniosPracticados'] : null ;
    $estilo = empty(trim($_POST['estilo'])) ? null : trim($_POST['estilo']);
    $habilidad = isset($_POST['nivelHabilidad']) ? (int) $_POST['nivelHabilidad'] : null; 

    if($nombre === null || $aniosPractica === null || $estilo === null || $habilidad === null) {
    // echo "No se han recibido todos los parámetros"; (Modo ejercicio 3)
    $mensaje = "No se han recibido todos los parámetros";
    header("Location: index.php?imprimir=".urlencode($mensaje));
}else{
    // echo "Se han recibido correctamente todos los parámetros"; (Modo ejercicio 3)
     $mensaje = "Se han recibido correctamente todos los parámetros";
     header("Location: index.php?imprimir=".urlencode($mensaje));
}
}

    $dir = dirname(__FILE__) . '/archivoImagenes';
    $maxBytes = (int) 2 * 1024 * 1024;
    $defaultExtension = "pdf";
    $mimeRequerido = "application/pdf";
    

    if(!is_dir($dir)) {
        mkdir($dir, 0755);
    }

    if(isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $rutaTemporal = $_FILES['imagen']['tmp_name'];
        $nombreArch = $_FILES['imagen']['name'];
        $tamanioArch = $_FILES['imagen']['size'];
        $tipoArch = $_FILES['imagen']['type'];
        $extensionArch = strtolower(pathinfo($nombreArch, PATHINFO_EXTENSION));
    
    $archInfo = finfo_open(FILEINFO_MIME_TYPE);
    $mimeType = finfo_file($archInfo, $rutaTemporal);
    finfo_close($archInfo);

    if(!($extensionArch === $defaultExtension && $tamanioArch <= $maxBytes && $mimeType === $mimeRequerido)){
        $mensajeImagen = "No se ha podido procesar el archivo adjunto"; 
        header("Location: index.php?imprimir=".urlencode($mensajeImagen));
        exit();
    }
    $rutaFinal = $dir . DIRECTORY_SEPARATOR . basename($nombreArch);

    if(file_exists($rutaFinal)){
        $mensajeImagen = "El archivo ya existe en el servidor"; 
        header("Location: index.php?imprimir=".urlencode($mensajeImagen));
        exit();
    }else if(move_uploaded_file($rutaTemporal, $rutaFinal)){
        $mensajeImagen = "Archivo subido correctamente"; 
        header("Location: index.php?imprimir=".urlencode($mensajeImagen));

        $bailarForm = new Bailar($nombre, $aniosPractica, $estilo, $habilidad);
        $bailarForm->imagen = $rutaFinal;

        $bailarSerialized = serialize($bailarForm);
        header("Location: index.php?objeto=".urlencode($bailarSerialized));
    }

}








    

  
        

    

