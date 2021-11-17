<?php
    $a = 1;
    echo 'Vamos a sumarle dos a una variable inicializada con el valor '.$a.'<br>';
    echo "PROBAMOS QUE OCURRE SI ES DE ÁMBITO LOCAL EN UNA FUNCIÓN <br>";
    
    // EJEMPLO DE ÁMMBITO LOCAL
    
    function sumale2 () {
        // No tiene acceso a $a
            $b = $a + 2;
        // Por tanto, la variable $a usada en la asignación anterior
        // es una variable nueva que no tiene valor asignado (null)
            echo "la suma es $b porque la variable $a dentro de esta función";
            echo "no está asignado es decir, su valor es null y PHP antes de sumarle"
            . "da el valor 0 <br>";
    }
    
    sumale2();
    
    echo "AHORA PROBAMOS QUE OCURRE SI LA DECLARAMOS COMO GLOBAL <br>";
    
    function sumale2_global() {
        global $a;
        
        $b = $a + 2;
        
        echo "la variable b ahora vale $b porque la he declarado global.";
    }
    sumale2_global();
    