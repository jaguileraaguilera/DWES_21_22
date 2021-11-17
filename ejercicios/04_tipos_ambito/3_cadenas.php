<?php
    
    $nombre = 'Pedro';
    $a = 'Hola $nombre <br>';
    $b = "Hola $nombre <br>";
    
    // usando " concatena automaticamente pero es más lento
    
    echo $a;
    echo $b;
    
    $c = "para imprimir una comilla doble \" hay que poner la barra \"";
    echo $c;
    
    echo '<br>';
    // para depurar
    var_dump($c);
    // muestra el tipo, contenido y longitud

