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
              ><span class=""><i class="fas fa-question"></i></i></span>
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

