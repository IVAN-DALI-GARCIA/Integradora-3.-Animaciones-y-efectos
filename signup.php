<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);
    

    if ($stmt->execute()) {
      $message = 'NUEVO USUARIO CREADO, PUEDE ABIRIR SESION';
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo(rand()); ?>" />
    <link rel="stylesheet" href="assets/css/estilos.css?v=<?php echo(rand()); ?>" />
    <link
      rel="shortcut icon"
      href="images/logo_favicon_cocina_facil.png"
      type="image/x-icon"
    />
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script
      src="https://kit.fontawesome.com/99a0281992.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>

    <?php //require 'partials/header.php' ?>
    <header>
      <a href="login.php">Cocina Facíl</a>
      <div>
        <div class="caja_logo">
          <img
            class="logo"
            src="images/logo_favicon_cocina_facil.png"
            alt="Logo de cocina facil"
          />
        </div>
        <h1>COCINA FACIL</h1>
        <p>Escuela GASTRONIMICA.</p>
      </div>
      <nav>
        <ul class="menu">
          <li>
            <a href="index1.php"><span class=""></span>INICIO </a>
          </li>
          <!-- <li>
            <a href="index1.php"
              ><span class=""><i class="fas fa-home"></i></span> INICIO</a
            >
          </li> -->
          <!-- <li>
            <a href="#"
              ><span class=""><i class="fas fa-utensils"></i></span> ESPECIAL</a
            >
          </li>
          <li>
            <a href="#"
              ><span class=""><i class="fas fa-school"></i></span> TALLERES</a
            >
          </li>
          <li>
            <a href="#"
              ><span class=""><i class="fas fa-user-friends"></i></span>
              VISITANTES</a
            >
          </li>
          <li>
            <a href="#"
              ><span class=""><i class="fas fa-id-badge"></i></span> CONTACTO</a
            >
          </li> -->
        </ul>
        <!-- <div class="search_bar">
          <a href="#" class="icon-search"></a>
          <input type="text" id="bar" />
        </div> -->
      </nav>
      
    </header>
    <article>
        <div class="caja_logo2">
          <img
            class="logo"
            src="images/logo_favicon_cocina_facil.png"
            alt="Logo de cocina facil"
          />
        </div>
    </article>

    <?php if(!empty($message)): ?>
      <img src="images/flecha-verde.png" class="validacion" alt="fecha verde validacion">
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>SignUp</h1>
    <span>or <a href="login.php">Login</a></span>

    <form action="signup.php" method="POST">
      <input name="email" type="text" placeholder="Enter your email">
      <input name="password" type="password" placeholder="Enter your Password">
      <input name="confirm_password" type="password" placeholder="Confirm Password">
      <button class="btn1" type="submit" id="btnEnviarDatos">
      <i class="fas fa-share-square"></i> ENVIAR
      </button>
    </form>

    <footer>
      <div class="piePagina">
        <h3>SISTEMA DE UNIVERSIDAD VIRTUAL</h3>
        <p>
          Av. La Paz No. 2453, Col. Arcos Sur, C.P. 44130 Tel: +52 33 3268 8888‏
          ext. 18801
        </p>
        <p>
          IVAN DALI GARCIA TORRES IVANDALIGARCIA@GMAIL.COM LICENCIATURA EN
          DESARROLLO DE SISTEMAS WEB
        </p>
        <p>
          Av. Enrique Díaz de León No. 782, Col. Moderna, C.P. 44190 Tel: +52 33
          3268 8888‏ ext. 18802.
        </p>
        <h3>Guadalajara, Jalisco, México.</h3>
        <p>
          Centro de Atención Personalizada Tel: ‎+52 33 3268‎ 8888, opción 1
          Llamadas sin costo nacional Tel: 800 5819111 Llamadas sin costo desde
          Estados Unidos Tel: +1877 4490230 WhatsApp: +52-33-32688880
        </p>
      </div>
    </footer>

  </body>
</html>
