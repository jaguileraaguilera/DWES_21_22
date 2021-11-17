<?php
/* Escriba un script PHP que:
 * - Guarde en un array 20 valores aleatorios entre 0 y 100.
 * - En un segundo array, llamado cuadrados, deberá almacenar los cuadrados 
 *   de los valores que hay en el primer array.
 * - En un tercer array, llamado cubo, se deben almacenar los cubos de los 
 *   valores que hay en el primer array.
 * - Por último, se mostrará el contenido de los tres arrays dispuesto en 
 *   tres columnas paralelas.*/

function cuadrado($num) {
    return $num * $num;
}

function cubo($num) {
    return cuadrado($num) * $num;
}

function rellenarArrayAleatorios(&$array, $tope, $min, $max) {
    for ($i = 0; $i < $tope; $i++) {
        $array[] = rand($min, $max);
    }
}


$array = [];
$cuadrados = [];
$cubos = [];

rellenarArrayAleatorios($array, 20, 0, 100);

foreach ($array as $num) {
    $cuadrados[] = cuadrado($num);
    $cubos[] = cubo($num);
}



echo '<table border = "1">';
    echo "<tr>";
        foreach ($array as $num) {
            echo "<td>$num</td>";
        }
    echo "</tr>";
    echo "<tr>";
        foreach ($cuadrados as $num) {
            echo "<td>$num</td>";
        }
    echo "</tr>";
    echo "<tr>";
        foreach ($cubos as $num) {
            echo "<td>$num</td>";
        }
    echo "</tr>";
echo '</table>';

        