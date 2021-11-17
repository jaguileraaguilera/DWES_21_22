<?php
echo "primer for anidado <br>";

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++){
        echo "i: $i j:$j <br>";
        if ($j == 1){
            break; // solo ejecuta los valores 0 y 1 de j
        }
    }
}

echo "segundo for anidado <br>";

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++){
        echo "i: $i j:$j <br>";
        if ($j == 1){
            break 2; //los dos bucles acaban, solo se produce una iteración
        }
    }
}
