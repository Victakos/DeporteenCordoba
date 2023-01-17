<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión - Deporte en Córdoba</title>
    <meta name="title" content="Deporte en Córdoba">
    <meta name="description" content="Deporte en Córdoba, todo el deporte de Córdoba al alcance de un click">
    
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/logo32x32.png">
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./assets/css/inicio.css">
    <link rel="stylesheet" href="assets/css/russoone.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    
    <script src="../assets/js/jquery-3.6.3.js"> </script>
    <script src="../assets/js/popper.min.js"> </script>
    <script src="../assets/js/bootstrap.js"> </script>
    <script src="assets/js/inicio.js" defer></script>

</head>
  <body>
    <div class="container-form sign-in">
        <div class="welcome-back">
            <div class="message">
              <a href="#" aria-label="logo"><img src="assets/images/logo.png" alt="Logo arriba Deporte en Córdoba" class="logo"></a>
                <h2>Usuarios "Deporte en Córdoba"</h2>
                <p>Reservas, seguimientos de clubes y muchos más, accede a tu cuenta</p>
                <button class="sign-in-btn">Iniciar Sesión usuarios</button>
            </div>
        </div>
        <form <form action="assets/php/login_clubes.php" method="POST" class="formulario">
            <h2 class="create-account">Área MY CLUB (EN CONSTRUCCIÓN)</h2>
            <div class="iconos">
              <div class="border-icon">
                <img title="De momento inhabilitado" class='bx bxl-google' src="assets/images/google.png">
            </div>
            <div class="border-icon">
                <img title="De momento inhabilitado" class='bx bxl-linkedin' src="assets/images/linkedin.png">
            </div>
            <div class="border-icon">
              <img title="De momento inhabilitado" class='bx bxl-facebook-circle' src="assets/images/facebook.png">
            </div>
            </div>
            <p class="my-club">Gestiona fácilmente tu club, reservas, instalaciones, directos y mucho más</p>
            <input type="email" placeholder="Email" required>
            <input type="password" placeholder="Contraseña"required>
            <input type="submit" value="Iniciar Sesión">
            <p class="no-account">¿Eres un club y no estás registrado?<a href="registroclub.php">Registrar mi club</a></p>
            <a href="index.php" class="logo" aria-label="logo"><img src="assets/images/logo.png" alt="Logo deporte en Córdoba" class="logo"></a>
        </form>
    </div>
  <div class="container-form sign-up">
    <form action="assets/php/login_usuario.php" method="POST" class="formulario">
        <h2 class="create-account">Inicio de sesión, usuarios</h2>
        <div class="iconos">
            <div class="border-icon">
                <img title="De momento inhabilitado" class='bx bxl-google' src="assets/images/google.png">
            </div>
            <div class="border-icon">
                <img title="De momento inhabilitado" class='bx bxl-linkedin' src="assets/images/linkedin.png">
            </div>
            <div class="border-icon">
              <img title="De momento inhabilitado" class='bx bxl-facebook-circle' src="assets/images/facebook.png">
            </div>
            
        </div>
        <p class="my-club">Reservas, seguimientos de clubes y muchos más, accede a tu cuenta</p>
        <input name="email" type="email" placeholder="Email" required>
        <input name="password" type="password" placeholder="Contraseña" required>
        <input type="submit" value="Iniciar Sesión">
        <p class="no-account">¿No tienes cuenta? Regístrate de forma gratuita <a href="registro.php">Registro usuarios</a></p>
        <a href="index.php" class="logo" aria-label="logo"><img src="assets/images/logo.png" alt="Logo deporte en Córdoba" class="logo"></a>
    </form>
    <div class="welcome-back">
        <div class="message">
            <a href="#" aria-label="logo"><img src="assets/images/logo.png" alt="Logo deporte en Córdoba" class="logo"></a>
            <h2>¿Eres un club?</h2>
            <p>Si eres un club inicia sesión en "Área MY CLUB"</p>
            <button class="sign-up-btn">Iniciar sesión CLUBES</button>
        </div>
    </div>
</div>
</body>
