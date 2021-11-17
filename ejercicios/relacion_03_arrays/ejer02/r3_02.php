<?php
/* Crea un script que añada valores a un array mientras que su longitud sea 
 * menor que 120. Después mostrará la información del array por pantalla */

function mostrarArray($array) {
    print_r($array);
}

function agregarValor($valor,&$array) {
    $array[] = $valor;
}


$array = [];

while (count($array) < 120) {
    agregarValor(rand(1,10), $array);
}

mostrarArray($array);
