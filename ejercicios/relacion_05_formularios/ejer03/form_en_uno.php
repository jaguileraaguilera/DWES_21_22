<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (($_POST['usuario'] === "usuario") and ($_POST['clave'] === '1234')) {
        header("Location:bienvenido.html");
    }
    else {
        $err = true;
    }
}
?>

<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Formulario en PHP</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <?php
            if (isset($err)) {
                echo "<p>Revise usuario y contraseña</p>";
            }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <p>
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" id="usuario" value="<?php if(isset($usuario)){echo $usuario;}?>"/>
            </p>
            <p>
                <label for="clave">Contraseña</label>
                <input type="password" name="clave" id="clave" />
            </p>
            <input type="submit" value="Enviar datos" />
        </form>
    </body>
</html>
