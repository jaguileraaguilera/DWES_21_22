 <?php

require_once 'helpers.php';
require_once 'conexion.php';

session_start();

// Recoleccion de los datos del formulario
// para dar mayor seguridad usamos mysqli_real_escape_string

if (isset($_POST)) {
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, $_POST['email']) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;
}   

// Array de errores
$errores = [];

// VALIDACIONES
// a)nombre
$nombre = test_input($nombre);
filter_var($nombre,  FILTER_SANITIZE_STRING);

$condicion = (!empty($nombre) and !is_numeric($nombre) and 
        !preg_match("/[0-9]/", $nombre));


if (!$condicion) {
    $errores['nombre'] = "El nombre no es válido";
}

// b) apellidos
$apellidos = test_input($apellidos);
filter_var($apellidos,  FILTER_SANITIZE_STRING);

$condicion = (!empty($apellidos) and !is_numeric($apellidos) and 
        !preg_match("/[0-9]/", $apellidos));


if (!$condicion) {
    $errores['apellidos'] = "Los apellidos no son válidos";
}

// c) email
filter_var($email,  FILTER_SANITIZE_EMAIL);

if (empty($email)) {
    $errores['email'] = "El email no es válido";
}

// d) password
if (empty($password)) {
    $errores['password'] = "Introduzca una contraseña";
}

// Guardamos el usuario en la bd
if (count($errores) == 0) {
    // Primero encriptamos la contraseña
    $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);
    $sql = "INSERT INTO usuarios VALUES (null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE());";
    $guardar = mysqli_query($db, $sql);
    
    if ($guardar) {
        $_SESSION['completado'] = "El registro se ha completado con éxito";
    }
    else {
        $_SESSION['errores']['general'] = "Fallo al guardar el usuario";
    }    
}
else {
    $_SESSION['errores'] = $errores;
}


// Redireccionamos al index.php
header('Location:../index.php/?estilos=../assets/css/estilos.css');
