<?php

/*
Ejercicio 3:
Programa que compruebe si una variable esta vacia, y si lo esta rellenarla con texto 
en minusculas y mostarlo en mayusculas y negrita
*/

$texto = "";

if (empty($texto)){
    echo "la variable está vacia la rellenamos con texto<br/>";
    $texto = "hola que tal";
    echo "<strong>".strtoupper($texto)."</strong>";
} else {
    echo "La variable tiene contenido: ".$texto;
}





?>