<?php
// Funciones con Array.
$panas = array('andres','jesus','julian','johan','bryam','pinena','felipe','jose','yirmer' );
$compañeros = array('fabian<br>','sebastian<br>','alejandra<br>' );
//Dividir un array en las diviciones que quieres con Array_chunk(nombre arreglo)
//$funcion = array_chunk($panas, 5);
//Eliminar posiciones de un arreglo apartir de la posición indicada con Array_slice(nombre del arreglo) Eliminar elementos de manera masiva;
//$funcion = array_slice($panas, 5);
//Unir dos Arrays en uno solo con Array_merge(nombre delarreglo, nombre del arreglo dos.)
//$funcion = array_merge($panas, $compañeros);
//Función para eliminar el ultimo elemento de un array Array_pop(nombre del array).
//array_pop($panas);
//Buscar dentro de un Array un elemento en especifico con array_search('PARAMETRO A BUSCAR', $nombre del arreglo).
//$buscar = array_search('johan', $panas);
//Función para invertir un arreglo con Array_reverse(nombre del arreglo).
$revez = array_reverse($panas);
print_r($revez);
?> 