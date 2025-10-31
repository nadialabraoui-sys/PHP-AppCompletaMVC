<?php

require_once __DIR__ . "/idioma.php";


if (!isset($_COOKIE['visitas'])) {
    setcookie('visitas', '1', time() + 3600 * 24);
    echo "Bienvenido<br>";
}else if($_COOKIE['visitas'] >= 10){
    setcookie("visitas", "", time() - 3600);
    echo "Cookie eliminada. Reseteado el contador de visitas.<br>";

}else{
    $visitas = (int) $_COOKIE['visitas'];
    $visitas++;
    setcookie('visitas', $visitas, time() + 3600 * 24);
    echo "VISITAS: " . $visitas . "<br>";
}
?>