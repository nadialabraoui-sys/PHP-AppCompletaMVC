<?php
//Crea un script que determine si un número no es primo y,
// además, si precede a otro que sí es primo.

function esPrimo($num){
    if ($num > 2) {
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;

    }else if($num <= 1) {
        return false;
    }
    return true;
}

function precedePrimo($num) {
    $num2 = $num + 1;
    if(esPrimo($num + 1)){
        echo "$num precede a un numero primo";
    }else{
        echo "$num no precede a un numero primo";
    }
}
$num = 3;
if(esPrimo($num)){
    echo "$num es primo";
}else{
    echo "$num no es primo";
}
echo "<br>";
precedePrimo($num);
