<?php

// $_COOKIE es un array associativo (variable superglobal)

if (isset($_COOKIE['micookie'])){
    echo '<h1>'.$_COOKIE['micookie'].'</h1>';
}
else {
    echo "no existe la cookie";
}

if (isset($_COOKIE['unyear'])){
    echo '<h1>'.$_COOKIE['unyear'].'</h1>';
}
else {
    echo "no existe la cookie";
}

?>

<a href="crear_cookie.php">Crear cookie</a>