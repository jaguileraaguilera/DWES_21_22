<?php

/*Sea la cadena de caracteres 
$texto = "uno-dos-tres-cuatro-cinco"; 
Crear una página que, a partir de esta cadena, muestre una lista con los elementos de la 
misma que resultan de partirla usando como carácter separador el guión ‘-‘ (figura 2). 
Utilizar las siguientes funciones de PHP: 
• explode 
• count */

$texto = "uno-dos-tres-cuatro-cinco";
$lista = explode('-', $texto);


echo "<h1>Manejo de cadenas</h1>";
echo "<h2>Ejemplo 2</h2>";

echo "<ul>";
for ($i = 0; $i < count($lista); $i++) {
    echo "<li>$lista[$i]</li>";
}
echo "</ul>";