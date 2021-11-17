<?php
    session_start();
    echo "La variable count vale: ".$_SESSION['count'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Pagina2
        </title>
        <meta charset="utf-8">
    </head>
    <body>
        <br><a href="index.php">Recargar</a>
    </body>
</html>