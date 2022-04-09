<?php

/*
Ejercicio 2:
Mostrar en pantalla todos los números pares del 1 al 100
*/


// Solo mostrando los pares con el contador
for ($i = 2; $i <= 100; $i+=2){
    echo $i;
    if ($i < 100) echo ", ";
}        

echo "<hr>";

// Mostrando los pared en el codigo
for ($i = 1; $i <= 100; $i++){
    // con el operador % hallamos el resto de una división
    // si el nº entre dos, el resto es 0, es par
    if ($i % 2 == 0) {
        echo $i;
        if ($i < 100) echo ", ";
    }
}

?>