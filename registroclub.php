<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/logo32x32.png">
    <link rel="stylesheet" type="text/css" href="assets/css/registroclub.css">
    <script src="assets/js/registroclub.js" defer></script>
    <title>Registrar club en "Deporte en Córdoba"</title>
<!--Esto es una Alpha de como podría ser la forma de registrarse-->
</head>
<body>
    <main class="create">
        
        <p class="login">
            <a href="index.php" class="logo" aria-label="logo"><img src="assets/images/logo.png" alt="Logo deporte en Córdoba" class="logo"></a>
            ¿Ya tienes una cuenta? <a href="inicio.php">Inicia sesión</a>
        </p>
<!--Aqui ponemos un elemento inline para hacer un enlace.--> 
        <article class="content">
        <h1>Página en construcción, EN MANTENIMIENTO</h1>
        <p>"Registro de club" De momento el servicio esta inhabilitado, para registrar un club contacte con el administrador.</p>

        
<!--Ahora procedemos a introduccir el formulario-->
        <div class="form sign-up-container">
            <form action="assets/php/register_db1.php" method="POST" class="formulario">
                <!-- Action y method es para conectar con el archivo php -->
            <input type="text" placeholder="Nombre del club" name="nombre" id="name" required>
            <input type="email" placeholder="Email" name="email" id="email" required>
            <input type="password" placeholder="Contraseña" name="password" id="password"required>
            <input type="submit"  value="Registrar club" required>
            </form>
        </div>
        </article>
        <p class="notify check_notify">Te has registrado correctamente</p>
        <p class="notify error_notify">¡Usuario o contraseña no válidos! Verifica tus datos</p>
    <section class="legal">
        <p>¿No eres un club? <a href="registro.php">Registro de usuarios</a></p>
        <p>Pulsando registrarse está aceptando nuestros <a href="terminos.html" target="_blank">términos de servicios</a> 
            y la <a href="pdatos.html" target="_blank">protección de datos</a>. 
        </p>
        </section>
    </main>
    
</body>
</html>