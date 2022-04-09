<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de formularios PHP</title>
</head>
<body>
    <h1>Validar formularios en PHP</h1>

    <?php
        if (isset($_GET['error'])){
            $error = $_GET['error'];
            if($error == 'faltan valores'){
                echo '<strong style="color:red">Introduce todos los datos en todos los campos del formulario</strong>';
            }
            if($error == 'nombre'){
                echo '<strong style="color:red">Introduce bien el nombre</strong>';
            }
            if($error == 'apellidos'){
                echo '<strong style="color:red">Introduce bien los apellidos</strong>';
            }
            if($error == 'edad'){
                echo '<strong style="color:red">Introduce bien la edad</strong>';
            }
            if($error == 'email'){
                echo '<strong style="color:red">Introduce bien el correo</strong>';
            }
            if($error == 'password'){
                echo '<strong style="color:red">Introduce bien la contraseña</strong>';
            }
        }

    ?>

    <form method="POST" action="procesar_formulario.php">
        <label for="nombre">Nombre</label><br/>
        <input type="text" name="nombre" required="required" pattern="[A-Za-z ]+"><br/>

        <label for="apellidos">Apellidos</label><br/>
        <input type="text" name="apellidos" required="required" pattern="[A-Za-z ]+"><br/>

        <label for="edad">Edad</label><br/>
        <input type="number" name="edad" pattern="[0-9]+"><br/>

        <label for="email">Email</label><br/>
        <input type="email" name="email" required="required"><br/>

        <label for="pass">Contraseña</label><br/>
        <input type="password" name="pass" required="required" minlength="5"><br/>

        <input type="submit" value="Enviar" />
    </form>
</body>
</html>