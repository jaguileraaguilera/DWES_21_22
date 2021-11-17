<?php
// Las variables superglobales estan disponibles en todos los ámbitos
// variables del servidor

    echo "ip servidor ".$_SERVER['SERVER_ADDR']."<br>";
    echo "nombre servidor ".$_SERVER['SERVER_NAME']."<br>";
    echo "software servidor ".$_SERVER['SERVER_SOFTWARE']."<br>";
    echo "protocolo ".$_SERVER['SERVER_PROTOCOL']."<br>";
    echo "ruta dentro de htdocs ".$_SERVER['PHP_SELF']."<br>";
    echo "metodo peticion ".$_SERVER['REQUEST_METHOD']."<br>";
    echo "mi navegador ".$_SERVER['HTTP_USER_AGENT']."<br>";