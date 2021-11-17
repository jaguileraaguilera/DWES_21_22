<?php

//iniciar sesion
session_start();

//ejemplo de variable local que solo será visible en este archivo
$variable_normal = "soy una cad de caracteres";
// Se podrá usar en cualquier página de mi dominio
$_SESSION['variable_persistente'] ="soy una sesion activa";

echo $variable_normal."<br>";
echo $_SESSION['variable_persistente'];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>pag principal</title>
    </head>
    <body>
        <a href="pagina1.php">Pagina 1</a>
        <a href="logout.php">Log out</a>
    </body>
</html>