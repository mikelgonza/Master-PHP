<?php

/*
Ejercicio 2:
1. Una función
2. Tiene que validar un email con filter_var
3. Recoger variable por get y validarla
4. Mostar resultado
*/

if (isset($_GET['email'])){

    echo validarEmail($_GET['email']);

} else {

    echo "<h1>Necesitas pasar la variable email</h1>";
}

function validarEmail($email) {

    $status = "NO VALIDO";

    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $status = "VALIDO";
    }

    return $status;
}

?>