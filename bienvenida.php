<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor iniciar sesion");
                window.location = "index.php"
            </script>
        ';
        session_destroy();
        die();
    }
   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida-Marcos</title>
</head>
<body>
    <h3>Hola haz ingresado al Inicio, proyecto en desarrollo</h3>
    <a href="php/cerrar_sesion.php">Cerrar sesión</a>
</body>
</html>