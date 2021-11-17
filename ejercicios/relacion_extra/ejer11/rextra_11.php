<?php
/* Escribe una función que reciba una cadena y comprueba si es un palíndromo */

function invierteCad($cad) {
    $acumulador = [];
    for ($i = strlen($cad) - 1; $i >= 0; $i--) {
        $acumulador[] = $cad[$i];
    }
    
    return implode($acumulador);
}

function esPalindromo($cad) {
    return ($cad == invierteCad($cad));
}


$palindromo = esPalindromo('civic');
echo $palindromo;