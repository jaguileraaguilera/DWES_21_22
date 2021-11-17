<?php

class Perro {
    private $tamanio;
    private $raza;
    private $color;
    private $nombre;
    
    public function __construct($tamanio, $raza, $color, $nombre) {
        $this->tamanio = $tamanio;
        $this->raza = $raza;
        $this->color = $color;
        $this->nombre = $nombre;
    }
    
    public function getTamanio() {
        return $this->tamanio;
    }

    public function getRaza() {
        return $this->raza;
    }

    public function getColor() {
        return $this->color;
    }

    public function getNombre() {
        return $this->nombre;
    }
    
    public function setTamanio($tamanio){
        $this->tamanio = $tamanio;
    }

    public function setRaza($raza){
        $this->raza = $raza;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    
    public function mostrar_propiedades(){
        echo 'el tamaño del perro es '.$this->tamanio.', su color '.
                $this->color.', su raza '.$this->raza.' y su nombre: '.
                $this->nombre.'<br>';
    }
    
    public function speak() {
        echo 'Guau! <br>';
    }
}


////Pruebas verificar funcionamiento
//$p1 = new Perro(100, 'labrador', 'beige', 'Curro');
//$p1->mostrar_propiedades();
//$p1->speak();
//$p2 = new Perro(20, 'caniche', 'blanco', 'Cuqui');
