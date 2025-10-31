<?php
Class Ayuda {


    public function __construct(){}
    public function generarEntero() {
        return rand(100, 99999999);
    }

    public function generarNombre(){
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

    public function generarFecha(){
        $fInicio = strtotime(date("2025/01/01"));
        $fFIn = strtotime(date("2025/09/30"));

        return date("Y-m-d", rand($fInicio, $fFIn));
    }

    public function generarDecimal(){
        $nDecimal = rand(0, 99999);
        $nEntero = rand(100, 999);
        $decimales = 1;

        for($i = 0; $i < mb_strlen($nDecimal); $i++){
            $decimales *= 10;
        }
        return $nDecimal / $decimales + $nEntero;

    }


}
