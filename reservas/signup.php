<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animations.css">  
    <link rel="stylesheet" href="css/main.css">  
    <link rel="stylesheet" href="css/signup.css">
        
    <title>Registrarse en Deporte en Córdoba</title>
    
</head>
<body>
<?php

session_start();

$_SESSION["user"]="";
$_SESSION["usertype"]="";

// Set the new timezone
date_default_timezone_set('Europe/Madrid');
$date = date('d-m-Y');

$_SESSION["date"]=$date;



if($_POST){

    $_SESSION["personal"]=array(
        'fname'=>$_POST['fname'],
        'lname'=>$_POST['lname'],
        'address'=>$_POST['address'],
        'nic'=>$_POST['nic'],
        'dob'=>$_POST['dob']
    );

    print_r($_SESSION["personal"]);
    header("location: create-account.php");

}

?>
    <center>
    <div class="container">
        <table border="0">
            <tr>
                <td colspan="2">
                    <p class="header-text">Inicio de sesión - usuarios</p>
                    <p class="sub-text">Añade tus datos para continuar</p>
                </td>
            </tr>
            <tr>
                <form action="" method="POST" >
                <td class="label-td" colspan="2">
                    <label for="name" class="form-label">Nombre: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td">
                    <input type="text" name="fname" class="input-text" placeholder="Nombre" required>
                </td>
                <td class="label-td">
                    <input type="text" name="lname" class="input-text" placeholder="Apellidos" required>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <label for="dirección" class="form-label">Ciudad: (opcional) </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <input type="text" name="address" class="input-text" placeholder="Ej: Córdoba">
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <label for="nic" class="form-label">Deporte favorito: (opcional) </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <input type="text" name="nic" class="input-text" placeholder="Ej: Fútbol - Padel - Fútbol sala">
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <label for="dob" class="form-label">Fecha de nacimiento: (opcional) </label>
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                    <input type="date" name="dob" class="input-text">
                </td>
            </tr>
            <tr>
                <td class="label-td" colspan="2">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="reset" value="Borrar" class="login-btn btn-primary-soft btn" >
                </td>
                <td>
                    <input type="submit" value="Continuar" class="login-btn btn-primary btn">
                </td>

            </tr>
            <tr>
                <td colspan="2">
                    <br>
                    <label for="" class="sub-text" style="font-weight: 280;">Ya tienes una cuenta&#63; </label>
                    <a href="login.php" class="hover-link1 non-style-link">Inicia sesión</a>
                    <a href="#" aria-label="logo"><img src="images/logo.png" alt="Logo deporte en Córdoba" class="logo"></a>
                    <br><br><br>
                </td>
            </tr>

                    </form>
            </tr>
        </table>

    </div>
</center>
</body>
</html>