<?php
/* Sea el siguiente fichero: matriz.txt
 * Se pide:
 * 
 * Recorrer el  fichero con fscanf() de las dos maneras posibles mostrando su 
 * contenido antes de empezar la segunda vuelta sitúa el indicador de posición 
 * de nuevo al principio del fichero usando rewind()*/


if (!file_exists("matriz.txt")) {
    die("Fichero no encontrado <br>");
}
else {
    $gestor = fopen("matriz.txt", "r");
    $formato = "%s\t%s\t%s\t%s\n";
    
    //primera lectura
    while ($linea = fscanf($gestor, $formato)) {
        echo "$linea[0] $linea[1] $linea[2] $linea[3]<br>";
    }
    
    //segunda lectura
    echo '<br>';
    
    rewind($gestor);
    while(!feof($gestor)){
        $num = fscanf($gestor, "%d %d %d %d", $num1, $num2, $num3, $num4 );
        echo "$num1 $num2 $num3 $num4 <br>";
    }
    
    fclose($gestor);
}

//// solucion belén
//$fich = fopen("matriz.txt", "r");
//
//if ($fich === False){
//    echo "No se encuentra el fichero o no se pudo leer<br>";
//}else{
//    while(!feof($fich)){
//        $num = fscanf($fich, "%d %d %d %d");
//        echo "$num[0] $num[1] $num[2] $num[3] <br>";
//    }
//}
//rewind($fich);
//while(!feof($fich)){
//    $num = fscanf($fich, "%d %d %d %d", $num1, $num2, $num3, $num4 );
//    echo "$num1 $num2 $num3 $num4 <br>";
//}
//fclose($fich);