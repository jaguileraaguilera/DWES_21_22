<?php

class Persona {
    private $nombre;
    private $edad;
    private $ciudad;
    
    public function __construct($nombre, $edad, $ciudad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }
    
    public function __call($name, $arguments) {
        $prefix_metodo = substr($name, 0, 3);
        
        if ($prefix_metodo == 'get') {
            $nombre_metodo = substr(strtolower($name), 3);
            
            if (!isset($this->$nombre_metodo)){
                return "El metodo que estas invocando no existe";
            }
            
            return $this->$nombre_metodo.'<br>';
        }
        else {
            return "El método que estas invocando no existe";
        }
    }
}

$persona = new Persona('Paco', 66, 'Madrid');
echo 'Nombre: '.$persona->getNombre(); //cuando detecta un método que no existe, ejecuta el __call
echo 'Edad: '.$persona->getEdad();
echo 'Ciudad: '.$persona->getCiudad();
echo $persona->getHOLA(); //como esta propiedad no existe, muestra un mensaje de error

/* El __call, en este caso, sirve para definir los getter que no existen, y los
 * define, jugando con los caracteres que le mandamos sabiendo devolver 
 * el valor que queremos. */