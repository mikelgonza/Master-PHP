<?php

/*
WHILE:
primero comprueba la condicion,
si es true ejecuta el codigo y comprueba de nuevo la condición,
si es false sale del bucle

while (condicion) {
    codigo
    codigo
}

DO WHILE:
primero se ejecuta el codigo y luego se comprueba la condicion,
si es true vuelve a ejecutar el codigo y comprueba condicion,
si es false sale del bucle

do {
    codigo
} while (condicion);

FOR:


*/
$numero = 0;

while ($numero <= 100) {
    echo $numero;

    if ($numero != 100) echo ", ";

    $numero++;
}

echo "<hr>";

// Ejemplo

if (isset($_GET['numero'])) {
    $numero = $_GET['numero']; // las variables por GET se reciben como string
    $numero = (int)$_GET['numero']; // Asi lo casteamos, y el GET lo convertimos en int
} else {
    $numero = 1;
}

echo "<h1>Tabla de multiplicar del número $numero</h1>";

$contador = 0;
while ($contador <= 10) {
    echo "$numero x $contador = ".($numero * $contador)."<br>";
    $contador++;
}

// hacemos dump de la variable $numero recibida
//var_dump($numero);



?>