//calcula el factorial de un numero
<?php

	$n = 3;
	$resultado = 1;

	if($n != 0) {
		for($i = 1; $i <= $n; $i++) {

			$resultado = $resultado * $i;
		}
		
		echo "<br> $resultado";

	} else {
		echo "<br> 1"; 

		}

