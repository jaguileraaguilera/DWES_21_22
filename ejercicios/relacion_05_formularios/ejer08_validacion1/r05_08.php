<?php

/* Crea un formulario para solicitar el nombre, el teléfono y la dirección de 
 * correo de tus amigos.
 * 
 * - La página solicita los datos y los valida (por ejemplo, que el nombre sólo 
 *   tenga letras, que el número sean 9 números, que la dirección de correo 
 *   contenga la @, un punto y letras inglesas, etc).
 * - Si los datos no son válidos, se solicitan de nuevo indicando los datos no 
 *   válidos. 
 * - Si los datos son válidos, los datos se muestran.
 * 
 * Además de asegurarnos de que los datos recibidos no están vacíos y de aplicar 
 * filter_var() donde corresponda se pide para los input tipo text se construya 
 * una función que se encargue de limpiar los caracteres especiales de estos 
 * datos. Dicha función devolverá el texto pero antes deberá aplicarle 
 * lo siguiente:
 * 
 * - eliminar los espacios antes y después de los datos (trim())
 * - traducir caracteres especiales en entidades HTML (htmlspecialchars()
 * - eliminar  las barras (stripslashes())
 * 
 * ¿Crees que podemos usar esta función para validar los datos tipo email antes 
 * de usar filter_var()? ¿ Y para el teléfono?
 * 
 * Nota: Constará de sólo una página (todo en uno) y la validación sólo se hará 
 * en el servidor. */



