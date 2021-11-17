<?php

/* Crea una función para resolver la ecuación de segundo grado. Esta función recibe los 
coeficientes de la ecuación y devuelve un array con las soluciones. Si no hay soluciones 
reales, devuelve FALSE. */

function resolverEcucacion($a, $b, $c) {
    $discriminante = $b*$b - 4*$a*$c;
    $sols = [];
    if ($discriminante >= 0) {
        $sols[0] = (-$b + sqrt($discriminante)) / (2*$a);
        $sols[1] = (-$b - sqrt($discriminante)) / (2*$a);
        return $sols;
    }
    else {
        return false;
    }
}

$solucion = resolverEcuacion(1, 0, 4);

if ($solucion){
    print_r($solucion);
}
else {
    echo "No tiene sol";
}

 // NO FUNCIONA, NI PUTA IDEA, VOLVER A ESCRIBIRLO
