<?php

interface Ordenador {
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();   
}


class Mac implements Ordenador {
    private $modelo;
    
    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function encender(){
        return 'encendido';
        
    }
    public function apagar(){
        return 'apagado';
    }
    public function reiniciar(){
        return 'reiniciado';
    }
    public function desfragmentar(){
        return 'desfragmentado';
    }
    public function detectarUSB(){
        return 'detectado usb';
    }
}


class Pc implements Ordenador {
    private $modelo;
    private $marca;
    
    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    
    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function encender(){
        return 'encendido';
        
    }
    public function apagar(){
        return 'apagado';
    }
    public function reiniciar(){
        return 'reiniciado';
    }
    public function desfragmentar(){
        return 'desfragmentado';
    }
    public function detectarUSB(){
        return 'detectado usb';
    }
}


$maquintos = new Mac();
$maquintos->setModelo('Macbook Pro 2019');
echo $maquintos->getModelo();

$pc = new Pc();
$pc->setMarca('Dell');
echo '<br>'.$pc->getMarca();
$pc->setModelo('XPS');
echo ' '.$pc->getModelo();

