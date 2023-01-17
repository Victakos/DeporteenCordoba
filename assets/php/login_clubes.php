<?php

    session_start();
    
    include 'conexion_db.php';

    $correo = $_POST['email'];
    $contrasena = $_POST['password'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM clubes WHERE email='$correo' and pass='$contrasena'");

    if (mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo;
        header("location: ../../club.php");
        exit;
    } else {
        echo '
            <script>
                alert("Club no existe por favor registrese");
                window.location = "../../inicio.php";
            </script>
        ';
        exit;
    }
?>