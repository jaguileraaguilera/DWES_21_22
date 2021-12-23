<?php
/*CREATE TABLE IF NOT EXISTS rutas (
  id int(11) NOT NULL auto_increment,
  titulo varchar(55) NOT NULL DEFAULT '' ,
  descripcion BLOB ,
  desnivel int(6) UNSIGNED NOT NULL DEFAULT '0' ,
  distancia double NOT NULL DEFAULT '0' ,
  notas blob,
  dificultad smallint unsigned NOT NULL DEFAULT '0' ,
  CONSTRAINT pk_rutas PRIMARY KEY(id),
  KEY titulo (titulo)*/

class Ruta {
    public $titulo;
    public $descripcion;
    public $desnivel;
    public $distancia;
    public $notas;
    public $dificultad;
    
    public function __construct($titulo, $descripcion, $desnivel, $distancia, $notas, $dificultad) {
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->desnivel = $desnivel;
        $this->distancia = $distancia;
        $this->notas = $notas;
        $this->dificultad = $dificultad;
    }
    
    public function getTitulo() {
        return $this->titulo;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getDesnivel() {
        return $this->desnivel;
    }

    public function getDistancia() {
        return $this->distancia;
    }

    public function getNotas() {
        return $this->notas;
    }

    public function getDificultad() {
        return $this->dificultad;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    public function setDesnivel($desnivel){
        $this->desnivel = $desnivel;
    }

    public function setDistancia($distancia){
        $this->distancia = $distancia;
    }

    public function setNotas($notas){
        $this->notas = $notas;
    }

    public function setDificultad($dificultad){
        $this->dificultad = $dificultad;
    }

}

