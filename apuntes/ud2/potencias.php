<?php
function calcularPotencia($num, $exponente = 2) {

	$resul = 1;
	
	for ($i = 1; $i <= $exponente; $i++) {

		$resul = $resul * $num;

	}

	return $resul;
}

echo calcularPotencia(5). "<br>";
echo calcularPotencia(2, 3);