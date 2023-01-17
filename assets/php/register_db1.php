<?php
    include 'conexion_db.php';

    $nombre_usuario = $_POST['nombre'];
    $correo = $_POST['email'];
    $contrasena = $_POST['password'];

    $query = "INSERT INTO clubes (nombre,email, pass) 
              VALUES('$nombre_usuario','$correo','$contrasena')";

    $check_email = mysqli_query($conexion, "SELECT * FROM clubes WHERE email='$correo'");

    if(mysqli_num_rows($check_email) > 0) {
        echo '
            <script>
                alert("Este correo ya esta en uso por favor utilize otro");
                window.location = "../../login.php";
            </script>
        ';

        exit();
    }

    $ejecutar = mysqli_query($conexion,$query);

    if($ejecutar){
        echo '
            <script>
                alert("Registro de Club completado");
                window.location = "../../club.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Usuario no almacenado ocurrio un error");
                window.location = "../../inicio.php";
            </script>
        ';
    }

    mysqli_close($conexion);

?>