<?php
$var1 = 100;
$var2 = &$var1; //por referencia
$var3= $var1; // por copia

echo "var2 vale $var2 <br>"; // muestra 100

$var2 = 300; // cambia el valor de $var2
echo "al hacerlo por referencia var1 cambia a $var1 <br>";
$var3 = 400; //este cambio no afecta a var1
echo "por valor no cabia var1 $var1";

?>

