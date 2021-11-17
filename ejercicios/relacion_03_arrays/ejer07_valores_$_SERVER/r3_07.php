<?php

/* Usar foreach para mostrar todos los valores del array $_SERVER en una tabla 
 * con dos columnas. 
 * La primera columna debe contener el nombre de la variable, 
 * y la segunda su valor */

echo '<table border = "1">';
    foreach ($_SERVER as $clave => $valor) {
        echo '<tr>';
            echo "<td>$clave</td>";
            echo "<td>$valor</td>";
        echo '</tr>';
    }
echo '</table>';