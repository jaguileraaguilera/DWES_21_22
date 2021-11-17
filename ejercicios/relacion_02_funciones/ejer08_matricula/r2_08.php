<?php
/* Escribe una función que reciba una cadena y comprueba si es una matrícula 
 * válida. Tiene que tener siete caracteres, los cuatro primeros números y 
 * el resto consonantes mayúsculas. */

function validar_matricula($matricula){
    $numeros = (int) substr($matricula, 0, 4);
    $letras = substr($matricula, 4);
    
    $valida = ($letras === strtoupper($letras) and (strlen($letras) == 3) and
            is_int($numeros)) ? true : false;
    
    return $valida;
}

// Pruebas  (matriculas incorrectas: 11111zxc, 1111zxc, 11111ZXC)
$matricula_valida = '1234XVN';
$matricula_incorrecta = '11111ZXC';
$resultado = validar_matricula($matricula_incorrecta);

if ($resultado) {
    echo "Es válida";
} else {
    echo "No es válida";
}
