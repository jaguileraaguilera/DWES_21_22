<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Blog de Videojuegos</title>
        <link href= "<?php if (isset(($_GET['estilos']))):
                echo $_GET['estilos'];
            else:
                echo './assets/css/estilos.css';
            endif;
                ?>" 
        type="text/css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>Blog de Videojuegos</h1>
        </header>
        <nav>
            <ul>
                <li>Inicio</li>
                <li>Acción</li>
                <li>Rol</li>
                <li>Deportes</li>
                <li>Responsabilidad</li>
                <li>Contacto</li>
            </ul>
        </nav>
        



