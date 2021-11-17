<?php

/* Escribe una función para comprobar si un número es primo 
 * y un programa para probarla*/

function es_primo($n) {
    if ($n % 2 === 0) {
        return false;
    }
    else {
        $i = 3;
        while ($i <= sqrt($n)){
            if ($n % $i == 0) {
                return false;
            } else {
                $i += 2;
            }
        }
        return true;
    }
}

//Pruebas (probar con 49 y con 23, por ejemplo)
$resultado = es_primo(49);

if ($resultado) {
    echo "Es primo";
} else {
    echo "No es primo";
}
