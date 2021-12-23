<?php
$cadena_conexion = "mysql:dbname=empresa;host=127.0.01";
$usuario = 'root';
$clave = '';

try {
    $bd = new PDO($cadena_conexion, $usuario, $clave);
    echo "Conexión realizada con éxito";
    
} catch (PDOException $ex) {
    echo 'Error con la base de datos: '.$ex->getMessage();
}

$stmt = $bd -> prepare("INSERT INTO usuario(nombre, clave, rol) VALUES(:nombre, :clave, :rol);");

$stmt ->bindParam(':nombre', $nombre);
$stmt ->bindParam(':clave', $passw);
$stmt ->bindParam(':rol', $rol);

# insertados una fila
$nombre = "Carmen";
$passw = "741852";
$rol = "1";
$stmt -> execute();

$nombre = "Andrea";
$passw = "654321";
$rol = "0";
$stmt -> execute();

//$datos = array('nombre' => 'Olga', 'clave' => '963852', 'rol' => '2');
//$stmt -> prepare("INSERT INTO usuario(nombre, clave, rol) VALUES(:nombre, :clave, :rol);");
//$stmt->execute($datos);
