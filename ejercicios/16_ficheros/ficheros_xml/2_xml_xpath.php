<?php
$datos = simplexml_load_file("empleados.xml");

// el método xpath permite selecionar elementos usando una expresion

$edades = $datos -> xpath("//edad");

foreach ($edades as $valor){
    print_r($valor);
    echo "<br>";
}