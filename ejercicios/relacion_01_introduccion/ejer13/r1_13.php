<?php

$dado1 = rand(1,6);
$dado2 = rand(1,6);

echo $dado1." ".$dado2.'<br>';

if ($dado1 == $dado2) {
    echo "Ha salido una pareja de iguales";
}
else if ($dado1 > $dado2) {
    echo "El mayor valor es $dado1";
}
else if ($dado1 < $dado2) {
    echo "El mayor valor es $dado2";
}
