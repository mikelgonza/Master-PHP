<?php

/*
Variables locales: Se definen dentro de la funcion y no pueden ser usadas fuera

Variables globales: Se declaran fuera de la funcion y están disponibles
dentro y fuera de las funciones
*/

// variable global

$frase = "Hola Mikel";

echo $frase;

function holaMundo() {
    // Hay que declarar la varibale como global para usarla en una funcion
    global $frase;
    echo "<h1>$frase</h1>";

    $year = 2022;
    echo "<h1>$year</h1>";
}

holaMundo();

echo "<hr>";


// Funciones VARIABLES

function buenasDias() {
    return "<h1>Hola!, Buenos dias :)</h1>";
}

function buenasTardes() {
    return "<h1>Hey!! Que tal ha ido la comida?</h1>";
}

function buenasNoches() {
    return "<h1>¿Te vas a dormir ya? Buenas Noches!!</h1>";
}

$horario = "Noches";
$miFuncion = "buenas".$horario;

// llamariamos a la funcion buenasNoches, definida en $horario
echo $miFuncion();











?>