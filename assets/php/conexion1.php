<?php

function regresarConexion(){
    $server = "localhost";
    $usuario = "root";
    $clave = "";
    $base = "deporte_en_cordoba";

    $conexion = mysqli_connect($server, $usuario, $clave, $base) or die ("Hay problemas con la conexión");
    mysqli_set_charset($conexion, 'utf8');
    return $conexion;
}
?>
