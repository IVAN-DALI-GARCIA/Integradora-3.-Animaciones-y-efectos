<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
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
      <?php if(!empty($user)): ?>
        <br> Bienvenido. <?= $user['email']; ?>
      <?php endif; ?>
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
          <?php if(!empty($user)): ?>
          <li>
            <a href="index.php"
              ><span class=""><i class="fas fa-apple-alt"></i></span> MATERIALES</a
            >
          </li>
          <li>
            <a href="./especial.php"
              ><span class=""><i class="fas fa-utensils"></i></span> ESPECIAL</a
            >
          </li>
          <li>
            <a href="./talleres.php"
              ><span class=""><i class="fas fa-school"></i></span> TALLERES</a
            >
          </li>
          <li>
            <a href="./preguntas.php"
              ><span class=""><i class="fas fa-user-friends"></i></span>
              PREGUNTAS</a
            >
          </li>
          <li>
            <a href="./contacto.php"
              ><span class=""><i class="fas fa-id-badge"></i></span> CONTACTO</a
            >
          </li>
          <li>
            <a href="logout.php"
              ><span class=""><i class="fas fa-times-circle"></i></span> CERRAR SESION</a
            >
          </li>
           <?php endif; ?>
        </ul>        
      </nav>
      
    </header>

<div class="main2">
  <?php if(!empty($user)): ?>
      <div class="caja_logo2">
        <img
          class="logo"
          src="images/logo_favicon_cocina_facil.png"
          alt="Logo de cocina facil"
        />
      </div> 
      <br> Bienvenido. <?= $user['email']; ?>
      <br>TU ESTAS CON ACCESO.
      <a href="logout.php">
        CERRAR SESION
      </a>
    <?php else: ?>
      <div class="regform">
        <h1>Please Login or SignUp</h1>
      </div>      
      <div class="caja_logo2">
      <img
          class="logo"
          src="images/logo_favicon_cocina_facil.png"
          alt="Logo de cocina facil"
      />
      </div>  
      <div class="descripcion1">
        <a href="login.php">Login</a> or
        <a href="signup.php">SignUp</a>
        <div class="descripcion">
          <p>Genera tu REGISTRO o Ingresa con tu CUENTA</p>
        </div> 
        <?php endif; ?>
             
      </div>
      

</div>
    <?php require 'partials/footer.php' ?>    
  </body>
</html>
