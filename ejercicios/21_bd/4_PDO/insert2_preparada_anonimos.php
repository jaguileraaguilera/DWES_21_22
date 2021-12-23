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

$ins = $bd -> prepare("INSERT INTO usuario(nombre, clave, rol) VALUES(?, ?, ?);");

# asignamos variable a cada marcador, indexados del 1 al 3
$ins ->bindParam(1, $nombre);
$ins ->bindParam(2, $passw);
$ins ->bindParam(3, $rol);

# insertados una fila
$nombre = "Daniel";
$passw = "123456";
$rol = "1";
$ins -> execute();

$nombre = "Andrea";
$passw = "654321";
$rol = "0";
$ins -> execute();

#mediante un array asociativo:
$datos = array('Pedro', '987654', '0');
$ins = $bd -> prepare("INSERT INTO usuario(nombre, clave, rol) VALUES(?, ?, ?);");
$ins -> execute($datos);

if ($ins) {
    echo 'Registro añadido';
}
else {
    echo "Error";
}
