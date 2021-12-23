<?php

$cadena_conexion = "mysql:dbname=senderismo;host=127.0.01";
$usuario = 'root';
$clave = '';

try {
    $db = new PDO($cadena_conexion, $usuario, $clave);
} catch (PDOException $ex) {
    echo 'Error con la base de datos: '.$ex->getMessage();
}
