<?php

/*
Ejercicio 3:
Hacer una interfaz de usuario (formulario) con dos inputs y 4 botones
para sumar, restar, dividir y multiplicar
*/

$resultado = false;

if (isset($_POST['numero1']) && isset($_POST['numero2'])) :


    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    if (isset($_POST['sumar'])):
        $resultado = $numero1 + $numero2;
    endif;

    if (isset($_POST['restar'])):
        $resultado = $numero1 - $numero2;
    endif;

    if (isset($_POST['multiplicar'])):
        $resultado = $numero1 * $numero2;
    endif;

    if (isset($_POST['dividir'])):
        $resultado = $numero1 / $numero2;
    endif;

endif;


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>

    <form action="" method="POST">
    <p>Número 1: <input type="number" name="numero1" required="required" pattern="[0-9]+" /></p>
    <p>Número 2: <input type="number" name="numero2" required="required" pattern="[0-9]+" /></p>
    
    <input type="submit" name="sumar" value="+" />
    <input type="submit" name="restar" value="-" />
    <input type="submit" name="multiplicar" value="x" />
    <input type="submit" name="dividir" value="/" />

    </form>

    <?php

        if ($resultado != false):

            echo "<strong>El resultado es: $resultado</strong>";
            
        endif;

    ?>
    
</body>
</html>