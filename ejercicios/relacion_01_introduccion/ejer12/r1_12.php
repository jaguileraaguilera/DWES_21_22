<?php

if ((empty($_GET['num1'])) or (empty($_GET['num2']))) {
    echo "No se encuentran los parámetros num1 y num2";
}
elseif ((!is_numeric($_GET['num1'])) and (!is_numeric($_GET['num2']))) {
    echo "num1 y num22 tienen que ser números";
    return;
}
elseif ($_GET['num1'] > $_GET['num2']){
    echo "num1 es mayor que num2";
    return;
}

$ini = $_GET['num1'];
$fin = $_GET['num2'];

for ($i = $ini + 1; $i < $fin; $i++) {
    if ($i % 2 != 0) {
        echo $i.'<br>';
    }
}