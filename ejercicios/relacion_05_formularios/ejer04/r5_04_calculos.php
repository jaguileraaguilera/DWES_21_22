<?php 
if (!empty($_REQUEST['base']) and !empty($_REQUEST['altura'])){
    echo '<br> Área = '.$_REQUEST['base']*$_REQUEST['altura'] / 2;
}

require_once 'r5_04_formulario.php';

