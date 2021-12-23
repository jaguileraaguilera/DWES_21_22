<?php

require_once 'autoload.php';

// Espacios de nombre y paquetes
use MisClases\Usuario, MisClases\Categoria, MisClases\Entrada;
use PanelAdministrador\Usuario as UsuarioAdmin;

class Principal {  //defino una clase para gestionarlo
    public $usuario;
    public $categoria;
    public $entrada;
    
    public function __construct () {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
    }
    
    public function getUsuario() {
        return $this->usuario;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getEntrada() {
        return $this->entrada;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function setEntrada($entrada) {
        $this->entrada = $entrada;
    }
}

$principal = new Principal();
echo 'Usuario del paquete MisClases';
var_dump($principal->usuario);

$usuario = new UsuarioAdmin();
echo "<br>Usuario del paquete PanelAdmin";
var_dump($usuario);
echo "<br>el Namespace es: ";

//buscar si existe un método
echo '<br>Comprueba si esta el metodo setApellidos';

$metodos = get_class_methods($principal);
$busqueda = array_search('setApellidos', $metodos);
var_dump($busqueda);

echo 'compruebo si existe la clase Usuari2o';
$clase = @class_exits('PanelAdministrador/Usuari2o');// al poner la arroba no saca los errores en caso de no existir
if($clase) {
    echo "la clase no existe";
}
else {
    echo "la clase existe";
}
