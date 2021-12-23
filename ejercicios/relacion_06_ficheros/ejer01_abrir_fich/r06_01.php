<?php

/*Crea un script para abrir un fichero de texto para lectura. 
 * 
 * Debes de asegurarte que el fichero existe y en caso contrario mostrar un 
 * mensaje de error. Pon dos ejemplos, con un fichero que existe y con 
 * otro que no existe.*/


if (file_exists("fichero.txt")) {
    $gestor = fopen("fichero.txt", "r");
    echo "El fichero se ha abierto correctamente. <br>";
    fclose($gestor);
}
else {
    die("Fichero no encontrado <br>");
}

if (file_exists("fichero_erroneo.txt")) {
    $gestor = fopen("fichero_erroneo.txt", "r");
    echo "El fichero se ha abierto correctamente. <br>";
    fclose($gestor);
}
else {
    die("Fichero no encontrado <br>");
}


//// Solución Belén
//$fich = fopen("fichero_ejemplo.txt", "r");
//if ($fich === False){
//    echo "No se encuentra fichero_ejemplo.txt<br>";
//}else{
//    echo "fichero_ejemplo.txt se abrió con éxito<br>";
//}
//$fich = fopen("fichero_no_existe.txt", "r");
//if ($fich === False){
//    echo "No se encuentra fichero_no_existe.txt<br>";
//}else{
//    echo " fichero_no_existe.txt se abrió con éxito<br>";
//} 