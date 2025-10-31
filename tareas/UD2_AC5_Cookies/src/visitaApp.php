<?php

if(!isset($_COOKIE['visitas'])) {
		
		setcookie("visitas", 1, time()+3600 * 24);
        $mensajeVisitas= "Bienvenido";
		header("Location:index.php?visita=". urlencode($mensajeVisitas));

}else if($_COOKIE >= 10){

	setcookie("visitas", "", time()-3600);
    $mensajeVisitas= "Cookie eliminada. Reseteado el contador de visitas";
    header("Location:index.php?visita=". urlencode($mensajeVisitas));
}else{

	setcookie("visitas", $visitas, time()+3600 * 24);
    $mensajeVisitas= "VISITA $visitas";
    header("Location:index.php?visita=". urlencode($mensajeVisitas));
}


