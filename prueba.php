<?php
//Variables globales
//Variable GlobalS
/*$n1 = 6;
$n2 = 4;

function sumar()
{
    $GLOBALS['s'] = $GLOBALS['n1'] + $GLOBALS['n2'];
}
sumar();
echo $s;*/

//Variable _SERVER
//echo $_SERVER['PHP_SELF'];

$numero = $_GET['numero'];
echo "el numero es: ".$numero;

?>