<?php
class Coche {
    public $color;
    protected $marca;
    private $modelo;
    public $velocidad;
    public $caballos;
    public $plazas;
    
    public function __construct($color, $marca, $modelo, $velocidad, $caballos, $plazas) {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballos = $caballos;
        $this->plazas = $plazas;
    }
    
    public function getColor() {
        return $this->color;
    }
    
    public function setColor($color) {
        $this->color = $color;
    }
    
    public function acelerar() {
        $this->velocidad++;
    }
    
    public function frenar() {
        $this->velocidad--;
    }
    
    public function getVelocidad() {
        return $this->velocidad;
    }   
}
