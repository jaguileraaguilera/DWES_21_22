<?php
// Si quiero usar las sesiones tengo que iniciarla en cada archivo
session_start();
echo "La variable local del otro fichero no podré imprimirla";
echo $variable_normal.'<br>';

/*Sin embargo si que muestra el contenido de mi sesión durante toda la ejecucion
 * si a continuación cierro el navegador y vuelvo a abrirlo
 * puede qeu haya perdido la sesión
 * en los nuevos navegadores es posible que se equede abierta */

echo "El contenido de mi sesion si lo tengo disponible: ";
echo $_SESSION['variable_persistente'].'<br>';

