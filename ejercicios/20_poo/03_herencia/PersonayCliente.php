<?php

class Persona {
    private $dni;
    private $nombre;
    private $apellidos;
    
    function __construct($dni, $nombre, $apellidos) {
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
    }
    
    function __toString() {
    // Construye lo que se devuelve al realizar un echo
        return "Persona: ".$this->nombre." ".$this->apellidos;
    }
             
            
}

class Cliente extends Persona {
    private $saldo = 0;
    
    function __construct($dni, $nombre, $apellidos, $saldo) {
        parent::__construct($dni, $nombre, $apellidos);
        $this->saldo = $saldo;
    }
}

