<?php

/*
Sesion: Almacenar y persistir datos del usuario mientras que navega en un
sitio web hasta que cierra sesion o cierra el navegador
*/

// Iniciar la sesiion
session_start();

// variable normal, la de siempre
$variable_normal = "Soy una cadena de texto";

// variable de sesion, utilizable en cualquier pagina de mi dominio
$_SESSION['variable_persistente'] = "HOLA SOY UNA SESION ACTIVA";

echo $variable_normal."<br/>";
echo $_SESSION['variable_persistente'];







?>