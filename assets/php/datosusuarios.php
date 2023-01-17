<?php
header('Content-Type: application/json');

require("conexion1.php");

$conexion = regresarConexion()


switch ($_GET['accion']){
    case 'agregar':
        $nombre = mysqli_real_escape_string($conexion, $_POST['name']);
        $email = mysqli_real_escape_string($conexion, $_POST['email']);
        $pass = mysqli_real_escape_string($conexion, $_POST['password']);

        $respuesta = mysqli_query($conexion, "insert into usuarios(nombre,email,pass) values('$nombre','$email','$pass')");

        echo json_encode($respuesta);
        break;

    case 'existe':
        // $nombre = mysqli_real_escape_string($conexion, $_POST['name']);
        $email = mysqli_real_escape_string($conexion, $_POST['email']);

        $respuesta = mysqli_query($conexion, "select nombre, email from usuarios where email='$email'");
        $cantidad = mysqli_num_rows($respuesta);
        if ($cantidad == 1){
            echo '{"resultado":"Este mail ya está registrado"}';       
        }else{
            echo '{"resultado":"Mail correcto"}';  
        }
        break;

}
?>