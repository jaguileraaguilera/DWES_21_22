<?php //NO FUNCIONA BIEN, REVISAR

// Anidar los bucles de forma que estén unas comprobaciones dentro de otras

if ((isset($_GET['num1'])) and (isset($_GET['num2']))){
    if ((is_numeric($_GET['num1'])) and (is_numeric($_GET['num2']))){ // Mirarlo
        if ($_GET['num1'] > $_GET['num2']) {
            $ini = $_GET['num1'];
            $fin = $_GET['num2'];

            for ($i = $ini + 1; $i < $fin; $i++) {
                echo $i.'<br>';
             }
        }
    }
}


//if ((isset($_GET['num1'])) and (isset($_GET['num2']))) {
//    echo "No se encuentran los parámetros num1 y num2";
//}
//elseif ((!is_numeric($_GET['num1'])) and (!is_numeric($_GET['num2']))) {
//    echo "num1 y num22 tienen que ser números";
//    return;
//}
//elseif ($_GET['num1'] > $_GET['num2']){
//    echo "num1 es mayor que num2";
//    return;
//}
//
//$ini = $_GET['num1'];
//$fin = $_GET['num2'];
//
//for ($i = $ini + 1; $i < $fin; $i++) {
//    echo $i.'<br>';
//}
