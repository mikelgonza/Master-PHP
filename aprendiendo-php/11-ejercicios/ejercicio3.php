<?php

/*
Ejercicio 3:
Imprimir en pantalla los cuadrados de los 40 primeros numeros naturales (del 1 al 40)
PD: Utilizar bucle While

*/

$numero = 1;

while ($numero <= 40) {
    echo "El cuadrado de $numero es: ".($numero*$numero)."<br>";
    $numero++;
}

echo "<hr>";

// Con FOR

for ($i = 1; $i <= 40; $i++){
    echo "El cuadrado de $i es: ".($i*$i)."<br>";
}

?>