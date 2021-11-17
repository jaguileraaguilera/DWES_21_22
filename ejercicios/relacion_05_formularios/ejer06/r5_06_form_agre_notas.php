<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Formulario en PHP</title>
    </head>
    <body>
        <h1>Agregar alumno y nota</h1>
        <form action="r5_06_procesamiento.php" method="POST">
            <p>
                <label for="alumno">Alumno</label>
                <input type="text" name="alumno" />
            </p>
            <p>
                <label for="nota">Nota</label>
                <input type="number" name="nota" />
            </p>
            <input type="submit" value="Enviar datos" />
        </form>
    </body>
</html>