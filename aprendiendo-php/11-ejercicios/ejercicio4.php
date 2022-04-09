<?php

/*
Ejercicio 4:
Recoger 2 números por url (GET) 
y hacer todas las operaciones básicas de una calculadora
suma, resta, multiplicación y división
*/

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = (int)$_GET['numero1'];
    $numero2 = (int)$_GET['numero2'];

    echo "$numero1 + $numero2 es: ".($numero1 + $numero2)."<br>";
    echo "$numero1 - $numero2 es: ".($numero1 - $numero2)."<br>";
    echo "$numero1 x $numero2 es: ".($numero1 * $numero2)."<br>";
    echo "$numero1 / $numero2 es: ".($numero1 / $numero2)."<br>";
} else {
    echo "<h1>Introduce bien los numeros</h1>";
}

?>