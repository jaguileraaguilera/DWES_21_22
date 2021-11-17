<?php

function dividir($a, $b) {
    if ($b == 0) {
        throw new Exception('El segundo argumento es 0');
    }
    return $a/$b;
}

try{
    $result = dividir(5,0);
    echo "Result 1 $result <br>";
} catch (Exception $e) {
    echo "Excepcion: ".$e -> getMessage()."<br>";
} finally {
    echo "primer finally<br>";
}

try{
    $result = dividir(5,2);
    echo "Result 2 $result <br>";
} catch (Exception $e) {
    echo "Excepcion: ".$e -> getMessage()."<br>";
} finally {
    echo "segundo finally<br>";
}
