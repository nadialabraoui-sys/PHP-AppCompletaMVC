<?php
function duplicarMal($a) {
	$a = $a *2;
}
$var1 = 5;
$var1 = duplicarMal($var1);
echo"$var1<br>";

function duplicar($a) {
	return $a*2;
}

$var1 = 5;
$var1 = duplicar($var1);
echo "$var1 <br>";

function duplicar2(&$a) {
	$a = $a*2;
}

duplicar2($var1);
echo "$var1<br>";