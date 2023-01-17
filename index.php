<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor iniciar sesión");
                window.location = "inicio.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/logo32x32.png">
  <link rel="stylesheet" href="assets/css/index.css">
  <script src="assets/js/index.js" defer></script>
  <title>Deporte en Córdoba - Intro </title>
</head>
<body>
    <div class="overlay"></div>
    <header>
      <a href="#" aria-label="logo"><img src="assets/images/logo.png" alt="Logo deporte en Córdoba" class="logo"></a>
      <ul class="header-top-list">

          <li class="header-top-item">
            <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

            <p class="item-title">TLF reservas:</p>

            <a href="TLF.:123456789" class="item-link">123 45 67 89</a>
          </li>

          <li class="header-top-item">
            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

            <p class="item-title">Abrimos:</p>

            <p class="item-text">L a D, 09 am a 09 pm</p>
          </li>
      </ul>
      <div class="menu">
        <img src="assets/images/icon-menu.svg" alt="Icono apertura menu" class="open-menu">
        <img src="assets/images/icon-close-menu.svg" alt="Icono cerrar menu" class="close-menu">
      </div>
      <nav>
        <ul class="nav-links">
          <li class="nav-link">
              <a aria-label="clubes" class="dropdown"> <!-- De momento no uso el href="#", en el futuro podría poner un enlace directo.-->
              <span>Clubes</span>
              <img src="assets/images/icon-arrow-up.svg" alt="Flecha arriba" class="arrow-up">
              <img src="assets/images/icon-arrow-down.svg" alt="Flecha abajo" class="arrow-down">
            </a>
            <ul class="dropdown-list">
              <li class="dropdown-link">
                <a href="clubesdefutbol.html" aria-label="futbol">
                  <img class="icono" src="assets/images/iconofutbol.png" alt="icono fútbol">
                  <span>Fútbol</span>
                </a>
              </li>
              <li class="dropdown-link">
                <a href="clubesdefutsal.html" aria-label="futbol sala">
                  <img class="icono" src="assets/images/iconofutsal.png" alt="icono fútbol sala">
                  <span>Fútbol sala</span>
                </a>
              </li>
              <li class="dropdown-link">
                <a href="clubesdepadel.html" aria-label="padel">
                  <img class="icono" src="assets/images/iconopadel.png" alt="icono padel">
                  <span>Padel</span>
                </a>
              </li>
              <li class="dropdown-link">
                <a href="gimnasios.html" aria-label="gym">
                  <img class="icono" src="assets/images/iconogym.png" alt="icono Gym">
                  <span>Gym - Crossfit</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-link">
            <a href="#" aria-label="eventos" class="dropdown">
              <span>Eventos</span>
              <img src="assets/images/icon-arrow-up.svg" alt="Flecha arriba" class="arrow-up">
              <img src="assets/images/icon-arrow-down.svg" alt="Flecha abajo" class="arrow-down">
            </a>
            <ul class="dropdown-list">
              <li class="dropdown-link"><a href="eventos/competiciones/competiciones.php" aria-label="competiciones">Competiciones</a></li>
              <li class="dropdown-link"><a href="eventos/lives.html" aria-label="live">En directo</a></li>
              <li class="dropdown-link"><a href="clubes/clubes.html" aria-label="tuclub">Tu club</a></li>
            </ul>
          </li>
          <li class="nav-link"><a href="calendario/calendario.php" aria-label="eventos">Reservas</a></li>
          <li class="nav-link"><a href="reservas/index.html" aria-label="contacto">Reservas - (no terminado pero promete!)</a></li>
          <li class="nav-link"><a href="galeria/galeria.html" aria-label="galeria">Galeria</a></li>
          <li class="nav-link"><a href="contacto.html" aria-label="contacto">Contacto</a></li>
          <li class="nav-link"><a href="tienda/tienda.html" aria-label="contacto">Tienda</a></li>
        </ul>
        <!-- AHORA CERRAR SESION Y MI CUENTA antes incio y registro -->
        <div class="registration">

          <a href="reservas/usuarios/index.php"><button> <?php echo $_SESSION['usuario'];?> </button></a>
          <a href="assets/php/cerrar_sesion.php"> <button>Cerrar sesión</button></a>
        </div>
      </nav>
    </header>
    <main class="container">
      <picture>
        <source media="(min-width:465px)" srcset="assets/images/FS fondo.png">
        <img src="assets/images/FS fondo.png" alt="hero image">
      </picture>
      <section class="text-content">
        <h1>Bienvenidos a Deporte en Córdoba</h1>
        <p>En este momento solo tenemos disponibles las instalaciones de "Deporte en Córdoba". Mira la disponibilidad en reservas</p>
        <a href="sabermas.html"> <button>Saber más</button></a>
        <div class="clients">
          <img title="Inicio Deporte en Córdoba" href="inicio.php" src="assets/images/logo.png" alt="Deporte en Córdoba">
          <img title="Pepe Aguilera Pintores" href="#" src="assets/images/paplogo.png" alt="Pepe Aguilera Pintores">
          <a href="https://gestionatualarma.es/" target="_blank">
            <img title="Gestiona tu alarma" src="assets/images/gtalogo.png" alt="Gestiona tu alarma">
          </a>
          <img title="eSports La Piña" href="" src="assets/images/lapiñalogo.png" alt="eSports">
        </div>
      </section>
    </main>
    <footer>
      Creado por: <a href="#" target="_blank">Víctor Aguilera</a>. 
      Coded by <a href="#">Víctor Aguilera - Deporte en Córdoba</a>.
    </footer>
  </body>
  </html>