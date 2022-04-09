<?php

$resultado = 0;

if (!empty($_POST['numero1']) && !empty($_POST['numero2'])) {

    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    if (isset($_POST['sumar'])){
        $resultado = $numero1 + $numero2;
    }

    if (isset($_POST['restar'])){
        $resultado = $numero1 - $numero2;
    }

    if (isset($_POST['multiplicar'])){
        $resultado = $numero1 * $numero2;
    }

    if (isset($_POST['dividir'])){
        $resultado = $numero1 / $numero2;
    }

    header("Location:ejercicio3.php?resultado=$resultado");

}



?>