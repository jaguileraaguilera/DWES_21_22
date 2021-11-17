<?php

function MuestraNombres() {
    echo "María <br/>";
    echo "Marcos <br/>";
}

MuestraNombres();


function tablaMultiplicar($num) {
    echo "<h3> Tabla de multiplar del número $num </h3>";
        for ($i = 1; $i <= 10; $i++) {
            $prod = $num * $i;
            echo "$num x $i = $prod <br>";
        }
}

tablaMultiplicar(8);

if (isset($_GET['numero'])) {
    tablaMultiplicar($_GET['numero']);
}
else {
    echo 'No hay número para mostrar su tabla';
}

for ($i = 1; $i <= 10; $i++) {
    tablaMultiplicar($i);
}

function calculadora($a, $b) {
    echo 'Suma: '.($a + $b).'<br>';
    echo 'Resta: '.($a - $b).'<br>';
    echo 'Producto: '.($a * $b).'<br>';
    echo 'Cociente: '.($a / $b);    
}

calculadora(9,8);

function saludar($nombre = "Pedro"){ // Parámetros por defecto
    echo "Hola $nombre <br>";
}

saludar();
saludar('Ana');

function calculadora_2($a, $b, $negrita = false) {  // parámetros opcionales
    if ($negrita) {
        echo "<h1>";
    }
    echo 'Suma: '.($a + $b).'<br>';
    echo 'Resta: '.($a - $b).'<br>';
    echo 'Producto: '.($a * $b).'<br>';
    echo 'Cociente: '.($a / $b);   
    
    if ($negrita) {
        echo "</h1>";
    }
}

calculadora_2(10, 12);
calculadora_2(10,12,false);
calculadora_2(10,12,true);


function devuelveElNombre($nombre) { //return 
    return "El nombre es $nombre"; 
}

devuelveElNombre('Pepe'); // hay que usar echo, si no no lo imprime
echo devuelveElNombre('Pepe');
     