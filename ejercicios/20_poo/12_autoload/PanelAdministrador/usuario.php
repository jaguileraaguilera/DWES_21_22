<?php

namespace PanelAdministrador;

class Usuario {
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre ="Fulano perez";
        $this->email = "fulano@fulano";      
    }
    
    function informacion () {
        echo __NAMESPACE__; //MUESTRA INFO SOBRE EL NAMESPACE
    }
}
