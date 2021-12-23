<?php
$cadena_conexion = "mysql:dbname=empresa;host=127.0.01";
$usuario = 'root';
$clave = '';

try {
    $bd = new PDO($cadena_conexion, $usuario, $clave);
    
    //Ejemplo 1
    // Actualizar sin sentencia preparada
    echo 'Ejemplo1: <br>';
    $upd = "update usuario set rol = 0 where rol = 1;";
    $result = $bd -> query($upd);
    // comprobar errores
    if ($result) {
        echo "update correcto <br>";
        echo "Filas actualizadas: " . $result -> rowCount() . "<br>";
    }
    
    // ejemplo 2 con sentencia preparada
    echo "Ejemplo con sentencia preparada <br>";
    $codigo = 6;
    $rol = "1";
    $stmt = $bd -> prepare("update usuario set tol = :rol where codigo = :codigo;");
    $stmt ->execute([':codigo' => $codigo, ':rol' => $rol]);
    echo "Filas actualizadas: " . $stmt ->rowCount();
    
} catch (PDOException $ex) {
    echo 'Error con la base de datos: '.$ex->getMessage();
}



