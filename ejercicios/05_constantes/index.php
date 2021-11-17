<?php
/*Para definirlas usamos la función define().
Es habitual escribir los identificadores en mayúsculas. */

define('NOMBRE', 'JAVIER');
echo '<h1>Mi nombre es'.NOMBRE.'</h1>';

//EJEMPLOS DE CONSTANTES PREDIFINIDAS
echo PHP_OS.'<br>'; //so
echo PHP_VERSION.'<br>'; 
echo PHP_EXTENSION_DIR.'<br>'; // directorio donde están instaladas las extensiones
echo __LINE__.'<br>'; // linea en la que estoy
echo __FILE__.'<br>'; // ruta del archivo
echo PHP_INT_MAX.'<br>';
echo PHP_INT_SIZE.'<br>';
echo PHP_INT_MIN.'<br>';

