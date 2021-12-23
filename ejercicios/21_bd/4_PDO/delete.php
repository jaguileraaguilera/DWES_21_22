<?php
$cadena_conexion = "mysql:dbname=empresa;host=127.0.01";
$usuario = 'root';
$clave = '';

try {
    $bd = new PDO($cadena_conexion, $usuario, $clave);
    
    //Ejemplo 1
    // Actualizar sin sentencia preparada
    echo 'Ejemplo1 borramos el usuario Carmen <br>';
    $del = "delete from usuario where nombre = 'Carmen';";
    $result = $bd -> query($del);
    // comprobar errores
    if ($result) {
        echo "delete correcto <br>";
        echo "Filas borradas: " . $result -> rowCount() . "<br>";
    }
    
    // ejemplo 2 con sentencia preparada
    echo "Ejemplo 2: Borramos con una sentencia preparada el usuario Angelines <br>";
    $nombre = "Angelines";
    $stmt = $bd -> prepare("delete from usuario where nombre = :nombre;");
    $stmt ->bindParam(':nombre', $nombre);
    $stmt -> execute();
    echo "Filas borradas: " . $stmt ->rowCount();
    
} catch (PDOException $ex) {
    echo 'Error con la base de datos: '.$ex->getMessage();
}