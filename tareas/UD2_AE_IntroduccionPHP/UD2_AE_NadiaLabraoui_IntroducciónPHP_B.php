<?php
//Genera una estructura para que haya al menos
// una clave cuyo valor represente uno de estos
//tipos de datos:

define('N', rand(1, 10));

$asociativo = array(
    "nombre" => "cadena",
    "stock" => "entero",
    "caducidad" => "fecha",
    "precio" => "decimal",
);

function generarNombre(){
    $nombreAleatorio = "";
    $numCaracteres = rand(1, 10);
    $letra = "";
    for ($i = 0; $i < $numCaracteres; $i++) {
        $letra = (rand(97, 122));
        $letra = chr($letra);
        if ($i == 0) {
            $letra = strval(strtoupper($letra));
            $nombreAleatorio = $letra;
        } else {
            $nombreAleatorio .= $letra;
        }
    }
    return $nombreAleatorio;
}

function generarEntero() {
    return rand(100, 99999999);
}

function generarFecha(){
    $fInicio = strtotime(date("2025/01/01"));
    $fFIn = strtotime(date("2025/09/30"));

    return date("Y-m-d", rand($fInicio, $fFIn));
}

function generarDecimal(){
    $nDecimal = rand(0, 99999);
    $nEntero = rand(100, 999);
    $decimales = 1;

    for($i = 0; $i < mb_strlen($nDecimal); $i++){
        $decimales *= 10;
    }
    return $nDecimal / $decimales + $nEntero;

}

$producto = array(
);
for ($i = 0; $i < N; $i++) {
    $apoyo = array();
    foreach ($asociativo as $key => $value) {

        if ($key == "nombre") {
            $apoyo[$key] = generarNombre();

        } elseif ($key == "stock") {
            $apoyo[$key] = generarEntero();

        } elseif ($key == "caducidad") {
            $apoyo[$key] = generarFecha();

        } elseif ($key == "precio") {
            $apoyo[$key] = generarDecimal();

        }
    }
    $producto[] = $apoyo;
}

echo "<pre>";
print_r($producto);
echo "<pre>";

$min = 100.00000000;
echo $min;