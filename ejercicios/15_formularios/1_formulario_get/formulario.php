<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Formulario en PHP</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="recibir.php" method="GET">
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" />
            </p>
            <p>
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" />
            </p>
            <input type="submit" value="enviar datos" />
        </form>
    </body>
</html>