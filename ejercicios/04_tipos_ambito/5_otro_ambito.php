<?php

    // Esta variable solo existe en el ámbito principal del script
    $texto = "volverán las oscuras golondrinas...";
    
    function ver_texto() {
        echo "<br>";
        echo "No se ve el contenido de la variable \$\texto,"
        . "pues sólo tiene un ámbito local. Por eso se muestra"
        . "el mensaje de error siguiente:";
        echo "<br>";
        /*Aparece un error en la ejecución de la siguiente sentencia ya que
          esta variable está definida en el ámbito global, no en el ámbito
          local*/
    }
    
    ver_texto();
    
    // modificamos la funcion anterior usando el modificador global dentro 
    // de la función
    
    function ver_texto2() {
        global $texto;
        echo "Ahora se ve el contenido de la variable \$\texto,"
        . "pues tiene un ámbito global";
    }

