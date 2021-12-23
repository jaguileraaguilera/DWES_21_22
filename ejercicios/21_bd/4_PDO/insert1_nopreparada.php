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

$ins = "INSERT INTO usuario(nombre, clave, rol) VALUES('Susana', '44444', '0');";
$result = $bd->query($ins);

if ($result) {
    echo "Se ha añadido un nuevo usuario correctamente <br>";
    echo "Filas insertadas: ".$result->rowcount().'<br>';    
}
else {
    print_r($bd->errorinfo());
}

echo "Código de la fila insertada ".$bd->lastInsertId().'<br>';

