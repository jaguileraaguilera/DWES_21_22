<!--NO FUNCIONA, TENGO QUE REVISARLO-->


<?php
$cadena_conexion = "mysql:dbname=blog;host=127.0.01";
$usuario = 'root';
$clave = '';

try {
    $bd = new PDO($cadena_conexion, $usuario, $clave);
    // Ejemplo 1: Consulta
    echo 'Ejemplos de las diferencias entre bindParam y bindValue <br><br>';
    // Ejemplo con bindParam:
    echo 'Consulta realizada con bindParam: <br>';
    $nom = "Susana";
    $s = $bd -> prepare("SELECT * FROM usuario WHERE nombre = :nombre;");
    $s -> setFetchMode(PDO::FETCH_ASSOC); // Especificamos el fetch mode antes de llamar a fetch()
    $s -> bindParam(':nombre', $nom);
    $nom = "Daniel";
    $s -> execute(); // se ejecutó con el valor WHERE nombre = 'Daniel'
    // Mostramos los resultados
    
    while ($row = $s -> fetch()) {
        echo "Nombre: {$row["nombre"]} <br>";
        echo "Clave: {$row["clave"]} <br>";
        echo "Rol: {$row["rol"]} <br><br>";
    }
    
    // El mismo ejemplo con bindValue:
    echo 'Consulta realizada con binValue: <br>';
    $nom = "Susana";
    $s = $bd ->prepare("SELECT * FROM usuario WHERE nombre = :nombre;");
    $s -> bindValue(':nombre', $nom);
    $nom = 'Daniel';
    $s -> execute(); // Se ejecuto con el nombre 'Susana'
    
    while ($row = $s -> fetch(PDO::FETCH_OBJ)) {
        echo "Nobre: " . $row->nombre . '<br>';
        echo "Clave: " . $row->clave . '<br>';
        echo "Rol: " . $row->rol . '<br>';
    }
    
} catch (PDOException $ex) {
    echo 'Error con la base de datos: '.$ex->getMessage();
}
