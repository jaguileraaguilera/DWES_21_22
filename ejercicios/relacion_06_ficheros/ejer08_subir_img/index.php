<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Subiendo imágenes</title>
    </head>
    <body>
        <h1>Subida de archivos con PHP</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="archivo"/>
            <input type="submit" value="Enviar"/>
        </form>
        
        <h2>Listado de imágenes</h2>
        <?php
            // Modificarlo para que compruebe si existe el directorio y 
            // sino lo crea
            $gestor = opendir("./images");
            
            if ($gestor):
                while (($image = readdir($gestor)) !== false):
                    if ($image != '.' and $image != '..'):
                        echo "<img src='images/$image' width='200px'/><br/>";
                    endif;
                endwhile;
            endif;
        ?>
    </body>
</html>

