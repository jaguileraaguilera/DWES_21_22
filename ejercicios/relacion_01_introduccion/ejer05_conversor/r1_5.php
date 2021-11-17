<?php
    /*Programa que convierte de euros a dólares*/

    define("EURO_DOLAR", 1.17);
    $euros = 50;
    
    $dolar = EURO_DOLAR * $euros;
    
    echo "$euros euros son $dolar dólares";
