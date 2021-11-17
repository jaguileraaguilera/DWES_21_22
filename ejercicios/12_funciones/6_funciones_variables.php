<?php

function buenasDias() {
    return "Hola, buenos días";
}

function buenasTardes() {
    return "Hola, buenas tardes";
}

function buenasNoches() {
    return "Hola, buenas noches";
}

$horario = "Noches";

$mifuncion = "buenas".$horario;

echo $mifuncion();
