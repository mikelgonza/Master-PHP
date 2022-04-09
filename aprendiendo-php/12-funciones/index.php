<?php

/*
Parametros obligatorios
function nombreDeFuncion($parametro1, $parametro2) {
    codigo
}

Para invocarla:
nombreDeFuncion($mi_parametro1, $mi_parametro2);

Parametros opcionales:
podemos predefinir una variable por defecto
y no hace falta pasarla al invocarla

function nombreDeFuncion($parametro1, $parametro2, $parametro3 = 25) {
    codigo
}

en este case se podria invocar con 2 los 3 parametros, ya que el tercero ya estaria definido


*/

// Ejemplo 1
function muestraNombres() {
    echo "Mikel Gozalez <br>";
    echo "Pepe Pérez <br>";
    echo "Maiki Matxin <br>";
    echo "Jacinto Rodríguez <br>";
    echo "<hr>";
}

// invocar funciona
muestraNombres();
muestraNombres();


// Ejemplo 2
function tabla($numero) {
    echo "<h3>Tabla de multiplicar del numero: $numero</h3>";
    for ($i = 1; $i <= 10; $i++){
        $operacion = $numero * $i;
        echo "$numero x $i = $operacion <br>";
    }
}

if (isset($_GET['numero'])) {
    tabla($_GET['numero']);
} else {
    echo "Meta un numero por url";
}

echo "<hr>";

// Ejemplo 3 con return

function calculadora($numero1,$numero2) {
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multi = $numero1 * $numero2;
    $division = $numero1 / $numero2;

    $cadena_texto = ""; 

    $cadena_texto .= "Suma: $suma <br>";
    $cadena_texto .= "Resta: $resta <br>";
    $cadena_texto .= "Multi: $multi <br>";
    $cadena_texto .= "Division: $division <br>";

    return $cadena_texto;
}

// calculadora devuelve un string, asique hacemos echo calculadora()
echo calculadora(10,30);

echo "<hr>";


// Ejemplo 4: Funcion dentro de otra
function getNombre($nombre){
    $texto = "El nombre es: $nombre";
    return $texto;
}

function getApellidos($apellidos){
    $texto = "Los apellidos son: $apellidos";
    return $texto;
}

function devuelveElNombre($nombre, $apellidos) {
    $texto = getNombre($nombre)
                ."<br>"
                .getApellidos($apellidos);
    return $texto;
}

echo devuelveElNombre("Mikel","Gonzalez Ibarrondo");








?>

