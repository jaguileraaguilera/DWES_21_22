<?php

class Coche {
    // Se puede asignar valores a los atributos por defecto
    public $color = "Rojo";
    public $marca = "Ferrari";
    public $modelo = "California";
    public $velocidad = "300";
    public $potencia = "500";
    public $plazas = "2";
    
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



$coche = new Coche();
echo 'Datos del coche <br>';
var_dump($coche);

echo '<br> La velocidad del coche es: '.$coche->getVelocidad().'<br>';

$coche->setColor("Amarillo");
echo 'El color del coche es: '.$coche->getColor().'<br>';



