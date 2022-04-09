<?php

/*
FOR:
se repite el bucle mientras se cumpla la condicion

for (contador, condicion, actualizat contador) {
    codigo
    // Podemos poner una condicion que rompa el bucle con un break, si se cumple 
    if (condicion){
        break;
    }
}

*/

$resultado = 0;

for ($i = 0; $i <= 100; $i++) {
    $resultado += $i; 
    echo "<p>$resultado</p>";
}

echo "<h1>El resultado es: $resultado</h1>";





?>