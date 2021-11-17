<?php
/* Escribe una función que calcule el máximo común divisor de dos números 
 * y un programa para probarla.*/

function mcd($a, $b) { //Usando el Algoritmo de Euclides
    return  ($b == 0) ? $a : mcd($b, $a % $b);
}

//Pruebas
echo mcd(48, 78);
