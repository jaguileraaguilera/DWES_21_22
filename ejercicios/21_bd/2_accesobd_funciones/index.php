<?php

$conexion = mysqli_connect("localhost", "root", "", "pruebaconexion");

if (mysqli_connect_errno()){
    echo "La conexion a la base de datos mysql ha fallado: ".mysqli_connect_error();
}
else {
    echo "Conexion realizada correctamente  <br>";
}

mysqli_query($conexion, "SET NAME 'utf8'");

$notas = mysqli_query($conexion, "SELECT * FROM notas");
echo "<br>";
var_dump($notas);

$query = mysqli_query($conexion, "SELECT * FROM notas");
$notas = mysqli_fetch_assoc($query);
echo "<br>";
var_dump($notas);

while ($nota = mysqli_fetch_assoc($query)) {
    var_dump($nota);
}

$sql = "INSERT INTO notas VALUES(null, 'Nota PHP', 'Esta nota se ha insertado desde PHP')";
$insert = mysqli_query($conexion, $sql);
echo '<hr>';

if ($insert) {
    echo "Datos insertados correctamente";
} else {
    echo "Error ".mysqli_error($conexion);
}

$sql = "DELETE FROM notas WHERE descripcion='Esta nota se ha insertado desde PHP'";
$delete = mysqli_query($conexion, $sql);
echo "<hr>";

if ($delete) {
    echo "Datos borrados correctamente";
} else {
    echo "Error ".mysqli_error($conexion);
}
