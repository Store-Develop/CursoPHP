<?php
//Variables SCOPE

//Forma 1.
/*function estudiantes (){
    $nombres = 'Juan'; 
    return $nombres;
}
echo estudiantes();*/

//Forma 2.
/*function estudiantes (){
    $nombres = 'Andres'; 
    echo $nombres;
}
estudiantes();*/

//Forma 3.
$edad = 24;
function estudiantes (){
    global $edad; 
    $edad = 25; //toma prioridad la variable mas interna de la función y se impreme.
    echo $edad;
}
estudiantes();

?>