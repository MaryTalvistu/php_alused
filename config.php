<?php

//***protseduuriline***//
//sinu andmed
$db_server = 'localhost';
$db_andmebaas = 'muusikapood';
$db_kasutaja = 'mary';
$db_salasona = 'marisM1984';
//ühendus andmebaasiga
$yhendus = mysqli_connect($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);
//ühenduse kontroll
if (!$yhendus) {
    die('Ei saa ühendust andmebaasiga');
}

?>