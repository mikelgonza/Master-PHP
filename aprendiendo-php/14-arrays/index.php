<?php

/*
ARRAYS

Definicion:
$variable = array('dato1','dato2','dato3');
$variable = ['dato1','dato2','dato3'];

Recuperar datos:
$variable[0]; // devolveria dato1
$variable[2]; // devolveria dato3
*/

$pelicula = 'Batman'; // definimos variable con un solo valor

$peliculas = array('Batman','Spiderman','El Señor de los Anillos');
$cantantes = ['Jennifer Lopez','Alejandro Sanz','Ramoncín'];

// arrays asociativos
$personas = array(
    'nombre' => 'Victor',
    'apellidos' => 'Robles',
    'web' => 'mierda.com'
);

echo $personas['apellidos'];

var_dump($personas);

echo "<hr/>";



// Mostrar valores sueltos
echo $peliculas[0];
echo '<br/>';
echo $cantantes[2];
echo '<hr/>';

// Mostar la lista de resultados
echo "<ul>";
for ($i = 0; $i < count($peliculas); $i++) {
    echo "<li>$peliculas[$i]</li>";
}
echo "</ul>";

// foreach
echo "<h1>Recorrido Cantantes con foreach</h1>";

echo "<ul>";

foreach ($cantantes as $cantante) {
    echo "<li>$cantante</li>";
}

echo "</ul";

echo '<hr/>';
echo '<hr/>';



// Arrays multidimensionales

$contactos = array(
    array(
        'nombre' => 'Antonio',
        'email' => 'antonio@gmail.com'
    ),
    array(
        'nombre' => 'Luis',
        'email' => 'luis@gmail.com'
    ),
    array(
        'nombre' => 'Agustín',
        'email' => 'agustin@gmail.com'
    )
);

echo "<h1>Arrays multidimensionales</h1>";
echo $contactos[1]['nombre']; // resultado: Luis

// recorrido con foreach
echo "<h1>Recorrido con foreach</h1>";
foreach ($contactos as $key => $contacto) {
    //var_dump($contacto['nombre']);
    echo "<li>".$contacto['nombre']." - ".$contacto['email']."</li>";
}

?>