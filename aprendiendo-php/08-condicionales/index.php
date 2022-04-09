<?php

/*
CONDICIONAL IF

if (condicion) {
    instrucciones
} elseif (condicion) {
    otras instrucciones
} else {
    otras instruccion
}

CONDICIONAL SWITCH
switch ($variable) {
    case valor1:
        instruccion
        break;
    case valor2:
        instruccion
        break;
    default:
        instruccion

}

OPERADORES DE COMPARACION
== igual (sin contar el tipo de dato)
=== identico (mismo valor y mismo tipo de dato)
!= diferente
<> diferente
!== no identico
< menos que
> mayor que
<= menos o igual que
>= mayor o igual que

OPERADORES LOGICOS
&& AND
|| OR 
! NOT

GOTO
goto etiqueta;
y el código salta a donde esté definida la etiqueta mas abajo

etiqueta: 
    saltamos a este codigo

*/

// Ejemplo 1
$color = "rojo";

if ($color == "rojo") {
    echo "EL COLOR ES ROJO";
} else {
    echo "El color NO es ROJO";
}

echo "<hr>";

// Ejemplo 2
$year = 2023;

if ($year != 2019) {
    echo "Es un año diferente a 2019";
} else {
    echo "Estamos en 2019";
}

echo "<hr>";

// Ejemplo 3
$nombre = "David Extremadura";
$edad = 17;
$mayoria_edad = 18;

if ($edad >= $mayoria_edad) {
    echo "$nombre es mayor de edad";
} else {
    echo "$nombre no es mayor de edad";
}

echo "<hr>";

// Ejemplo 4
$dia = 7;

if ($dia == 1) {
    echo "lunes";
} elseif ($dia == 2) {
    echo "Martes";
} elseif ($dia == 3) {
    echo "Miercoles";
} elseif ($dia == 4) {
    echo "Jueves";
} elseif ($dia == 5) {
    echo "Viernes";
} else {
    echo "Es FINDE";
}

echo "<br>";

switch ($dia) {
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    default:
        echo "YA ES FINDE";
}

echo "<hr>";

// Ejemplo 5
$edad1 = 18;
$edad2 = 64;
$edad_oficial = 68;

if ($edad_oficial >= $edad1 && $edad_oficial <= $edad2) {
    echo "ESTA EN EDAD DE TRABAJAR";
} else {
    echo "NO ESTA EN EDAD DE TRABAJAR";
}

// Ejemplo 6








?>






