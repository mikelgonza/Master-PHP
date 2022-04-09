<?php

/*
Ejercicio 1:
Crear una sesion con un contador que aumente su valor en uno o disminuya 
en uno en funcion de si el parametro get counter esta a uno o a cero.
*/

session_start();

if (!isset($_SESSION['numero'])){
    $_SESSION['numero'] = 0;
}

if (isset($_GET['counter'])){
    switch ($_GET['counter']) {
        case 0:
            $_SESSION['numero']--;
            break;
        case 1:
            $_SESSION['numero']++;
            break;
    }

}




?>
<h1>El contador es: <?=$_SESSION['numero']?></h1>

<a href="ejercicio1.php?counter=1">Aumentar valor</a><br/>
<a href="ejercicio1.php?counter=0">Disminuir valor</a>