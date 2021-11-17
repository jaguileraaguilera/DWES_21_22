<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Formulario en PHP</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="login_basico.php" method="POST">
            <p>
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" />
            </p>
            <p>
                <label for="clave">contraseña</label>
                <input type="password" name="clave" />
            </p>
            <input type="submit" value="enviar datos" />
        </form>
    </body>
</html>
