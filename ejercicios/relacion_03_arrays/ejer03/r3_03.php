<?php
/* Escribe un script que rellene un array con valores aleatorios (0,1) 
 * y lo muestre. A continuación, calcularemos su complementario y también 
 * la mostraremos. */

function rellenarArray(&$array, $tope) {
    for ($i = 0; $i < $tope; $i++) {
        $array[] = rand(0, 1);
    }
}

function arrayComplementario($array) {
    $complementario = [];
    
    for ($i = 0; $i < count($array); $i++) {
        ($array[$i] == 0) ? $complementario[] = 1 : $complementario[] = 0;
    }
    
    return $complementario;
}


$array = [];
rellenarArray($array, 10);
print_r($array);
echo '<br>';
$complementario = arrayComplementario($array);
print_r($complementario);
