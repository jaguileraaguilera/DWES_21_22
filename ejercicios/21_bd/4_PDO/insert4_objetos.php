<?php

$cadena_conexion = "mysql:dbname=empresa;host=127.0.01";
$usuario = 'root';
$clave = '';

try {
    $bd = new PDO($cadena_conexion, $usuario, $clave);
} catch (PDOException $ex) {
    echo 'Error con la base de datos: '.$ex->getMessage();
}

echo "Ejemplo1: <br>";
class Usuarios {
    public $nombre;
    public $clave;
    public $rol;
    
    public function __construct($nombre, $clave, $rol) {
        $this->nombre = $nombre;
        $this->clave = $clave;
        $this->rol = $rol;
    }
}
    
$usu = new Usuarios('Margarita', '789456', '2');
$stmt = $bd->prepare("INSERT INTO usuario(nombre, clave, rol) VALUES (:nombre, :clave, :rol);");

if ($stmt->execute((array) $usu)) {
    echo "Se ha creado un nuevo registro";
}
else {
    echo "Ha habido un error en la base de datos";
}
