<?php

if ((empty($_GET['num1'])) or (empty($_GET['num2']))) {
    echo "No se encuentran los parámetros num1 y num2";
}
if ((!is_numeric($_GET['num1'])) and (!is_numeric($_GET['num2']))) {
    echo "num1 y mun2 tienen que ser números";
    return;
}
echo $_GET['num1'] + $_GET['num2'];


// Ejecución correcta
// http://localhost/ejercicios/10_variableGet/suma.php?num1=12&num2=9

// Ejecución incorrecta
// http://localhost/ejercicios/10_variableGet/suma.php?num1=aasdf&num2=1234