<?php
/*CREATE TABLE IF NOT EXISTS rutas (
  id int(11) NOT NULL auto_increment,
  titulo varchar(55) NOT NULL DEFAULT '' ,
  descripcion BLOB ,
  desnivel int(6) UNSIGNED NOT NULL DEFAULT '0' ,
  distancia double NOT NULL DEFAULT '0' ,
  notas blob,
  dificultad smallint unsigned NOT NULL DEFAULT '0' ,
  CONSTRAINT pk_rutas PRIMARY KEY(id),
  KEY titulo (titulo)*/


require_once ("./ruta.php");
require_once ("./helpers.php");
require_once ("./conexion.php");

// Recogemos valores del formulario
if (isset($_POST)) {
    $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : false;
    $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
    $desnivel = isset($_POST['desnivel']) ? $_POST['desnivel'] : false;
    $distancia = isset($_POST['distancia']) ? $_POST['distancia'] : false;
    $notas = isset($_POST['notas']) ? $_POST['notas'] : false;
    $dificultad = isset($_POST['dificultad']) ? $_POST['dificultad'] : false;
}   


// Array de errores
$errores = [];

// VALIDACIONES
// a)titulo
$titulo = test_input($titulo);
filter_var($titulo,  FILTER_SANITIZE_STRING);


$condicion = (!empty($titulo) and !is_numeric($titulo));


if (!$condicion) {
    $errores['titulo'] = "El título no es válido";
}

// b) descripcion
$descripcion = test_input($descripcion);
filter_var($descripcion,  FILTER_SANITIZE_STRING);

$condicion = (!empty($descripcion) and !is_numeric($descripcion));

if (!$condicion) {
    $errores['descripcion'] = "La descripción no es válida";
}

// c) desnivel, distancia y dificultad

if (!is_numeric($desnivel) and (($desnivel < -1000) or ($desnivel > 9000))) {
    $errores['desnivel'] = "Desnivel incorrecto";
}

if (!is_numeric($distancia)) {
    $errores['distancia'] = "Distancia incorrecta";
}

if (!is_numeric($dificultad)) {
    $errores['dificultad'] = "Dificultad incorrecta";
}

// Guardamos la Ruta en la base de datos:

if (count($errores) == 0) {
    $ruta = new Ruta($titulo, $descripcion, $desnivel, $distancia, $notas, $dificultad);
    
    $ins = $db -> prepare("INSERT INTO rutas(titulo, descripcion, desnivel, distancia, notas, dificultad) VALUES(?, ?, ?, ?, ?, ?);");

    # asignamos variable a cada marcador, indexados del 1 al 6
    $ins ->bindParam(1, $titulo);
    $ins ->bindParam(2, $descripcion);
    $ins ->bindParam(3, $desnivel);
    $ins ->bindParam(4, $distancia);
    $ins ->bindParam(5, $notas);
    $ins ->bindParam(6, $dificultad);

    # insertados una fila en la bd
    
    $titulo = $ruta->titulo;
    $descripcion = $ruta->descripcion;
    $desnivel = $ruta->desnivel;
    $distancia = $ruta->distancia;
    $notas = $ruta->notas;
    $dificultad = $ruta->dificultad;
    
    $ins -> execute();
    
    if ($ins) {
    // Redireccionamos al index.php
    header('Location:./index.php');
    }
    else {
        echo "Error";
    }
} else {
    echo "Tras la lectura de errores, retroceda al formulario: <br>";
    foreach($errores as $e) {
        echo $e;
    }
}



