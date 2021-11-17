<?php
/*simple_xml_load_file lee un fichero XML y devuelve un objeto de la clase 
SimpleXMLElement. el fichero se manipula a través de este objeto. */
$datos = simplexml_load_file("empleados.xml");
echo "<br>";

if ($datos == false) {
    echo "Error al leer el archivo";
}
/*Lo recorremos como un array y obtenemos los hijos del elemento raíz*/
foreach ($datos as $valor){
    print_r($valor);
    echo "<br>";
}
