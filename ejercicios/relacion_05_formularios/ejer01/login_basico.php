<?php

/* Escribe un formulario básico de login que pida el usuario y la contraseña. 
 * El script sólo nos mostrará el usuario y la contraseña enviados por el 
 * método POST */

echo "Bienvenido <br>";
echo 'Usuario: '.$_POST['usuario'].'<br>';
echo 'Contraseña: '.$_POST['clave'].'<br>';