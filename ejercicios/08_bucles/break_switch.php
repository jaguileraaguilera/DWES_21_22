<?php

$i = 0;
while ($i < 2) {
    switch ($i){
        case 0 :
            echo "Es un cero <br>";
            break 2; // sale del switch y del bucle
        case 1:
            echo "Es un uno <br>";
            break;
    }
    $i++;
}

