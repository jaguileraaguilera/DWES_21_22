<?php
function media($notas) {
    $suma = 0;
    
    foreach ($notas as $alumno => $nota){
        $suma += $nota;
    }
    
    return $suma / count($notas);
}

$media = media($notas);

echo '<table border="1">';
    echo "<tr>";
        echo "<td>Alumno</td>";
        echo "<td>Nota</td>";
    echo "</tr>";
    foreach ($notas as $alumno => $nota){
            echo "<tr>";
                echo "<td>$alumno</td>";
                echo "<td>$nota</td>";
            echo "</tr>";
        }
    echo "<tr>";
        echo "<td>Media</td>";
        echo "<td>$media</td>";
    echo "</tr>";
echo '</table>';

