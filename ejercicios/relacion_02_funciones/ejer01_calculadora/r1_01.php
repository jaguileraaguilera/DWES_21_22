<?php
/* Escribe la función calculador: La función calculador recibe como argumentos 
 * dos números y  la operación que debe de aplicarles ( en realidad, la función 
 * que queremos aplicar). Según que función se le pase como argumento, 
 * devolverá un valor u otro. Suma, resta, multiplicación, etc.*/

function calculador($a, $b, $ope) {
    switch ($ope) {
        case 'suma':
            return ($a + $b);
        case 'resta':
            return ($a - $b);
        case 'producto':
            return ($a * $b);
        case 'cociente':
            return ($a / $b);
        case 'potencia' :
            return ($a ** $b);
        default :
            return "No se ha podido realizar el cálculo.";
    }  
}


//urlencode, hacerlo con comprubaciones por url y factorizando calculador

//Pruebas
$resultado = calculador(9, 8, 'suma');
echo $resultado;
