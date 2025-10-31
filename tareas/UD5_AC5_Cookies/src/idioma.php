<?php

    if($_POST["idioma"] === "EN") {
        $mensajeIdioma = "Select language";
    }else if($_POST["idioma"] === "DE") {
        $mensajeIdioma = "Sprache auswählen";
    }else if($_POST["idioma"] === "KO") {
        $mensajeIdioma = "언어 선택";
    }else if($_POST["idioma"] === "ZH") {
        $mensajeIdioma = "選擇語言";
    }else{
        $mensajeIdioma = "Seleccione idioma";
}
setcookie("idioma", $_POST['idioma'], time() + 3600 * 24);

?>


