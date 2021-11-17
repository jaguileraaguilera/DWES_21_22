<?php
/*Usando solo unset() no funciona, además hay que caducarla*/
if ($_COOKIE['unyear']){
    unset($_COOKIE['unyear']);
    setcookie('unyear', '', time()-100); // SE HACE ESTA "CHAPUZILLA" PARA QUE EXPIRE
}

header('Location:ver_cookies.php');
