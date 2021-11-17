<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>r1_4</title>
    </head>
    <body>
        <?php
        
            /* Escribe un programa que muestre en pantalla los nombres en inglés 
             * de los diez primeros números naturales y su correspondiente 
             * traducción al castellano. Las palabras deben de estar 
             * distribuidas en dos columnas. (Uso de la etiqueta <table> 
             * de HTML).*/

            $uno = 'uno';
            $dos = 'dos';
            $tres = 'tres';
            $cuatro= 'cuatro';
            $cinco = 'cinco';
            $seis = 'seis';
            $siete = 'siete';
            $ocho = 'ocho';
            $nueve = 'nueve';
            $diez = 'diez';
            $one = 'one';
            $two = 'two';
            $three = 'three';
            $four = 'four';
            $five = 'five';
            $six= 'six';
            $seven = 'seven';
            $eight = 'eight';
            $nine = 'nine';
            $ten = 'ten';

            echo '<table border ="1">';
                echo "<tr>";
                    echo "<td>$uno</td>";
                    echo "<td>$one</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>$dos</td>";
                    echo "<td>$two</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>$tres</td>";
                    echo "<td>$three</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>$cuatro</td>";
                    echo "<td>$four</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>$cinco</td>";
                    echo "<td>$five</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>$seis</td>";
                    echo "<td>$six</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>$siete</td>";
                    echo "<td>$seven</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>$ocho</td>";
                    echo "<td>$eight</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>$nueve</td>";
                    echo "<td>$nine</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>$diez</td>";
                    echo "<td>$ten</td>";
                echo "</tr>"; 
            echo "</table>";
        ?>
    </body>
</html>
