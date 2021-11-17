<?php
/*Rellena un array bidimensional de 6 filas por 9 columnas con número enteros positivos 
comprendidos entre 100 y 999 (ambos incluidos). Todos los números deben de ser 
distintos, es decir, no se puede repetir ninguno. Muestra a continuación por pantalla el 
contenido del array de tal forma que se cumplan los siguientes requisitos: 
a. Los números de las dos diagonales donde está el mínimo deben aparecer en 
color verde 
b. El mínimo debe aparecer en color azul 
c. El resto de los números deben de aparecer en color negro*/

function rellenarArrayBidiAleatorio(&$array, $n_filas, $n_columnas, $ini, $fin){
    for ($i = 0; $i < $n_filas; $i++) {
        for ($j = 0; $j < $n_columnas; $j++){
            $array[$i][$j] = rand($ini, $fin);
        }
    }
}

function posMinArrayBidi($array,$n_filas, $n_columnas) {
    $min = $array[0][0];
    $pos_min = [0,0];
    
    for ($i = 0; $i < $n_filas; $i++) {
        for ($j = 0; $j < $n_columnas; $j++) {
            if ($array[$i][$j] < $min) {
                $min = $array[$i][$j];
                $pos_min = [$i,$j];
            }
        }
    }
    return $pos_min;
}

// TERMINARLO, LO TENGO PREPARADO EN EL PAPEL
function colorearArray($array, $n_filas, $n_columnas) {
    $pos_min = posMinArrayBidi($array,$n_filas, $n_columnas);
}