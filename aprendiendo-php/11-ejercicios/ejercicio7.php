<?php

/*
Ejercicio 7:
Mostrar todos los números impares entre dos numeros que nos lleguen por url (GET)
*/


if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = (int)$_GET['numero1'];
    $numero2 = (int)$_GET['numero2'];

    // Comprobar que numero1 es menor que numero2
    if ($numero1 < $numero2){
        echo "Los números impares entre $numero1 y $numero2 son: <br>";

        // mostramos los numeros
        for ($i = $numero1; $i <= $numero2; $i++){

            // comprobamos si el numero es impar para mostrarlo
            if ($i % 2 != 0){
                echo "$i";
                if ($i < $numero2) echo ", ";
            }
        }

    } else {
        echo "El numero1 tiene que ser menor que el numero2";
    }
} else {
    echo "<h1>Introduce bien los numeros</h1>";
}


?>