<?php

/*
TIPOS DE DATOS:
entero (int / integer) = 99
coma flotante / decimal (float / double) = 3.45
cadenas (string) = "Hola soy Mikel"
boleano (bool) = 1 0 true false
null
coleccion de datos (array)
objetos
*/

$numero = 100;
$decimal = 27.9;
$texto = "Hola, muestro el numero $numero".'</br>';
$texto2 = 'Hola muestro el numero '.$numero.'</br>';
$verdadero = true;
$nula = null;

echo $texto;
echo $texto2;


echo gettype($numero);
echo gettype($decimal);
echo gettype($texto);
echo gettype($verdadero);
echo gettype($nula);

// Debuguear
$mi_nombre[] = "Mikel Gonzalez";
$mi_nombre[] = "Antonio Martinez";

var_dump($mi_nombre);

?>