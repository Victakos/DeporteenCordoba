<?php session_start(); ?>
<?php require_once("assets/php/conexion_db.php"); ?>

<?php
if(isset($_POST["login"])){

if(!empty($_POST['e']) && !empty($_POST['password'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];

$query=mysqli_query($conn, "SELECT * FROM usuarios WHERE username='".$email."' AND password='".$password."'");

    $numrows=mysqli_num_rows($query);
    if($numrows>0){
    while($row=mysqli_fetch_assoc($query))
    {
    $dbusername=$row['username'];
    $dbpassword=$row['password'];
    $dbusertype=$row['usertype'];
    }
    if($username == $dbusername && $password == $dbpassword){

    $_SESSION['session_usertype']=$dbusertype;

    switch ($dbusertype){
    case 1:
        $Usertype = "Panel_Administrador.php";
        $numero = 1;
    break;
    case 2:
        $Usertype = "Panel_Usuario.php";
        $numero = 2;
    break;
    case 3:
        $Usertype = "Panel_Externo.php";
        $numero = 3;
    break;
}
    echo "<script>window.location.href='http://".$_SERVER['SERVER_NAME']."/plataforma/".$Usertype."';</script>";
    exit;
    }
} else {
    $message =  "Nombre de usuario ó contraseña invalida!";
}
} else {
    $message = "Todos los campos son requeridos!";
}
}
?>