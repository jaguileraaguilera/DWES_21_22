<?php
/* Escriba un script que cree un array con 15 números aleatorios y los muestre 
 * en pantalla. A continuación, rotará los elementos de ese array una posición. 
 * Es decir, el elemento de la posición 0 debe pasar a la posición 1, 
 * el de al 1 a la 2, …, el elemento de la última posición pasará a la 
 * posición 0. Por último, mostrará el nuevo contenido del array. */

function rellenarArray(&$array, $tope) {
    for ($i = 0; $i < $tope; $i++) {
        $array[] = rand(0, 10);
    }
}

function rotarArray(&$array) {
    $aux = [];
    $aux[] = $array[count($array) - 1];
    
    for ($i = 0; $i < count($array) - 1; $i++) {
        array_push($aux, $array[$i]);
    }
    
    for ($i = 0; $i < count($array); $i++) {
        $array[$i] = $aux[$i]; 
    }
}

$array = [];
rellenarArray($array, 15);
print_r($array);
rotarArray($array);
echo '<br>';
print_r($array);
