<?php

$contenido = file_get_contents("fichero_ejemplo.txt");
echo "Contenido del fichero: $contenido<br>";
$res = file_put_contents("fichero_salida.txt", "Fichero creado con file_put_contents");

if($res){
    echo "Fichero creado con éxito";
}else{
    echo "Error al crear el fichero";
}

/* No funciona bien porque la carpeta no tienen los permisos necesarios para
 * poder realizarlo. En un principio parece que file_get_contents copia todo 
 * el contenido de un fichero y file_put_contents crea un fichero de 
 * salida con el contenido pasado como parámetro */
