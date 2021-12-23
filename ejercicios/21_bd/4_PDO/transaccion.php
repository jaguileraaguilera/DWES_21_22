<?php
$cadena_conexion = "mysql:dbname=empresa;host=127.0.01";
$usuario = 'root';
$clave = '';

try {
    $bd = new PDO($cadena_conexion, $usuario, $clave);
    
    // Comenzar la transaccion
    $bd ->beginTransaction();
    $ins = "insert into usuario(nombre, clave, rol) values('Fernando', '3333', '1');";
    $result = $bd -> query($ins);
    // se repite la consulta
    // falla porque el nombre es único
    $result = $bd -> query($ins);
    
    if(!$result) {
        echo "Error: " . print_r($bd -> errorinfo());
        // deshace el primer cambio
        $bd -> rollback();
        echo "<br> Transacción anulada <br>";
    }
    else {
        // si hubiera ido bien..
        $bd -> commit();
    }
} catch (PDOException $ex) {
    echo 'Error con la base de datos: '.$ex->getMessage();
}