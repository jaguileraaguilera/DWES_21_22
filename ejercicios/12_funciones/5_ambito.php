<?php

$frase = "Esta es mi frase";
echo $frase;

function mifuncion(){
    global $frase;
    echo "<h1> $frase </h1>";
    $year = 2021;
    return $year;
}

mifuncion();
echo mifuncion();