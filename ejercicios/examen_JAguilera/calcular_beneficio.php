<?php

function calcular_beneficio($valor, $zona, $metros){
    
    $datos_calculo = Array (
        'Centro' => [0.3, 0.35],
        'Zaidín' => [0.25, 0.28],
        'Chana' => [0.22, 0.25],
        'Albaicín' => [0.2, 0.35],
        'Sacromonte' => [0.22, 0.25],
        'Realejo' => [0.25, 0.28],
    );
    
    foreach ($datos_calculo as $barrio => $lista_coef) {
        if ($zona == $barrio) {
            ($metros < 100) ? $coef = $lista_coef[0] : $coef = $lista_coef[1];
        }
    }
    
    return $valor * $coef;         
}

//echo calcular_beneficio(100000, 'Realejo', 90);