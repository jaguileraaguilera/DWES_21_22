<?php // NO FURULA HAY QUE REVISARLA

/* Escribe una función que reciba una cadena y comprueba si es una contraseña 
 * válida. Hay que comprobar que tenga: 
 * – Entre 6 y 15 caracteres.
 * – Al menos un número. 
 * – Al menos una letra mayúscula. 
 * – Al menos una letra minúscula. 
 * – Al menos un carácter no alfanumérico*/

//function validaContrasenia($contrasenia) {
//    $numero = false;
//    $mayuscula = false;
//    $minuscula = false;
//    $no_alfanum = false;
//    
//    $extension = 
//            ((strlen($contrasenia) >= 6) and (strlen($contrasenia) <= 15));
//    var_dump($extension);
//    for ($i = 0; $i < strlen($contrasenia); $i++) {
//        if (is_numeric($contrasenia[i])) {
//            $numero = true;
//            var_dump($numero);
//        } else if ($contrasenia[i] == strtoupper($contrasenia[i])) {
//            $mayuscula = true;
//            var_dump($mayuscula);
//        }
//        else if ($contrasenia[i] == strtolower($contrasenia[i])) {
//            $minuscula = true;
//            var_dump($minuscula);
//        }
//        else {
//            $no_alfanum = true;
//            var_dump($no_alfanum);
//        }
//    }
//    $resultado = 
//            ($numero and $mayuscula and $minuscula and $no_alfanum 
//            and $extension) ?
//            true : false;
//    
//    return $resultado;
//    
//}

function valContrasenia($contrasenia) {
    $condiciones = array();
    
    for ($i = 0; $i < 5; $i++) {
        array_push($condiciones, false);
    }
    
    $condiciones[0] = ((strlen($contrasenia) >= 6) 
            and (strlen($contrasenia) <= 15));
    
    for ($i = 0; $i < strlen($contrasenia); $i++) {
        if (is_numeric($contrasenia[$i])) {
            $condiciones[1] = true;
        } 
        else if ($contrasenia[$i] == strtoupper($contrasenia[$i])) {
            $condiciones[2] = true;
        }
        else if ($contrasenia[$i] == strtolower($contrasenia[$i])) {
            $condiciones[3] = true;
        }
        else if (!(((ord($contrasenia[$i]) >= 97) and (ord($contrasenia[$i]) <= 122)) 
                or (((ord($contrasenia[$i]) >= 65) and (ord($contrasenia[$i]) <= 90))) 
                or (((ord($contrasenia[$i]) >= 48) and (ord($contrasenia[$i]) <= 57))))) {
            $condiciones[4] = true;
        }
    }
    var_dump($condiciones);
    
    for ($i = 0; $i < count($condiciones); $i++) {
        if ($condiciones[$i] == false) {
            return false;
        }
    }
    
    return true;
}


// Pruebas
$contrasenia = '#';
$validacion = valContrasenia($contrasenia);
var_dump($validacion);
if ($validacion) {
    echo "La contraseña es válida";
} 
else {
    echo "La contraseña no es válida";
}