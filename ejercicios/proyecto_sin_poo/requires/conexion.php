<?php
// Conexión a la base de datos

$servidor = "localhost";
$usuario = "root";
$password = "";
$basededatos = "blog";
$db = mysqli_connect($servidor, $usuario, $password, $basededatos);

mysqli_query($db, "SET NAMES 'utf-8'");
