<?php

class Conexion {
    public $cadena_conexion;
    public $usuario;
    public $clave;
    
    public function __construct($cadena_conexion,$usuario, $clave) {
        try {
        $bd = new PDO($cadena_conexion, $usuario, $clave);
        } catch (PDOException $ex) {
            echo 'Error con la base de datos: '.$ex->getMessage();
        }
    }
}

//$cadena_conexion = "mysql:dbname=senderismo;host=127.0.01";
//$usuario = 'root';
//$clave = '';
//
//$conexion = new Conexion($cadena_conexion, $usuario, $clave);