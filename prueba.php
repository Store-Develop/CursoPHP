<?php

//Varibles tipo string, (cadena de texto)
$nombre = 'Juan';
$apellido = 'perez';

//Variables tipo number
$numero = 3;
$numero2 = 3.2;

//impresión de en pantalla se puede utilizar *echo* y se puede utilizar *print*
//impresion variable a variable
print $nombre;
print $numero;

//Impresión de variables individul o anidadas en php
// con las comillas dobles se puede ingresar las variables junto al texto.
echo "Nombre completo: $nombre, $apellido";

//Con comillas sencillas toca concatenar las variables
echo 'Nombre: '.$nombre. ' '.$apellido;

//Constantes en PHP
define('curso', 'PHP');
echo curso;

/*
Esto nos marca un error debido ya es una constante y su valor no puede ser modificado.
define('curso', 'Python');
echo curso;
*/


// Condicionales php
$numero_uno = 5;
$numero_dos = 10;

if ($numero_uno < $numero_dos) {
    echo 'Curso de php bb';
}

elseif($numero_uno == $numero_dos){
    echo "El numero $numero_uno es igual al $numero_dos";
}else{
    echo 'Curso de python';
}

//switch
$cursoS = 'java';
switch ($cursoS) {
    case 'php':
        echo 'Lunes y Martes';
        break;
    case 'java':
            echo 'Miercoles';
        break;
    case 'python':
        echo 'jueves';
        break;
    case 'javascript':
        echo 'viernes';
        break;
    default:
        echo 'Lenguaje no matriculado este semestre.';
        break;
}

//Ciclos en php

// while

$numeroE = 1;
while ($numeroE <= 10) {
    echo $numeroE;

    $numeroE += 1;
}

// do while
do {
    echo $numeroE;
    $numeroE += 2;
} while ($numeroE <= 30);

// Ciclo for

for ($numeroE=0; $numeroE <= 50; $numeroE += 5) { 
    echo $numeroE;
}


//Arrays, Vectores, Arreglos en php
//Array normal
$dias = array('Lunes <br>','Martes <br>', 'Miercoles <br>', 'Jueves <br>', 'viernes <br>', 'Sabado <br>', 'Domingo <br>');
//Formas de imprimir un array 1. var_dump
var_dump($dias);
// 2 print_r
print_r($dias);


//array asociativo
$estudiante = array('nombre' => 'Juan<br>', 'apellido' => 'Perez<br>', 'Edad' => 24 );
print_r($estudiante);
echo $estudiante[3];

?> 