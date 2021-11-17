<?php
/* Escribe un script que almacene un array de 8 números enteros:
 * - a. Recorrerá el array y lo mostrará
 * - b. Lo ordenará y lo mostrará
 * - c. Mostrará su longitud
 * - d. Buscará un elemento dentro del array
 * - e. Buscará un elemento dentro del array, pero por el parámetro que 
 *      llegue a la URL
 * 
 * Para mostrar los elementos del array en cada uno de los apartados se creará 
 * una función llamada mostrarArray(). */

// SE PUEDE HACER SIN BUSCAR EN LA URL 

function mostrarArray($array) {
    print_r($array);
}

// a)
function recorrerArray($array) {
    foreach ($array as $elemento) {
        echo $elemento.', ';
    }
}

// b)
function ordenarArray(&$array) {
    sort($array);
}

// c)
function mostrarLongitud($array) {
    echo count($array);
}

// d)
function buscarElemento($elemento, $array) {
    $encontrado = false;
    
    $i = 0;
    while ((!$encontrado) and ($i < count($array))) {
        ($elemento === $array[$i]) ? $encontrado = true : $i++;
    }
    
    if ($encontrado) {
        return [$i, $elemento];
    }
    else {
        return [$encontrado];
    }
}

// e)
function buscarElementoUrl($busqueda, $array) {
    $elemento = $_GET[$busqueda];
    $encontrado = false;
    
    $i = 0;
    while ((!$encontrado) and ($i < count($array))) {
        ($elemento === $array[$i]) ? $encontrado = true : $i++;
    }
    
    if ($encontrado) {
        return [$i, $elemento];
    }
    else {
        return [$encontrado];
    }
}

// Pruebas
$array = [4,5,6,3,2,1,6,7,8];


//recorrerArray($array);
//ordenarArray($array);
//mostrarArray($array);
//mostrarLongitud($array);
//$busqueda = buscarElemento(5, $array);
//mostrarArray($busqueda);
$buscar = buscarElementoUrl('busca',$array);
mostrarArray($buscar);
