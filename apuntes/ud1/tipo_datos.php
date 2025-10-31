<?php

	//Tipos de datos

	$entero = 4; //Integer
	$numero = 4.5; //Coma flotante
	$cadena = "cadena"; //Cadena
	$bool = TRUE; 	//Booleano

	/* cambio de tipo de una variable */

	$a = 5;
	echo gettype($a);
	echo "<br>";
	$a = "Hola";
	echo gettype($a);
	echo "<br>";
	//Reasignación de variables

	$var1 = 100;
	$var2 = &$var1; // asignación por referencia

		$var3 = $var1; // asignación por copia
		echo "$var2<br>"; //muestra 100
		$var2 = 300; //cambia el valor de $var2
		echo "$var1<br>"; // $var1 también cambia
		$var3 = 400; // este cambio no afecta a $var1 
		echo $var1;

	//Tipos numéricos


	echo PHP_INT_SIZE . '<br>';
	echo PHP_INT_MIN . '<br>';
	echo PHP_INT_MAX . '<br>';

	$a = 0b100; // en binario
	$a = 0100;  // octal
	$a = 0x100; // hexadecimal
	$a = 3 / 2; // la división entre enteros no da problemas
	echo $a . '<br>'; // 1.5

	$b = 7.5;
	$a = (int)$b; // casting a int
	echo $a . '<br>'; // 7, se trunca

	$b = 7e2; // notación científica
	$b = 7E2;
	$b = 'Hola $a';
	echo "$b";