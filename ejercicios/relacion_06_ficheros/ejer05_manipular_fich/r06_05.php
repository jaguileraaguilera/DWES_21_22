<?php
/* - Crea un fichero de texto con varias líneas.
 * - Ábrelo en modo escritura.
 * - Lee su contenido con fgets() y muestra el contenido.
 * - Cierra el archivo.
 * - Escribe dentro de ese archivo un nuevo texto, recuerda que ahora no tendrá 
 *   que estar abierto en modo lectura.
 * - Copia ese fichero de texto en el mismo directorio con otro nombre.
 * - Renombra el archivo de texto anterior.
 * - Elimina este último archivo. */

if (!file_exists("fichero.txt")) {
    die("Fichero no encontrado <br>");
}
else {
    $gestor = fopen("fichero.txt", "r+");
    
    while($bufer = fgets($gestor) !== false){
        echo $bufer."<br>";
    }
    
    fclose($gestor);
    
    $gestor = fopen("fichero.txt", "a+");
    fwrite($gestor, "Añado al final contenido.");
    fclose($gestor);
    
    $gestor = fopen("fichero.txt", "r+");
    
    while($bufer = fgets($gestor) !== false){
        echo $bufer."<br>";
    }
    
    
    
    
}

