<?php

require __DIR__."/vendor/autoload.php";


// Cargar el autoload
use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();

$html = "<h1>Ejemplo 1: Composer</h1>";
$html .= "<p>Párrafo</p>";

$html2pdf->writeHTML($html);

$html2pdf-> output('pdf_generado.pdf');

