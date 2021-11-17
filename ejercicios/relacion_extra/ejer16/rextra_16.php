<?php

$pila = array (
    'cinco' => 5,
    'uno' => 1,
    'cuatro' => 4,
    'dos' => 2,
    'tres' => 3
);

print_r($pila);
asort($pila);
echo '<br>asort: <br>';
print_r($pila);
arsort($pila);
echo '<br>arsort: <br>';
print_r($pila);
ksort($pila);
echo '<br>ksort: <br>';
print_r($pila);
sort($pila);
echo '<br>sort: <br>';
print_r($pila);
rsort($pila);
echo '<br>rsort: <br>';
print_r($pila);
