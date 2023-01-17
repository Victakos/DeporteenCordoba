<?php
    include 'conexion_db.php';

    $nombre_usuario = $_POST['nombre'];
    $correo = $_POST['email'];
    $contrasena = $_POST['password'];

    $query = "INSERT INTO usuarios(nombre,email, pass) 
              VALUES('$nombre_usuario','$correo','$contrasena')";

    $check_email = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$correo'");

    if(mysqli_num_rows($check_email) > 0) {
        echo '
            <script>
                alert("Este correo ya está registrado en el sistema");
                window.location = "../../registro.php";
            </script>
        ';

        exit();
    }

    $ejecutar = mysqli_query($conexion,$query);

    if($ejecutar){
        echo '
            <script>
                alert("Registro de usuario completado");
                window.location = "../../index.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Usuario no almacenado ocurrio un error");
                window.location = "../../index.php";
            </script>
        ';
    }

    mysqli_close($conexion);

?>