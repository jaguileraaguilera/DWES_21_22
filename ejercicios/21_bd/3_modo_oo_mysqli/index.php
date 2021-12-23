<?php
$usuario = "root";
$pass = "";
$servidor = "127.0.0.1";
$nombre = "blog";

// conexión al servidor de base de datos

$conn = new mysqli($servidor, $usuario, $pass, $nombre);

if ($conn->connect_error) {
    die("ERROR: No se puede conectar al servidor: ".$conn->connect_error);
}

echo 'Conectado a la base de datos.<br>';

// Se cierra la conexión cuando terminamos
$conn->close();
