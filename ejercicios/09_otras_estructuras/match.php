<?php

// Para PHP 8

//echo match (8.0) {
//    '8.0' => "¡Oh no! <br>",
//    8.0 => "Esto es lo que esperaba <br>",
//};

switch (8.0) {
    case '8.0':
        $result = "Oh no! <br>";
        break;
    case 8.0:
        $result = "Esto es lo que esperaba";
        break;
}
