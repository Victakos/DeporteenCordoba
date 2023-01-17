<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión - Deporte en Córdoba</title>
    <meta name="title" content="Deporte en Córdoba">
    <meta name="description" content="Deporte en Córdoba, todo el deporte de Córdoba al alcance de un click">
    
    <link rel="icon" type="image/png" sizes="32x32" href="images/logo32x32.png">
    <link rel="stylesheet" href="css/animations.css">  
    <link rel="stylesheet" href="css/main.css">  
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">   
</head>

<body>
    <?php
    session_start();

    $_SESSION["user"]="";
    $_SESSION["usertype"]="";
    
    // Ponemos por defecto la hora de españa
    date_default_timezone_set('Europe/Madrid');
    $date = date('d-m-Y');

    $_SESSION["date"]=$date;
    
    //Esta es la conexión de nuestra base de datos
    include("connection.php");


    if($_POST){

        $email=$_POST['useremail'];
        $password=$_POST['userpassword'];
        
        $error='<label for="promter" class="form-label"></label>';

        $result= $database->query("select * from webuser where email='$email'");
        if($result->num_rows==1){
            $utype=$result->fetch_assoc()['usertype'];
            if ($utype=='p'){
                $checker = $database->query("select * from usuarios where pemail='$email' and ppassword='$password'");
                if ($checker->num_rows==1){


                    //   Este es para el dashbord de los usuarios
                    $_SESSION['user']=$email;
                    $_SESSION['usertype']='p';
                    
                    header('location: usuarios/index.php');

                }else{
                    $error='<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Wrong credentials: Invalid email or password</label>';
                }

            }elseif($utype=='a'){
                $checker = $database->query("select * from admin where aemail='$email' and apassword='$password'");
                if ($checker->num_rows==1){


                    //   Admin dashbord
                    $_SESSION['user']=$email;
                    $_SESSION['usertype']='a';
                    
                    header('location: admin/index.php');

                }else{
                    $error='<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Email o contraseña incorrecta</label>';
                }


            }elseif($utype=='d'){
                $checker = $database->query("select * from clubes where docemail='$email' and docpassword='$password'");
                if ($checker->num_rows==1){


                    //   clubes dashbord
                    $_SESSION['user']=$email;
                    $_SESSION['usertype']='d';
                    header('location: clubes/index.php');

                }else{
                    $error='<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">Email o contraseña incorrecta</label>';
                }

            }
            
        }else{
            $error='<label for="promter" class="form-label" style="color:rgb(255, 62, 62);text-align:center;">No hay ningún usuario o club asociado a ese email</label>';
        }






        
    }else{
        $error='<label for="promter" class="form-label">&nbsp;</label>';
    }

    ?>





    <center>
    <div class="container">
        <table border="0" style="margin: 0;padding: 0;width: 60%;">
            <tr>
                <td>
                    <p class="header-text">Iniciar Sesión</p>
                </td>
            </tr>
        <div class="form-body">
            <tr>
                <td>
                    <p class="sub-text">Reservas, seguimientos de clubes y muchos más, accede a tu cuenta</p>
                </td>
            </tr>
            <tr>
                <form action="" method="POST" >
                <td class="label-td">
                    <label for="useremail" class="form-label">Email: </label>
                </td>
            </tr>
            <tr>
                <td class="label-td">
                    <input type="email" name="useremail" class="input-text" placeholder="Correo electrónico" required>
                </td>
            </tr>
            <tr>
                <td class="label-td">
                    <label for="userpassword" class="form-label">Contraseña: </label>
                </td>
            </tr>

            <tr>
                <td class="label-td">
                    <input type="Password" name="userpassword" class="input-text" placeholder="introduce tu contraseña" required>
                </td>
            </tr>


            <tr>
                <td><br>
                <?php echo $error ?>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" value="Iniciar sesión" class="login-btn btn-primary btn">
                </td>
            </tr>
        </div>
            <tr>
                <td>
                    <br>
                    <label for="" class="sub-text" style="font-weight: 280;">No tienes cuenta&#63; </label>
                    <a href="signup.php" class="hover-link1 non-style-link">Regístrate</a>
                    <a href="#" aria-label="logo"><img src="images/logo.png" alt="Logo deporte en Córdoba" class="logo"></a>
                    <br><br><br>
                </td>
            </tr>
                        
                        
    
                        
                    </form>
        </table>

    </div>
</center>
</body>
</html>