<?php

/*
Ejercicio 5:
Crear un array con el contenido de la tabla:
ACCION  AVENTURA    DEPORTES
GTA     ASSASINS    FIFA19
COD     CRASH       PES19
PUBG    POP         MOTOGP19

Cada fila debe ir en ficheros diferentes
*/

$tabla = array(
    "ACCION" => array("GTA5", "COD", "PUBG"),
    "AVENTURA" => array("ASSASINS", "CRASH", "POP"),
    "DEPORTES" => array("FIFA19", "PES19", "MOTOGP 19")
);

$categorias = array_keys($tabla);
?>

<table border = "1">
    <?php require_once 'ejercicio5/encabezado.php'; ?>
    <?php require_once 'ejercicio5/fila1.php'; ?>
    <?php require_once 'ejercicio5/fila2.php'; ?>
    <?php require_once 'ejercicio5/fila3.php'; ?>
    
    
    

</table>
