<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios PHP y HTML</title>
</head>
<body>
    <h1>Formulario</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre: </label>
        <p><input type="text" name="nombre" disabled="disabled" /></p>

        <label for="apellido">Apellido: </label>
        <p><input type="text" name="apellido" minlength="3" maxlength="10" required="required" placeholder="Mete tu apellido" /></p>

        <label for="dni">DNI: </label>
        <p><input type="text" name="dni" autofocus="autofocus" pattern="[A-Z ]+" value="VALOR A MANO" /></p>

        <label for="boton">Boton: </label>
        <p><input type="button" name="boton" value="clicame" /></p>

        <label for="sexo">Sexo: </label>
        <p>
            Hombe<input type="checkbox" name="sexo" value="hombre" />
            Mujer <input type="checkbox" name="sexo" value="mujer" />
        </p>

        <label for="continente">Continente: </label>
        <p>
            America<input type="radio" name="continente" value="america" />
            Europa<input type="radio" name="continente" value="europa" />
        </p>

        <label for="color">Color: </label>
        <p><input type="color" name="color" /></p>

        <label for="fecha">Fecha: </label>
        <p><input type="date" name="fecha" /></p>

        <label for="correp">Correo: </label>
        <p><input type="email" name="correo" /></p>

        <label for="archivo">Archivo: </label>
        <p><input type="file" name="archivo" multiple="multiple" /></p>

        <label for="numero">Numero: </label>
        <p><input type="number" name="numero" /></p>

        <label for="contraseña">Contraseña: </label>
        <p><input type="password" name="contraseña" /></p>

        <label for="continente">Fecha: </label>
        <p><input type="date" name="fecha" /></p>

        <label for="web">Pagina web: </label>
        <p><input type="url" name="web" /></p>

        <texarea></textarea><br/>

        Peliculas:
        <select name="peliculas">
            <option value="Spiderman">Spiderman</option>
            <option value="Superman">Superman</option>
            <option value="La jungla de cristal">La jungla de cristal</option>
        </select>


        <input type="submit" value="Enviar" />


    </form>
    
</body>
</html>