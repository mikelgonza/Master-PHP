<?php

/*
Ejercicio 2:
Ascribir un programa que añada valores a un array mientras que su
longitud sea menor a 120 y luego mostrarlo por pantalla
*/

$coleccion = array();

for ($i = 0; $i < 120; $i++){
    array_push($coleccion, "elemento-".$i);
}

foreach ($coleccion as $elemento){
    echo $elemento."</br/>";
}





?>