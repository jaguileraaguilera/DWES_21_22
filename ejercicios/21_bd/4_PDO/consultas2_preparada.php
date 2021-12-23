<?php

$cadena_conexion = "mysql:dbname=empresa;host=127.0.01";
$usuario = 'root';
$clave = '';

try {
    $bd = new PDO($cadena_conexion, $usuario, $clave);
    echo "Conexión realizada con éxito";
    
    // Consulta preparada con marcador anónimo o de posición
    
    $preparada = $bd->prepare("SELECT nombre FROM usuario WHERE rol = ?;");
    $preparada->execute(array(0)); // Da error porque no hay registros en la bd
    echo "<br>Usuarios con rol 0: ".$preparada->rowcount().'<br>';
    foreach ($preparada as $usu) {
        echo "Nombre: ".$usu['nombre'].'<br>';
    }
    
    // Consulta preparada con parámetros por nombre
    
    $preparada_nombre = $bd->prepare("SELECT nombre FROM usuario WHERE rol = :rol;");
    $preparada_nombre -> execute(array(':rol' => 0));
    echo "<br>Usuarios con rol 0: ". $preparada_nombre->rowCount() .'<br>';
    
    foreach ($preparada_nombre as $usu) {
        echo "Nombre: ".$usu['nombre'].'<br>';
    }
    
} catch (PDOException $ex) {
    echo 'Error con la base de datos: '.$ex->getMessage();
}
