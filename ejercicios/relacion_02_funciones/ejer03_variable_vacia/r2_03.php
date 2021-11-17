<?php

/*Programa que compruebe que si una variable esta vacía:
 * - En caso de que lo esté se rellenará con una frase en minúscula y 
 *   a continuación se mostrará por pantalla en mayúscula
 * - Si no lo está se saca el contenido de la variable*/

function comprobar_variable($variable) {
    if (empty($variable)){
        $variable = 'textoRelleno'; 
        echo strtoupper($variable);
    } else {
       var_dump($variable); 
    } 
}

//Pruebas
$variable_vacia;
$variable = 1;

comprobar_variable($variable_vacia);
echo "<br>";
comprobar_variable($variable);