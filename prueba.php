<?php
//Ciclo foreach en php foreach(nombreArreglo as nombreClave => nombreValor).
$futbol = array('barcelona' => 'messi', 'juventus' => 'cuadrado', 'realMadrid' => 'elBicho', 'tottenham' => 'kane');

foreach ($futbol as $dato => $valor) {
    echo $dato.': '.$valor.'; <br>';
}
?> 