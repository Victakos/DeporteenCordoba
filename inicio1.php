<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor iniciar sesión");
                window.location = "index1.php";
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
    <title>WELCOME PARE!</title>
</head>
<body>
    <h1>WELCOME TO MY PAGE</h1>
    <a href="assets/php/cerrar_sesion1.php">CERRAR SESION</a>
</body>
</html>