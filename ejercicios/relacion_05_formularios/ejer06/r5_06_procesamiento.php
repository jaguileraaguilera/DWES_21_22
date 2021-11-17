<?php   

// NO FUNCIONA. LA CORRECCION ESTÁ EN LA MOODLE
if (count($notas) != null) {
    $notas = [
    'Marta' => 7.8,
    'Luis' => 5,
    'Lorena' => 6.9,
    'Antonio' => 8.1];
}
    

if (!empty($_POST['alumno']) and !empty($_POST['nota'])){
    $notas[$_POST['alumno']] = $_POST['nota'];
}

var_dump($notas);
var_dump($contador);
require 'r5_06_form_agre_notas.php';
require_once 'tabla.php';
