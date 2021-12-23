<?php

/* clase abstracta ser vivo -> nacer, crecer, reproducirse, morir. clase animal
 * en un fichero aparte vamos a hacer una interfaz llamada Ianimal, 
 * que va a obligar a que todos los animales anden y hablen.*/

abstract class SerVivo {
    public function nacer() {
        echo'He nacido';
    }
    
    public function crecer(){
        echo 'Estoy creciendo';
    }
    
    public function reproducirse(){
        echo 'Me reproduzco';
    }
    
    public function morir(){
        echo 'He muerto :(';
    }
    
}


require_once 'Ianimal.php';


abstract class Animal extends SerVivo implements Ianimal {
    abstract public function andar();
    abstract public function speak();
}


class Perro extends Animal {
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
    
    public function andar() {
        echo 'Estoy andando';
    }
}


$perro = new Perro(50, 'bodeguero', 'varios', 'Curro');
$perro->speak();
$perro->andar();
$perro->reproducirse();