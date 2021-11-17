<?php

function getNombre($nombre) {
    $texto = "El nombre es: $nombre";
    return $texto;
}


function getApellidos($apellidos) {
    $texto = "El apellido es: $apellidos";
    return $texto;
}

function MuestraNombre($nombre, $apellidos) {
    $texto = getnombre($nombre).'<br>'.getapellidos($apellidos);
    return $texto;
}

echo MuestraNombre('Javier', 'Aguilera');

