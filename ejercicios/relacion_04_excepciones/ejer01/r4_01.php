<?php

/* Modifica el ejercicio cálculo de un factorial para que controle si el 
 * argumento es negativo utilizando una excepción.
 * - Usa: InvalidArgumentException */

function factorial($n) {
    if (($n == 0) or ($n == 1)){
        return 1;
    }
    else {
        return $n * factorial($n - 1);
    }
}


$num = 2.5;

try {
    if (!is_int($num)){
        throw new InvalidArgumentException('El número no es entero');
    }
    else {
        if ($num < 0) {
            throw new Exception('El factorial no está definido '
                    . 'para enteros >= 0');
        }
        else {
            $factorial = factorial($num);
        }
    }
} catch (Exception $ex) {
    echo "Excepcion: ".$ex -> getMessage()."<br>";
} catch (InvalidArgumentException $ia) {
    echo "Excepcion: ".$ia -> getMessage()."<br>";
}
finally {
    echo $factorial;
}

