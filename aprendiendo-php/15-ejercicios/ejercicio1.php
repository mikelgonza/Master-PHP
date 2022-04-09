<?php

/*
Ejercicio 1:
Hacer un array de 8 numeros que haga lo siguiente:
- Recorrelo y mostrarlo
- Ordenarlo y mostrarlo
- Mostrar su longitud
- Buscar algun elemento, metiendo el numero por la url
*/

// Funcion mostar array
function mostrar($array){
    $resultado = "";

    foreach ($array as $numero) {
        $resultado .= $numero."<br/>"; 
    }

    return $resultado;
}

// Crear array
$numeros = [3,67,18,35,19,66,73,99];

// Recorrer y mostrar
echo "<h1>Recorrer y mostrar</h1>";
echo mostrar($numeros);

// Ordenarlo y mostrarlo
echo "<h1>Ordenar y mostrar</h1>";
sort($numeros);
echo mostrar($numeros);

// Mostrar su longitud
echo "<h1>Mostrar su longitud</h1>";
echo "La longitud del array es de ".count($numeros)." elementos";

// Buscar un elemento
if (isset($_GET['numero'])){
    $busqueda = $_GET['numero'];


    echo "<h1>Buscar en el array el numero $busqueda</h1>";

    $search = array_search($busqueda, $numeros);
    if (empty($search)){
        echo "el numero $busqueda no se encuentra en el array";
    } else {
        echo "el numero $busqueda esta en el array en posicion $search";
    }

} else {
    echo "<h1>No se ha definido numero en la url para buscar</h1>";
}


?>