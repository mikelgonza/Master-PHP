<?php //include_once 'includes/cabecera.php' 
// once es por si añades dos iguales solo aparece una
?>
<?php //include_once 'includes/cabecera.php' ?>
<?php require 'includes/cabecera.php' 
// require si tiene fallo el include para la ejecucion de la página, 
// también puedes usar require_once
?>


    <!-- Contenido -->
    <div>
        <h2>Esta es la página de inicio</h2>
        <p>Texto de prueba de la página de inicio</p>
    </div>

<?php include 'includes/footer.php' ?>