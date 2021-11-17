<?php

/*
 * 
 */

function comprobar_usuario($nombre, $clave) {
    if ($nombre === "usuario" and $clave === "1234"){
        $usu['nombre']="usuario";
        $usu['rol']= 0;
        
        return $usu;
    }
    elseif ($nombre === "admin" and $clave === "1234"){
        $usu['nombre']="admin";
        $usu['rol']= 1;
        
        return $usu;
    }
    else {
        return false;
    }
}

if ($_SERVER["REQUEST METHOD"] == "POST") {
    $usu = comprobar_usuario($_POST["usuario"], $_POST['clave']);
    if ($usu == false){
        $err = true;
        $usuario = $_POST['usuario'];
    }
    else {
        session_start();
        $_SESSION['usuario'] = $_POST['usuario'];
    }
}
?>

<!-- NO ESTA COMPLETO -->

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Formulario en PHP</title>
    </head>
    <body>
        <?php if(isset($_GET["redirigido"])){echo "<p>Haga login para continuar</p>";} ?>
        <?php if(isset($err)){echo "<p>revise usuario y contraseña</p>";} ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <p>
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" id="usuario" value="<?php if(isset($usuario)) echo $usuario;?>" />
            </p>
            <p>
                <label for="clave">Contraseña</label>
                <input type="password" name="clave" />
            </p>
            <input type="submit" value="Enviar datos" />
        </form>
    </body>
</html>

