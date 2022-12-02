<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: index1.php');
  }
  require 'database.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];      
      header("Location: index1.php");
    } else {
      $message = 'Lo sentimos, Tus credenciales no son validas';
    }
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>COCINA FÁCIL</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo(rand()); ?>">
    <link rel="stylesheet" href="assets/css/estilos.css?v=<?php echo(rand()); ?>">
    <link rel="stylesheet" href="assets/css/app.css?v=<?php echo(rand()); ?>">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
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
        </ul>
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
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Login</h1>
    <span>or <a href="signup.php">SignUp</a></span>

    <form action="login.php" method="POST" id="formLogin">
      <input name="email" type="text" placeholder="Enter your email">
      <input name="password" type="password" placeholder="Enter your Password">
      <button class="btn1" type="submit" id="btnEnviarDatos">
      <i class="fas fa-share-square"></i> ENVIAR
      </button>
    </form>

    <!-- se agrega el footer de la pagina  -->
     <?php require 'partials/footer.php' ?>

     <!-- se agrega link para Js -->
    <script src="./js/formularios.js"></script>
  </body>
</html>