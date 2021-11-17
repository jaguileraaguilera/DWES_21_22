<?php

/*Vamos a modificar el formulario de login.
 * El nuevo formulario se encarga de comprobar los datos introducidos y, según 
 * sean correctos o no, da acceso al sistema al usuario o muestra  
 * un mensaje de error. Un fichero con un script php se encarga de procesar 
 * un formulario de login. 

 * Como aún no usamos bases de datos simularemos un formulario de login donde 
 * hay que comprobar que el usuario y la contraseña son correctos. 
 * Si el usuario es "usuario" y la clave es "1234", se redirige 
 * a la página de bienvenida. 
 * 
 * En caso contrario, lo hace a una página de error. 
 * Para la redirección usa la función header(), que sirve para escribir 
 * en la cabecera de la respuesta HTTP.
 * 
 * Hay que enviar las cabeceras antes de empezar con el cuerpo de la respuesta. 
 * Esto implica que hay que utilizar la función header() antes de que se 
 * empiece a escribir la salida. Si se intenta llamar a header() después 
 * de haber realizado un echo, se producirá un error. */

if (($_POST['usuario'] == "usuario") and ($_POST['clave'] == "1234")) {
    header("Location:bienvenido.html");
}
else {
    header("Location:error.html");
}