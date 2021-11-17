<?php

/* Escribe una función para calcular el factorial de un número que recibirá 
 * como argumento */

function factorial($n) {
    if (($n == 0) or ($n == 1)){
        return 1;
    }
    else {
        return $n * factorial($n - 1);
    }
}

//Pruebas
$a = factorial(3);
echo $a;
