<?php
/* Usaremos una cookie para almacenar el número de veces que un usuario ha 
 * visitado la página. 
 * 
 *  Si la cookie no existe, la crea con valor "1".
 *  Si ya existe lee su valor para mostrar el mensaje y reescribe la variable 
 *  para sumarle 1 al valor actual.
 * 
 * La primera vez que se acceda al script se obtendrá la salida " Bienvenido por 
 * primera vez". La siguiente, "Bienvenido por 2 vez", y así sucesivamente.
 * 
 * Añade un vínculo para borrar la cookie
 * 
 * Recuerda que los navegadores ofrecen la posibilidad de ver las cookies 
 * almacenadas en el ordenador. */

if (!isset($_COOKIE['cuenta_visitas'])){
    setcookie("cuenta_visitas", '1', time() + 60*60*24*365);
    echo 'Bienvenido por primera vez';
}
else {
    $valor = (int) $_COOKIE['cuenta_visitas'] + 1;
    setcookie("cuenta_visitas", (string) $valor, time() + 60*60*24*365);
    echo "Bienvenido por $valor vez";
}

