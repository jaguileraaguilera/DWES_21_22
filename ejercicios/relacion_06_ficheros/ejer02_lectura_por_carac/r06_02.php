<?php

/*Recorrer un fichero de texto carácter a carácter y mostrar su contenido. 
 * Usa fgetc() */

if (file_exists("../ejer01_abrir_fich/fichero.txt")) {
    $gestor = fopen("../ejer01_abrir_fich/fichero.txt", "r");
    
    while (($char = fgetc($gestor)) !== false) {
        echo $char;
    }
    
    fclose($gestor);
}
else {
    die("Fichero no encontrado <br>");
}

////Solución Belén
//$fich = fopen("fichero_ejemplo.txt", "r");
//if ($fich === False){
//    echo "No se encuentra el fichero o no se pudo leer<br>";
//}else{
//    while( !feof($fich) ){
//        $car = fgetc($fich);			
//        echo $car;
//    }
//}
//fclose($fich);
