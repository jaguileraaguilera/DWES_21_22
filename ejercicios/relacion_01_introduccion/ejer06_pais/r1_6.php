<?php
    /*Crear tres variables: país, habitantes y continente a los que les 
     * darás un valor. Muestra su valor por pantalla junto con el tipo 
     * de dato que tiene cada una de ellas*/

    $pais = "España";
    $habitantes = 47450795;
    $continente = "Europa";
    
    echo "País: $pais, tipo de dato: ".gettype($pais)."<br>";
    echo "Habitantes: $habitantes, tipo de dato: ".gettype($habitantes)."<br>";
    echo "Continente: $continente, tipo de dato: ".gettype($continente)."<br>";
