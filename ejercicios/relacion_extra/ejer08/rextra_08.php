<?php

/* Realiza un programa que escoja al azar 10 cartas de la baraja española y que diga 
cuántos puntos suman según el juego de la brisca. Emplea un array asociativo para 
obtener los puntos a partir del nombre de la figura de la carta. Asegúrate de que no se 
repite ninguna carta, igual que si las hubieras cogido de una baraja de verdad. 
Los valores de las cartas son:  
'As' => 11, 'Dos' => 0, 'Tres' => 10, 'Cuatro' => 0, 'Cinco' => 0, 
 'Seis' => 0, 'Siete' => 0, 'Sota' => 2, 'Caballo' => 3, 'Rey' => 4 */

function crearBaraja() {
    $baraja = [];
    
    for ($i = 1; $i <= 10; $i++) {
        $baraja [$i] = 4;
    }
            
    return $baraja;
}

function cojerCartas(&$baraja, $n_cartas) {
    $cogidas = [];
    
    $i = 0;
    while ($i < $n_cartas) {
        $n_azar = rand(1, 10);
        if ($baraja[$n_azar] > 0){
            (array_key_exists($n_azar, $cogidas)) ? 
            $cogidas[$n_azar]++ : $cogidas[$n_azar] = 1;
            $baraja[$n_azar]--;
            $i++;
        }  
    }
    
    return $cogidas;
}

function sumarValores($mano) {
    $valores = array (
        1 => 11,
        2 => 0,
        3 => 10,
        4 => 0,
        5 => 0,
        6 => 0,
        7 => 0,
        8 => 2,
        9 => 3,
        10 => 4
    );
    
    $suma = 0;
    foreach ($mano as $carta => $peso) {
        if (array_key_exists($carta, $valores)) {
            $suma += $valores[$carta] * $peso;
        }
    }
    
    return $suma;
}

function verCartas($mazo) {
    $vista = [];
    $valor_nombre = array(
        1 => 'As',
        2 => 'Dos',
        3 => 'Tres',
        4 => 'Cuatro',
        5 => 'Cinco',
        6 => 'Seis',
        7 => 'Siete',
        8 => 'Sota',
        9 => 'Caballo',
        10 => 'Rey'
    );
    
    foreach ($mazo as $carta => $peso) {
        if (array_key_exists($carta, $valor_nombre)) {
            $vista[$valor_nombre[$carta]] = $peso;
        }
    }
    
    return $vista;
}



$baraja = crearBaraja();
echo 'Baraja: ';
print_r(verCartas($baraja));
echo '<br>';

$mano = cojerCartas($baraja, 10);
echo 'Mano: ';
print_r(verCartas($mano));
echo '<br>';

$suma = sumarValores($mano);
echo "Suman $suma puntos <br>";
