<?php


// Debugear
$nombre = "Mikel Gonzalez";
var_dump($nombre);

// Fecha
echo date('d-m-Y');

echo "<br/>";

// Hora
echo time();

echo "<br/>";


// Matematicas
echo "Raiz cuadrada de 10: ".sqrt(10)."<br/>";
echo "Numero aleatorio entre 10 y 40: ".rand(10,40)."<br>";
echo "Numero pi: ".pi()."<br>";

// redondear
echo "Redondear: ".round(7.891234, 2)."<br>";


// Más funciones generales
echo gettype($nombre)."<br>"; // dice el tipo de dato

// todas las funciones is_
if (is_string($nombre)){
    echo "la variable es string";
}

echo "<br/>";

// isset($variable) - si existe $variable

// trim borra espacios por delante y por detras, pero no entre el string

$frase = "     mi    contenido   ";
var_dump($frase);
var_dump(trim($frase));


// Eliminar variables / indices de arrays
$year = 2020;
unset($year); // eliminamos la variable

echo "<br/>";


// comprobar variable vacia
$texto = "";
if (empty($texto)){
    echo "la variable texto esta vacia";
} else {
    echo "la variable tiene texto";
}

echo "<br/>";


// Contar caracteres de un string
$cadena = "12345";
echo strlen($cadena);

echo "<br/>";


// Encontrar caracter
$frase = "La vida es bella";
echo strpos($frase, "vida");


echo "<br/>";



// Reemplazar palabras de un string
// reemplazamos vida por moto
$frase = str_replace("vida", "moto", $frase);
echo $frase;

echo "<br/>";

// Mayusculas a minusculas
echo strtolower($frase);
echo "<br/>";
echo strtoupper($frase);





?>