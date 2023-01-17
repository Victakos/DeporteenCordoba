<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor iniciar sesión");
                window.location = "inicio.php";
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a tu página</title>
</head>
<body>
    <h1>Bienvenido a deporte en Córdoba</h1>
    <a href="assets/php/cerrar_sesion.php">CERRAR SESION</a>
</body>
</html>