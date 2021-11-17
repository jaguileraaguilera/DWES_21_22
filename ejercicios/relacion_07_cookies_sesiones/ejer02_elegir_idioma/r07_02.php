<!--NO FUNCIONA, REPASARLO-->

<!-- Crea un formulario que nos permita al usuario cambiar de idioma y recordar 
 lo que ha elegido en proximas visitas a nuestra web 
 Mejorar para que cambie también la label del idioma -->

<?php
    if (!isset($_COOKIE['idioma']) or $_COOKIE['idioma'] == 'es') {
        $es_checked = "checked";
        $en_checked = "";
    }
    else {
        $es_checked = "";
        $en_checked = "checked";
    }
?>

<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Página en inglés y español</title>
    </head>
    <body>
        <form action="procesamiento.php" method="POST">
            <fieldset>
                <legend>Seleccionar idioma</legend>
                <label for="ingles">English</label>
                <input type="radio" name="idioma" <?php echo $en_checked ?> value ='en' />
                <label for="castellano">Español</label>
                <input type="radio" name="idioma" <?php echo $es_checked ?> value='es'/>
                <input type="submit" value="Enviar datos" />
            </fieldset>
        </form>
    </body>
</html>

<?php
    if (!isset($COOKIE['idioma']) or $COOKIE['idioma'] == 'es') {
        echo 'Hola';
    }
    else {
        echo 'Hello';
    }
?>