<?php

trait Utilidades{
    public function mostrarNombre(){
        echo "<h1>El nombre es ".$this->nombre.'<br>';
    }
}

class Coche {
    public $nombre;
    public $marca;
    
    use Utilidades;
}

class Persona {
    public $nombre;
    public $apellidos;
    
    use Utilidades;
}

$coche = new Coche();

$coche->nombre = "Ferrari Testarrosa";
$coche->mostrarNombre();

$persona = new Persona();

$persona->nombre = "Antonio";

$persona->mostrarNombre();