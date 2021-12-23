<?php
$cadena_conexion = "mysql:dbname=empresa;host=127.0.01";
$usuario = 'root';
$clave = '';

try {
    $bd = new PDO($cadena_conexion, $usuario, $clave);
    echo "Conexión realizada con éxito <br>";
    $sql = "SELECT nombre, clave, rol FROM usuario";
    $usuarios = $bd->query($sql);
    echo "Número de usuarios: ".$usuarios->rowCount().'<br>'; // Da error porque no hay registros en la bd
    foreach ($usuarios as $usu) {
        echo "Nombre: ".$usu["nombre"]."<br>";
        echo "Clave: ".$usu["clave"]."<br>";
    }
} catch (PDOException $ex) {
    echo 'Error con la base de datos: '.$ex->getMessage();
}
