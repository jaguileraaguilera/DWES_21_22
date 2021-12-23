<?php
$cadena_conexion = "mysql:dbname=blog;host=127.0.01";
$usuario = 'root';
$clave = '';

try {
    $bd = new PDO($cadena_conexion, $usuario, $clave);
    echo "Conexión realizada con éxito";
} catch (PDOException $ex) {
    echo 'Error con la base de datos: '.$ex->getMessage();
}

//$bd = null;
//unset($bd);
