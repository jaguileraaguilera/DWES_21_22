<?php
/* Escribe una  función para calcular potencias.
 * La función recibe como argumentos la base y el exponente 
 * (que es opcional y tiene por defecto el valor 2)*/

function potencia($base, $exponente = 2) {
    return $base ** $exponente;
}

// settype()
// 
//Pruebas
$a = potencia(4);
$b = potencia(3,3);

echo "$a $b";

