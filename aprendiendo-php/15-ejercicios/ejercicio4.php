<?php

/*
Ejercicio 4:
Crear script PHP con 4 variables, 1 tipo array, otra string,
otra int y otra booleana y que imprima un mensaje segun 
el tipo de variable que sea
*/

$matriz = array("Hola tio", 35, 86);
$titulo = "Master en PHP";
$numero = 546;
$verdadero = true;

if (is_array($matriz)){
    echo "<h1>El array es un array</h1>";
}

if (is_string($titulo)){
    echo "<h1>$titulo</h1>";
}

if (is_integer($numero)){
    echo "<h1>$numero</h1>";
}

if (is_bool($verdadero)){
    echo "<h1>El boolean es verdadero</h1>";
}





?>