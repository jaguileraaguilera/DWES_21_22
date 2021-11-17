<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Formulario en PHP</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="informacion.php" method="POST">
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" />
            </p>
            <p>
                <label for="correo">Correo</label>
                <input type="text" name="correo" />
            </p>
            <p>
                <label for="tlf">Teléfono</label>
                <input type="text" name="tlf" />
            </p>
            <input type="submit" value="Enviar datos" />
        </form>
    </body>
</html>

