<!doctype html>
<html>
<head>
<title>title</title>
</head>

<body>

    
<?php

session_start();
$_SESSION['variable'] = "soy la variable 1";

?>
    
    <div id="contenido"><?php echo $_SESSION['variable'] ?></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    function ejecutarphp() {
        $.ajax({
            type: 'POST',
            url: 'funcion.php'

        });
    }
    
    function cambio(){
        
        let a = "<?php echo $_SESSION['variable'] ?>";
        console.log(a);
        let cont = document.getElementById("contenido")
        cont.innerHTML = a;
    }
    
    ejecutarphp();
    
    //setTimeout(cambio, 3000);
    
    
    setInterval(cambio, 1000);
    
  


</script>

</body>
</html>