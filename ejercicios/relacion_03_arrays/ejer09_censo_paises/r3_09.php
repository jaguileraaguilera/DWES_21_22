<?php
/*Crea un array asociativo (o diccionario) con el censo de población de: 
 * España, Portugal, Francia, Italia y Grecia. */

$censo = [
    'España' => '4 gatos',
    'Portugal' => 'A gato y gracias',
    'Italia' => '2kg de tortelinis',
    'Grecia' => 'La abuela del Oikos'
];

foreach($censo as $pais => $poblacion) {
    echo "$pais : $poblacion <br>";
}