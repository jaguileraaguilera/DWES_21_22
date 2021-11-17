<?php

/*Escribe un programa que resuelva una ecuación de segundo grado.*/

$a = 1;
$b = -5;
$c = 6;
$discriminante = (($b*$b) - (4*$a*$c));
$x1 = ((-$b + sqrt($discriminante))/(2*$a));
$x2 = ((-$b - sqrt($discriminante))/(2*$a));

echo $x1.'<br>';
echo $x2;

