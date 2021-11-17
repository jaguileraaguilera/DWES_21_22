<?php include 'includes/cabecera.php';?> <!-- TERMINARLO -->
            <!-- Contenido -->
            <div>
                <h1>Página de inicio</h1>
                <p>Texto de prueba de la página de inicio</p>
            </div>
            <hr>
<?php //include 'includes/pie.php';
/* Pero también podemos hacerlo teniendo en cuenta que
 * si un fichero A incluye al otro B las rutas relativas que aparecen en B
 * se intrepretan a partir del directorio de A.
 * por ello usamos driname(__FILE__) que devuelve la ruta del fichero */
include dirname(__FILE__)."/includes/pie.php";
/* Si en lugar de include usamaos requiere será más estricto
por lo tanto */
?>

