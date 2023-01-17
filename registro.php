<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/logo32x32.png">
    <link rel="stylesheet" type="text/css" href="assets/css/registro.css">
    <script src="assets/js/registro.js" defer></script>
    <title>Registrarse en "Deporte en Córdoba"</title>
<!--Esto es una beta de como podría ser la forma de registrarse-->
</head>
<body>
    <main class="create">
        
        <p class="login">
            <a href="index.php" class="logo" aria-label="logo"><img src="assets/images/logo.png" alt="Logo deporte en Córdoba" class="logo"></a>
            ¿Ya tienes una cuenta? <a href="inicio.php">Inicia sesión</a>
        </p>
<!--Aqui ponemos un elemento inline para hacer un enlace.--> 
        <article class="content">
        <h1>Registro de usuarios</h1>
        <p>Regístrate en "Deporte en Córdoba" haz de forma rápida tus reservas, obtén
            información de las distintas instalaciones de la provincia así como sus
        clubes.</p>

        
<!--Ahora procedemos a introduccir el formulario-->
        <div class="form sign-up-container">
            <form action="assets/php/register_db.php" method="POST" class="formulario">
                <!-- Action y method es para conectar con el archivo php -->
            <input type="text" placeholder="Nombre" name="nombre" id="name" required>
            <input type="email" placeholder="Email" name="email" id="email" required>
            <input type="password" placeholder="Contraseña" name="password" id="password" required>
            <input type="submit" value="Registrarse">
            </form>
        </div>
        </article>
        <p class="notify check_notify">Te has registrado correctamente</p>
        <p class="notify error_notify">¡Usuario o contraseña no válidos! Verifica tus datos</p>
    <section class="legal">
        <p>Eres un club? <a href="registroclub.php">Registrar mi club</a></p>
        <p>Pulsando registrarse está aceptando nuestros <a href="terminos.html" target="_blank">términos de servicios</a> 
            y la <a href="pdatos.html" target="_blank">protección de datos</a>. 
        </p>
        </section>
    </main>
    
</body>
</html>