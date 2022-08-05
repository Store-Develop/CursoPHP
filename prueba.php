<?php
// Ejercicios con array.

$cursos = array('python<br>', 'java<br>', 'php<br>', 'html<br>', 'css<br>' );
echo $cursos[3];
// eliminar o reemplazar valores en un arreglo por medio del indice o posición.
$cursos[3] = 'javascript<br>';
//Añadir valor a un arreglo por posición.
$cursos[5] = 'php<br>';
//Imprimir los valores de un arreglo.
print_r($cursos);
echo count($cursos);

//Otra forma de general un arreglo.
$meses[0] = 'Enero';
$meses[1] = 'Febrero';
$meses[2] = 'Marzo';
$meses[3] = 'Abril';
$meses[4] = 'Mayo';
$meses[5] = 'Junio';
$meses[6] = 'Julio';
$meses[7] = 'Agosto';
$meses[8] = 'Septiembre';
$meses[9] = 'Octubre';
$meses[10] = 'Noviembre';
$meses[11] = 'Diciembre';
echo '<br>Cantidad de elementos en el Array: ' .count($meses);
for ($i=0; $i <count($meses); $i++) { 
    //echo $meses[$i];
    if ($meses[$i] == 'Agosto') {
        echo '<br>Mes de victoria Trabajo como Desarrollador Web.';
    }
}
 //Recorriendo arreglo e imprimiendo el ante penultimo valor.
 $panas = array('andres','jesus','julian','johan','bryam','pinena','felipe','jose','yirmer' );
 $panas[9] = 'lorena';
 $posicion = count($panas) -2;
 //echo $amigos[$posicion];
 //rsort(nombre del arreglo); Invierte una lista y muestra el ultimo valor de primera y el prilero de ultimo.
 // arsort(nombre del arreglo) mantiene el indice que le corresponde por defect a cada valor desde el inicio.
 //sin importar a donde se mueva el valor dentro del mismo Array.
 asort($panas);
 print_r($panas);

?> 