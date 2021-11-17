<?php

/*Muestra una tabla con los 20 primeros números en diferentes bases: 
 * decimal, binario, octal y hexadecimal.
 * Usa  un bucle y printf  para conseguir presentar de distintas formas 
 * la variable que uses en el bucle.*/

echo "<h1>TABLA DE LOS 20 PRIMEROS NÚMEROS EN DIFERENTES BASES</h1>";
echo '<table border = "1">';
    echo "<tr>";
        echo "<td><b>Decimal</b></td>";
        echo "<td><b>Binario</b></td>";
        echo "<td><b>Octal</b></td>";
        echo "<td><b>Hexadecimal</b></td>";
    echo "</tr>";
        for ($num = 0; $num <= 20; $num++){
            echo "<tr>";
                $bin = base_convert($num, 10, 2);
                $oct = base_convert($num, 10, 8);
                $hex = base_convert($num, 10, 16);
                echo "<td>$num</td>";
                echo "<td>$bin</td>";
                echo "<td>$oct</td>";
                echo "<td>$hex</td>";
            echo "</tr>";
        }
echo "</table>";
