<?php

require_once 'coche.php';

$coche = new Coche("Amarillo", "Renault", "Clio", 150, 200, 5);
$coche1 = new Coche("Verde", "Seat", "Panda", 120, 60, 4);

//como es público, podemos cambiar el color sin usar un método:
$coche->color = "Rosa";
