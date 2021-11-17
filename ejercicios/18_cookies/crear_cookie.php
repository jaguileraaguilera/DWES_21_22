<?php

// crear cookie formato:
//setcookie("nombre", "valor que solo puede ser texto", caducidad, ruta, dominio);

//cookie básica
setcookie("micookie", "valor de mi primera cookie");

// cookie con expiracion dentro de un año
setcookie("unyear", "valor de mi cookie 365 días", time()+ 60*60*24*365);
// pasado un año al enviarla al servidor esta cooke no funciona y detecta que ha
// caducado. Se pueden ver en el navegador conm F12, Apliaciones -> cookies

// redireccionamos para ver las cookies con el script creado anteriormente
header('Location:ver_cookies.php');

