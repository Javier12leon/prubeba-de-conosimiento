<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BIKERJL Inicio</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
    .password-toggle {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
    }
  </style>
</head>
<body>
  <header>
    <h1>BIKER LAS MEJORES BICICLETAS</h1>
  </header>
  <main>
    <!-- Carrusel -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="imagenes/tx.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="imagenes/bici.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="imagenes/mt.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>

    <!-- Resto de tu contenido -->
    <button id="showLoginForm" class="logo-btn">Iniciar Sesión</button>
    <div class="container"> <!-- Contenedor para el formulario de inicio de sesión -->
      <form action="index.php" method="post" id="loginForm" class="login-form" style="display: none;">
        <a><input type="email" name="email" id="email" placeholder="Correo electrónico" required></a>
        <a>
          <input type="password" name="password" id="password" placeholder="Contraseña" required>
          <i class="password-toggle fas fa-eye-slash"></i> <!-- Icono del ojo -->
        </a>
        <button type="submit" name="login" id="loginButton">Iniciar sesión</button>
        <?php if (isset($error_login)) { ?>
          <p class="error"><?php echo $error_login; ?></p>
        <?php } ?>
        <p class="register-link">¿Aún no tienes una cuenta? <a href="#" id="showRegisterForm">Regístrate aquí</a></p>
      </form>
    </div>
    
    <section class="register" id="registerSection" style="display: none;">
      <div class="container"> <!-- Contenedor para el formulario de registro -->
        <form action="index.php" method="post" id="registerForm">
          <center><h2>Registrarse</h2></center>
          <center>
            <li><input type="text" name="nombre" placeholder="Nombre Completo" required></li>
            <li><input type="email" name="email" placeholder="Correo electrónico"required></li>
            <li><input type="text" name="telefono" placeholder="Teléfono"required></li>
            <li><input type="text" name="direccion" placeholder="Dirección"required></li>
            <li><input type="text" name="ciudad" placeholder="Ciudad"required></li>
            <li>
              <input type="password" name="password" id="passwordReg" placeholder="Contraseña"required>
              <i class="password-toggle fas fa-eye-slash"></i> <!-- Icono del ojo -->
            </li>
            <li><input type="password" name="confirm_password" id="confirmPassword" placeholder="Confirmar contraseña"required></li>
            <button type="submit" name="register">Registrarse</button>
          </center>
          <?php if (isset($success_register)) { ?>
            <p class="success"><?php echo $success_register; ?></p>
          <?php } ?>
        </form>
      </div>
    </section>

    <section class="about-us">
      <h2><center>Sobre nosotros</center></h2>
      <p>Somos una tienda de bicicletas comprometida con ofrecer las mejores bicicletas y accesorios para ciclistas de todos los niveles. Nuestro equipo está formado por entusiastas del ciclismo que están aquí para ayudarte a encontrar la bicicleta perfecta para ti.</p>
    </section>

    <section class="redes-sociales">
      <h2><center>Contáctanos en redes sociales</center></h2>
      <ul>
        <center>
        <li><a href="https://www.facebook.com/" target="_blank">Facebook</a></li>
        <li><a href="https://twitter.com/" target="_blank">Twitter</a></li>
        <li><a href="https://www.instagram.com/" target="_blank">Instagram</a></li>
        </center>
      </ul>
    </section>
  </main>
  
  <footer>
    <center>&copy; 2024 BIKER LAS MEJORES BICICLETAS. Todos los derechos reservados.</center>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- Font Awesome -->
  
  <script>
    document.getElementById("showLoginForm").addEventListener("click", function(event) {
      var loginForm = document.getElementById("loginForm");
      var registerSection = document.getElementById("registerSection");
      var carousel = document.getElementById("carouselExampleSlidesOnly");
      
      if (loginForm.style.display === "none" || loginForm.style.display === "") {
        loginForm.style.display = "block";
        registerSection.style.display = "none"; // Oculta el formulario de registro si está visible
        carousel.style.display = "none"; // Oculta el carrusel
      } else {
        loginForm.style.display = "none";
        carousel.style.display = "block"; // Muestra el carrusel
      }
      
      // Evita la propagación del evento de clic para que no se cierre el formulario inmediatamente
      event.stopPropagation();
    });

    document.getElementById("showRegisterForm").addEventListener("click", function(event) {
      var loginForm = document.getElementById("loginForm");
      var registerSection = document.getElementById("registerSection");
      var carousel = document.getElementById("carouselExampleSlidesOnly");
      
      if (registerSection.style.display === "none" || registerSection.style.display === "") {
        registerSection.style.display = "block";
        loginForm.style.display = "none"; // Oculta el formulario de inicio de sesión si está visible
        carousel.style.display = "none"; // Oculta el carrusel
      } else {
        registerSection.style.display = "none";
        carousel.style.display = "block"; // Muestra el carrusel
      }
      
      // Evita la propagación del evento de clic para que no se cierre el formulario inmediatamente
      event.stopPropagation();
    });

    // Función para alternar entre mostrar/ocultar la contraseña al hacer clic en el icono del ojo
    var passwordToggles = document.querySelectorAll(".password-toggle");
    passwordToggles.forEach(function(toggle) {
      toggle.addEventListener("click", function() {
        var passwordInput = this.previousElementSibling;
        if (passwordInput.type === "password") {
          passwordInput.type = "text";
          this.classList.remove("fa-eye-slash");
          this.classList.add("fa-eye");
        } else {
          passwordInput.type = "password";
          this.classList.remove("fa-eye");
          this.classList.add("fa-eye-slash");
        }
      });
    });
  </script>
</body>
</html>
