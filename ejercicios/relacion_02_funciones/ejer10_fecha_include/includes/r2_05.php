<?php

/* Función que nos devuelve la fecha de hoy en castellano*/

function fecha_es() {
    
    $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves",
        "Viernes","Sábado");
    
    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio",
        "Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    
     return ($dias[date('w')]." ".date('d')." de "
             .$meses[date('n')-1]. " del ".date('Y'));
    
}
