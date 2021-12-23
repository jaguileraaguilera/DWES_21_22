<?php
/* - Crea la base de datos dwes, con un usuario alumno, contraseña velazquez. 
 *   Añade las tablas e inserta los datos de ejemplo.
 * 
 * - Realiza un programa que seleccione todos los productos y los muestre 
 *   mediante un desplegable
 * 
 * - Cuando elijas uno de los productos imprimirá en pantalla el número de 
 *   unidades de ese producto en cada una de las tiendas. */


// En tienda1.sql está la ejecución al completo de la base de datos.

$cadena_conexion = "mysql:dbname=dwes;host=127.0.01";
$usuario = 'alumno';
$clave = 'velazquez';

try {
    $bd = new PDO($cadena_conexion, $usuario, $clave);
//    echo "Conexión realizada con éxito";
    
    $sql = "SELECT nombre_corto FROM producto;";
    $productos = $bd -> query($sql);
    
} catch (PDOException $ex) {
    echo 'Error con la base de datos: '.$ex->getMessage();
}

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Base de datos</title>
    </head>
    <body>
        <form method="post" action="stock_tiendas.php" enctype="multipart/form-data">
            <label for="producto">Producto:</label>
            <input list="products" name="producto">
            <datalist id="products">
               <?php
                foreach ($productos as $producto) {
                    echo '<option value="'.$producto[0].'">';
                }
               ?>
            </datalist>
            <input type="submit" value="Mostrar stock">
        </form>
        
    </body>
</html>