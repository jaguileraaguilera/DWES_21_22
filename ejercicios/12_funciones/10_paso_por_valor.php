<?php

function duplicar($num) {
    return $num*2;
}

function duplicar2(&$num) { // paso por referencia (&)
    $num *= 2;
}

$numero = 5;

echo duplicar($numero).'<br>';
duplicar2($numero);
echo "$numero";
