<?php // NO FUNCIONA

// Control de valores numericos y uso de isset()

if ((isset($_GET['num1'])) && (isset($_GET['num2']))) {
    if ((!is_numeric($_GET['num1'])) && (!is_numeric($_GET['num2']))) {
        $a = $_GET['num1'];
        $b = $_GET['num2'];
        echo 'Suma: '.($a + $b).'<br>';
        echo 'Resta: '.($a - $b).'<br>';
        echo 'Producto: '.($a * $b).'<br>';
        echo 'Cociente: '.($a / $b);
    }
}

