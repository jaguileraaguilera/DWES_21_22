<?php
/* Escriba un programa que:
 * - Muestre un grupo de entre 20 y 30 animales al azar.
 * 
 * Se usará un array para almacenar el código de los animales. El número de 
 * elementos del array será el determinado aleatoriamente entre 20 y 30. 
 * Tenga en cuenta que los animales son caracteres con rango Unicode: 
 * 128000 a 128060.
 * 
 * - A continuación, mostrará un animal al azar de los que están incluidos 
 *   en el grupo anterior y lo eliminará del array.
 * 
 * - Por último, mostrará de nuevo el grupo inicial, pero habiendo eliminado 
 *   del grupo los animales que coincidan con el animal suelto (al menos 
 *   habrá uno). También mostrará un mensaje con el número total de animales 
 *   que quedan. En el ejemplo anterior quedarían 21 animales. */

function rellenarArray(&$array, $tope) {
    for ($i = 0; $i < $tope; $i++) {
        $num = (string) rand(128000, 128060);
        $array[] = "&#$num";
    }
}

// Está mal planteado, hay que sacar todos los animales que coincidan con los 
// índice que devuelve array_rand. Repetirlo
$array = [];
rellenarArray($array, rand(20,30));
print_r($array);
$animalito = array_rand($array);
echo "<br> Voy a sacar del array el animalito $array[$animalito] <br>";
unset($array[$animalito]);
print_r($array);
