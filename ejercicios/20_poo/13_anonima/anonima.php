<?php

$saludo = new Class("Hola alumno 2DAW") {
    private $curso = "2DAW"; 
    
    public function __construct($curso) {
        $this->curso = $curso;
    }
    
    public function __toString() {
        return $this->curso;
    }
};

echo $saludo->__toString();