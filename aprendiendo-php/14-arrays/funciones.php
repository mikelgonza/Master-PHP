<?php


$cantantes = ['Jennifer Lopez','Alejandro Sanz','Ramoncín','Andres Pérez'];
$numeros = [1,4,2,7,3,6,5,9];


asort($numeros); //ordena alfabetica y numericamente los valores pero no las posiciones
//arsort($cantantes); //arsort pero a la inversa
sort($numeros); //ordena alfabetica y numericamente valores y posiciones
// rsort lo mismo que sort pero a la inversa


var_dump($cantantes);
var_dump($numeros);

echo "<hr/>";

// Añadir elementos a un array
$cantantes[] = "Natos"; // añade el elemento Natos al final del array
var_dump($cantantes);

echo "<hr/>";

array_push($cantantes, "Pepito"); // otra manera de añadir elementos

var_dump($cantantes);

echo "<hr/>";

// Eliminar elementos
array_pop($cantantes); // elimina el ultimo elemento del array
var_dump($cantantes);

echo "<hr/>";

echo "Quitamos el indice 2";
unset($cantantes[2]); // eliminar el valor 2 del array
var_dump($cantantes);

echo "<hr/>";


// Saca un elemento aleatorio del array
$indice = array_rand($cantantes); // indice coge una posicion aleatoria del array, un numero
echo $cantantes[$indice]; // muestra un valor aleatorio del array, usando el indice de antes


// Dar la vuelta al array
$array_inverso = array_reverse($numeros);
var_dump($array_inverso);


// Buscar dentro de un array
$resultado = array_search('Andres Pérez',$cantantes);
var_dump($resultado);



// Contar numero elementos
echo count($cantantes);
echo "<br>";
echo sizeof($cantantes);




?>