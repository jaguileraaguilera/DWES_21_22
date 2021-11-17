<?php

/* Supongamos que guardamos en una array los datos de los profesores de este 
 * centro educativo.
 * Cada elemento de este array a su vez será otro array asociativo que nos 
 * permitirá almacenar su número de registro personal, su nombre, su apellido/s, 
 * su teléfono, y su fecha de nacimiento.
 * 
 * Se desea:
 *  a) Crear un array con al menos los datos de 3 profesores
 *  b) Crear una función que nos permita mostrar el número de registro 
 *     personal de cada uno de los profesores
 *  c) Modifica la función anterior y conviértela en una función anónima 
 *    (usa array_map()).
 *  d) Crea una función anónima que nos permita mostrar los profesores 
 *     que han nacido a partir de 1990. ( Usa strtotime() y array_filter()

 * NOTA: Ejemplo de uso de funciones anónimas , arrays , array_map() 
 * y array_filter().*/

// a) 
$profesores = [
    ['nrp' => 123, 'nombre' => 'Pepe', 
        'apellido' => 'Molina', 'tlf' => '999999999', 'f_nac' => '1970-03-12'],
    ['nrp' => 345, 'nombre' => 'Juan', 
        'apellido' => 'Pérez', 'tlf' => '111111111', 'f_nac' => '2000-02-20'],
    ['nrp' => 567, 'nombre' => 'Ana', 
        'apellido' => 'López', 'tlf' => '0192837465' , 'f_nac' => '1985-05-12'],
    ['nrp' => 111, 'nombre' => 'Antonio', 
        'apellido' => 'Pérez', 'tlf' => '111666666', 'f_nac' => '1970-07-11']
];


// b) 
// Usando un forech
function ver_nrp($profesores) {
    $lista_nrp = [];
    foreach ($profesores as $profesor) {
        $lista_nrp[] = $profesor['nrp'];
    }
    
    return $lista_nrp;
}

$lista_nrp = ver_nrp($profesores);

echo implode(" ", $lista_nrp);
echo '<br>';

// c) 
// Usando array_map y funciones anónimas
$lista_nrp2 = 
        array_map(function($profesor) {return $profesor['nrp'];},$profesores);

echo implode(" ", $lista_nrp2);
echo '<br>';

// Usando array_map y funciones arrow
$lista_nrp3 = array_map(fn ($profesor) => $profesor['nrp'], $profesores);

echo implode(" ", $lista_nrp3);
echo '<br>';

/* Vamos a sacar de ese array usando funciones anónimas aquellos profesores
 * con un apellido determinado. Usar array_filter() */
$lista_perez = array_filter(
            $profesores, fn($profesor) => $profesor['apellido'] === 'Pérez');

var_dump($lista_perez);
echo '<br>';

// d) HACERLO
$fecha_1970 = strtotime('1990-01-01');
$nac_1970 = array_filter($profesores, fn($profesor, $fecha) => fdsa);
var_dump($nac_1970);
echo '<br>';




