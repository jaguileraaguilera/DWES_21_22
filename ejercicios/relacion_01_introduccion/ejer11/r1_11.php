<?php

/* Imprimir por pantalla todas las tablas de multiplicar de 1 a 10 dentro de 
 * una tabla HTML*/

echo '<table border = "1">';
    echo "<tr>";
        for ($num = 1; $num <= 10; $num++){
            echo "<td>Tabla del $num</td>";
        }
    echo "</tr>";
    echo "<tr>";
    for ($num = 1; $num <= 10; $num++){
        echo "<td>";
                for ($i= 1; $i <= 10; $i++){
                    $prod = $num * $i;
                    echo "$num * $i = $prod <br>";
                }
        echo "</td>";
    }
    echo "</tr>";
echo "</table>";
