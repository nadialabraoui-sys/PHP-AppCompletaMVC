<?php

function calculador($operacion, $numa, $numb) {
	$resul = $operacion($numa, $numb);
	return $resul;
}

function calculador($operacion, $numa) {
	$resul = $operacion($numa);
	return $resul;
}

function sumar($a, $b) {
	return $a + $b;
}

function multiplicar ($a, $b) {
	return $a * $b;
}

function factorial ($a){
	$resul = 1;
	if($a > 0) {
		for($i = 1; $i <= $a; $i++) {

			$resul = $resul * $i;
		}
	}else{
		return -1;
	}

		return $resul;
}

$a = 4;
$b = 5;
$rl = calculador("multiplicar", $a, $b);
echo "$rl <br>";
$r2 = calculador("sumar", $a, $b);
echo "$r2 <br>";
$r3 = calculador("factorial", $a, $b);
echo "$r3<br>";