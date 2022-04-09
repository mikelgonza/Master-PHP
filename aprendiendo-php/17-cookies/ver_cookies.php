<?php

/*
Para mostrar el valor de las cookies, tengo que usar $_COOKIE,
una variable superglobal, es un array asociativo
*/

if(isset($_COOKIE['micookie'])){
    echo "<h1>".$_COOKIE['micookie']."</h1>";
} else {
    echo "<h1>Cookie no existe</h1>";
}


if(isset($_COOKIE['unyear'])){
    echo "<h1>".$_COOKIE['unyear']."</h1>";
} else {
    echo "<h1>Cookie no existe</h1>";
}

?>

<a href="crear_cookies.php">Crear Cookies</a>
<a href="borrar_cookies.php">Borrar las Galletas</a>