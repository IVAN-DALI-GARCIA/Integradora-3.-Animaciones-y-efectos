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
<html lang="en">
<head>
     <!-- Agrego el head de html -->
<?php require 'partials/head.php' ?>
</head>
<body>
    <!-- agrego el header del html o cabecera de la pagina -->
    <?php require 'partials/header.php' ?>
    <!-- aca agrego el cuerpo de la pagína en general -->
    <!-- migas para saber donde ando -->
    <div class="box">
        <div class="breadcumb">
            <a href="./index.php">INICIO</a>
            <span><i class='bx bxs-chevrons-right'></i></span>
            <a href="./preguntas.php">CONTACTO</a>
        </div>
    </div>


    <!-- cuerpo de la pagína  -->
    <div class="bg-main">
        <div class="container">            
            <div class="row product-row">
                <div class="col-5 col-md-12">
                    <div class="product-img" id="product-img">
                        <img src="./images/logo_favicon_cocina_facil.png" alt="Logotipo de BAYER">
                    </div>
                    <div class="box">
                        <div class="product-img-list">
                            <div class="product-img-item">
                                <img src="./images/postres.jpg" alt="Imagenes de postres">
                            </div>
                            <div class="product-img-item">
                                <img src="./images/43120216_m-696x464.jpg" alt="imagenes de postres">
                            </div>
                            <div class="product-img-item">
                                <img src="./images/cheese-cake-vegano_41623b1f_500x500.jpg" alt="Imagenes de postres">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7 col-md-12">
                    <div class="product-info">
                        <h1>
                            SUSCRIPCION DE CURSOS FULL
                        </h1>
                        <div class="product-info-detail">
                            <span class="product-info-detail-title">TIPO:</span>
                            <a href="#">ANUAL / SEMESTRAL.</a>
                        </div>
                        <div class="product-info-detail">
                            <span class="product-info-detail-title">Descripción:</span>
                            <span class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </span>
                        </div>
                        <p class="product-description">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo libero alias officiis dolore doloremque eveniet culpa dignissimos, itaque, cum animi excepturi sed veritatis asperiores soluta, nisi atque quae illum. Ipsum.
                        </p>
                        <div class="product-info-price">$7,999</div>
                        <div class="product-quantity-wrapper">
                            <span class="product-quantity-btn">
                                <i class='bx bx-minus'></i>
                            </span>
                            <span class="product-quantity">1</span>
                            <span class="product-quantity-btn">
                                <i class='bx bx-plus'></i>
                            </span>
                        </div>
                        <div>
                            <button class="btn-flat btn-hover">AGREGAR PAGO</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-header">
                    DESCRIPCION
                </div>
                <div class="product-detail-description">
                    <button class="btn-flat btn-hover btn-view-description" id="view-all-description">
                        VER TODO
                    </button>
                    <div class="product-detail-description-content">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit laudantium obcaecati odit dolorem, doloremque accusamus esse neque ipsa dignissimos saepe quisquam tempore perferendis deserunt sapiente! Recusandae illum totam earum ratione. Lorem ipsum
                            dolor sit, amet consectetur adipisicing elit. Aliquam incidunt maxime rerum reprehenderit voluptas asperiores ipsam quas consequuntur maiores, at odit obcaecati vero sunt! Reiciendis aperiam perferendis consequuntur odio quas.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut quaerat eum veniam doloremque nihil repudiandae odio ratione culpa libero tempora. Expedita, quo molestias. Minus illo quis dignissimos aliquid sapiente error!
                        </p>
                        <img src="./images/comida-japonesa.jpg" alt="Medicamento otc">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis accusantium officia, quae fuga in exercitationem aliquam labore ex doloribus repellendus beatae facilis ipsam. Veritatis vero obcaecati iste atque aspernatur ducimus. Lorem ipsum dolor sit,
                            amet consectetur adipisicing elit. Repellat quam praesentium id sit amet magnam ad, dolorum, cumque iste optio itaque expedita eius similique, ab adipisci dicta. Quod, quibusdam quas. Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Odit, in corrupti ipsam sint error possimus commodi incidunt suscipit sit voluptatum quibusdam enim eligendi animi deserunt recusandae earum natus voluptas blanditiis?
                        </p>
                        <img src="./imagenes/5.1glicocil.png" alt="Medicamento otc">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ullam quam fugit veniam ipsum recusandae incidunt, ex ratione, magnam labore ad tenetur officia! In, totam. Molestias sapiente deserunt animi porro?
                        </p>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-header">
                    AGREGAR TU COMENTARIO
                </div>
                <div class="comentarios">
                    <form class="formulario_coment" id="formulario_coment" action="#" method="POST">
                        <label for="name_coment_input" class="name_coment_label">TU NOMBRE Y APELLIDO :</label>
                        <div class="formulario_name_coment">
                            <input type="text" class="name_coment_input" name="name_coment_input" id="name_coment_input" placeholder="COLOCA TU NOMBRE Y/O APELLIDO">
                        </div>

                        <label for="textarea_coment_input" class="textarea_coment_label">TU COMENTARIO ES :</label>
                        <div class="formulario_name_coment">
                            <textarea name="textarea_coment_input" id="textarea_coment_input" cols="30" rows="5" placeholder="COLOCA TU MENSAJE O COMENTARIO"></textarea>
                        </div>
                        <button type="submit" class="btn-flat btn-hover" id="button_comment">
                            AGREGAR COMENTARIO
                        </button>
                    </form>
                </div>
                <div class="box-header">
                    COMENTARIOS DE USUARIOS
                </div>
                <div id="piblic_coment">
                    <div class="user-rate">
                        <div class="user-info">
                            <div class="user-avt">
                                <img src="./images/img2 - copia.jpg" alt="">
                            </div>
                            <div class="user-name">
                                <span class="name">Artur Gonz</span>
                                <span class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </span>
                            </div>
                        </div>
                        <div class="user-rate-content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ea iste, veritatis nobis amet illum, cum alias magni dolores odio, eius quo excepturi veniam ipsa voluptatibus natus voluptas vero? Aspernatur!
                        </div>
                    </div>
                    <div class="user-rate">
                        <div class="user-info">
                            <div class="user-avt">
                                <img src="./images/img5 - copia.jpg" alt="">
                            </div>
                            <div class="user-name">
                                <span class="name">Lea Garcis</span>
                                <span class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </span>
                            </div>
                        </div>
                        <div class="user-rate-content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ea iste, veritatis nobis amet illum, cum alias magni dolores odio, eius quo excepturi veniam ipsa voluptatibus natus voluptas vero? Aspernatur!
                        </div>
                    </div>
                    <div class="user-rate">
                        <div class="user-info">
                            <div class="user-avt">
                                <img src="./images/img6 - copia.jpg" alt="">
                            </div>
                            <div class="user-name">
                                <span class="name">Dali Farol</span>
                                <span class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </span>
                            </div>
                        </div>
                        <div class="user-rate-content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ea iste, veritatis nobis amet illum, cum alias magni dolores odio, eius quo excepturi veniam ipsa voluptatibus natus voluptas vero? Aspernatur!
                        </div>
                    </div>
                    <div class="user-rate">
                        <div class="user-info">
                            <div class="user-avt">
                                <img src="./images/img7.png" alt="">
                            </div>
                            <div class="user-name">
                                <span class="name">Jordan Kariana D</span>
                                <span class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </span>
                            </div>
                        </div>
                        <div class="user-rate-content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ea iste, veritatis nobis amet illum, cum alias magni dolores odio, eius quo excepturi veniam ipsa voluptatibus natus voluptas vero? Aspernatur!
                        </div>
                    </div>
                    <div class="user-rate">
                        <div class="user-info">
                            <div class="user-avt">
                                <img src="./images/img8.png" alt="">
                            </div>
                            <div class="user-name">
                                <span class="name">Angy Muz</span>
                                <span class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </span>
                            </div>
                        </div>
                        <div class="user-rate-content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ea iste, veritatis nobis amet illum, cum alias magni dolores odio, eius quo excepturi veniam ipsa voluptatibus natus voluptas vero? Aspernatur!
                        </div>
                    </div>
                    <div class="box">
                        <ul class="pagination">
                            <li><a href="#"><i class='bx bxs-chevron-left'></i></a></li>
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><i class='bx bxs-chevron-right'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-header">
                    PRODUCTOS RELACIONADOS
                </div>
                <div class="row" id="related-products"></div>
            </div>
        </div>
    </div>





    <!-- agrego el footer del html o cabecera de la pagina -->
    <?php require 'partials/footer.php' ?>


    <!-- agregamos los links de js -->
    <script src="./js/app.js"></script>
    <script src="./js/product-detail.js"></script>
    <script src="./js/coments.js"></script>

    
</body>
</html>