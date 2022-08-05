<?php
//Funciones en php.
function estudiante($nombre, $apellido, $edad, $escuela){
    echo "nuevo estudiante: $nombre $apellido Edad: $edad Escuela: $escuela";
    
}
estudiante('Juan', 'perez', 24, 'Politecnico Internacional');

function suma($operandoA, $operandoB){
    return $operandoA + $operandoB;
}

$resultado = suma(45, 50);
echo "El resultado de su suma es: $resultado.";
?> 