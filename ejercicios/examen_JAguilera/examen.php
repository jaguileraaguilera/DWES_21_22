<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Formulario en PHP</title>
    </head>
    <body>
        <h1>Inserción de vivienda</h1>
        <form action="vivienda_insertada.php" method="POST">
            <fieldset>
                <legend>Introduzca los datos de la vivienda:</legend>
                
                <label for="tipo">Tipo de vivienda</label>
                <input list="tipos" name="tipo" id="tipos_vivienda" />
                <datalist id="tipos_vivienda">
                    <option value="Piso">
                    <option value="Adosado">
                    <option value="Chalet">
                    <option value="Casa">
                </datalist>
                
                <label for="zona">Zona</label>
                <input list="zonas" name="zona" id="zonas_vivienda" />
                <datalist id="zonas_vivienda">
                    <option value="Centro">
                    <option value="Zaidín">
                    <option value="Chana">
                    <option value="Albaicín">
                    <option value="Sacromonte">
                    <option value="Realejo">
                </datalist>
                
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion" />
                
                <label for="num_dorm[]">Número de dormitorios</label>
                <input type="radio" name="num_dorm[]" value="1">
                <input type="radio" name="num_dorm[]" value="2">
                <input type="radio" name="num_dorm[]" value="3">
                <input type="radio" name="num_dorm[]" value="4">
                <input type="radio" name="num_dorm[]" value="5">
                
                <label for ="precio">Precio</label>
                <input type="number" name="precio"> €
                <br>
                
                <label for="tamanio">Tamaño</label>
                <input type="number" name="tamanio"> metros cuadrados
                <br>
                
                Extras (marque los que procedan:)<br>
                <label for="piscina">Piscina</label>
                <input type="radio" name="piscina" value="Piscina">
                
                
                <label for="jardin">Jardín</label>
                <input type="radio" name="jardin" value="Jardin">
                
                
                <label for="garaje">Garaje</label>
                <input type="radio" name="garaje" value="Garaje">
                
                <label for="foto">foto</label>
                <input type="file" name="foto">
                
                <label for="observaciones">Observaciones</label>
                <input type="text" name="observaciones">
       
                <input type="submit" value="Insertar vivienda" />
                
            </fieldset>
            
        </form>
    </body>
</html>


