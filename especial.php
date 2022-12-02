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
<!-- Agrego el head de html -->
<?php require 'partials/head.php' ?>
<body>
    <!-- agrego el header del html o cabecera de la pagina -->
    <?php require 'partials/header.php' ?>
    <!-- aca agrego el cuerpo de la pagína en general -->
            <div class="box">
                <div class="breadcumb">
                    <a href="./index1.php">INICIO</a>
                    <span><i class='bx bxs-chevrons-right'></i></span>
                    <a href="./especial.php">ESPECIALES CURSOS</a>
                </div>
            </div>

    <!--SLIDER DE IMAGENES   -->
    <div class="hero">
        <div class="slider">
            <div class="container">
                

                <div class="slide active">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                DEL MAR
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                CAMARONES ASADOS/BROCH
                            </h2>
                            <p class="top-down trans-delay-0-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati dolor commodi dignissimos culpa, eaque eos necessitatibus possimus veniam, cupiditate rerum deleniti? Libero, ducimus error? Beatae velit dolore sint explicabo! Fugit.
                            </p>
                            <div class="top-down trans-delay-0-6">
                                <button class="btn-flat btn-hover" role="link" onclick="window.location='./index1.php'">
                                    <span>VER MAS</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="img top-down">
                        <img src="./images/87d29218d14b409a4e4542372958983f_ca.png">
                    </div>
                </div>

                <div class="slide">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                COCINA ORIENTAL
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                SUSHI FAM/SKITHORA
                            </h2>
                            <p class="top-down trans-delay-0-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. A optio, voluptatum aperiam nobis quis maxime corporis porro alias soluta sunt quae consectetur aliquid blanditiis perspiciatis labore cumque, ullam, quam eligendi!
                            </p>
                            <div class="top-down trans-delay-0-6">
                                <button class="btn-flat btn-hover" role="link" onclick="window.location='./products.php'">
                                    <span>VER MAS</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="img right-left">
                        <img src="./images/Donde-comer-sushi...webp" alt="DerechosReservados_PIXABAY_3_Imagen_de_Anastasia_Gepp_en_Pixabay.jpg">
                    </div>
                </div>
                <div class="slide">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                POSTRES VIP / DULCES
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                PASTEL FRUTAS/CITRIX
                            </h2>
                            <p class="top-down trans-delay-0-4">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo aut fugiat, libero magnam nemo inventore in tempora beatae officiis temporibus odit deserunt molestiae amet quam, asperiores, iure recusandae nulla labore!
                            </p>
                            <div class="top-down trans-delay-0-6">
                                <button class="btn-flat btn-hover" role="link" onclick="window.location='./index1.php'">
                                    <span>VER MAS</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="img left-right">
                        <img src="./images/img_pastel_de_fresa_23942_orig.jpg" alt="DerechosReservados_PIXABAY_pexels-photomix-company-94843.jpg">
                    </div>
                </div>
                <div class="slide">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                SALUDABLE DIABETEX
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                ENSALADA 355gm
                            </h2>
                            <p class="top-down trans-delay-0-4">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo aut fugiat, libero magnam nemo inventore in tempora beatae officiis temporibus odit deserunt molestiae amet quam, asperiores, iure recusandae nulla labore!
                            </p>
                            <div class="top-down trans-delay-0-6">
                                <button class="btn-flat btn-hover" role="link" onclick="window.location='./index1.php'">
                                    <span>VER MAS</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="img left-right">
                        <img src="./images/saludable.jpg" alt="DerechosReservados_PIXABAY_pexels-photomix-company-94843.jpg">
                    </div>
                </div>
                <div class="slide">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                DEL HOGAR
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                FILETE SALTEADO
                            </h2>
                            <p class="top-down trans-delay-0-4">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo aut fugiat, libero magnam nemo inventore in tempora beatae officiis temporibus odit deserunt molestiae amet quam, asperiores, iure recusandae nulla labore!
                            </p>
                            <div class="top-down trans-delay-0-6">
                                <button class="btn-flat btn-hover" role="link" onclick="window.location='./index1.php'">
                                    <span>VER MAS</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="img left-right">
                        <img src="./images/recetas-baratas-sencillas-y-saludables-con-pescado.jpg" alt="DerechosReservados_PIXABAY_pexels-photomix-company-94843.jpg">
                    </div>
                </div>
                <div class="slide">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                POSTRES DULCES
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                CHEESE CAKE
                            </h2>
                            <p class="top-down trans-delay-0-4">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo aut fugiat, libero magnam nemo inventore in tempora beatae officiis temporibus odit deserunt molestiae amet quam, asperiores, iure recusandae nulla labore!
                            </p>
                            <div class="top-down trans-delay-0-6">
                                <button class="btn-flat btn-hover" role="link" onclick="window.location='./products.php'">
                                    <span>VER MAS</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="img left-right">
                        <img src="./images/cheese-cake-vegano_41623b1f_900x900.jpg" alt="DerechosReservados_PIXABAY_pexels-photomix-company-94843.jpg">
                    </div>
                </div>
                <div class="slide">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                POSTRES DULCES
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                TRES LECH/FRUTAL
                            </h2>
                            <p class="top-down trans-delay-0-4">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo aut fugiat, libero magnam nemo inventore in tempora beatae officiis temporibus odit deserunt molestiae amet quam, asperiores, iure recusandae nulla labore!
                            </p>
                            <div class="top-down trans-delay-0-6">
                                <button class="btn-flat btn-hover" role="link" onclick="window.location='./index1.php'">
                                    <span>VER MAS</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="img left-right">
                        <img src="./images/postre_de_tres_leches_con_fruta_58432_orig.jpg">
                    </div>
                </div>
            </div>
            <button class="slide-controll slide-next">
                <i class='bx bxs-chevron-right'></i>
            </button>
            <button class="slide-controll slide-prev">
                <i class='bx bxs-chevron-left'></i>
            </button>
        </div>
    </div>
    <!-- CURSOS TOP´S -->

    <div class="promotion">
        <div class="section-header">
            <h2> CURSOS TOP`S</h2>
        </div>
        <div class="row">
            <div class="col-4 col-md-12 col-sm-12">
                <div class="promotion-box">
                    <div class="text">
                        <h3>COMIDA RAPIDA </h3>
                        <button class="btn-flat btn-hover" role="link" onclick="window.location='./product-detail.php'"><span>TOMAR CURSO</span></button>
                    </div>
                    <img src="./images/burrito.jpeg" alt="BURRITOS FASTFOOD">
                </div>
            </div>
            <div class="col-4 col-md-12 col-sm-12">
                <div class="promotion-box">
                    <div class="text">
                        <h3>POSTRES FRIOS</h3>
                        <button class="btn-flat btn-hover" role="link" onclick="window.location='./index1.php'"><span>TOMAR CURSO</span></button>
                    </div>
                    <img src="./images/paso_a_paso_para_realizar_tarta_de_flan_con_galletas_y_chocolate_sin_azucar_resultado_final_1ce8842f_600x600.jpg" alt="PAY FRIO">
                </div>
            </div>
            <div class="col-4 col-md-12 col-sm-12">
                <div class="promotion-box">
                    <div class="text">
                        <h3>MALTEADAS</h3>
                        <button class="btn-flat btn-hover" role="link" onclick="window.location='./product-detail.php'"><span>TOMAR AHORA</span></button>
                    </div>
                    <img src="./images/Tiramisu.png" alt="PAY DE QUESO VEGANO">
                </div>
            </div>
            <div class="col-4 col-md-12 col-sm-12">
                <div class="promotion-box">
                    <div class="text">
                        <h3>TRES LECHES</h3>
                        <button class="btn-flat btn-hover" role="link" onclick="window.location='./product-detail.php'"><span>TOMAR AHORA</span></button>
                    </div>
                    <img src="./images/postre_de_tres_leches_con_fruta_58432_orig 500x500.jpg">
                </div>
            </div>
            <div class="col-4 col-md-12 col-sm-12">
                <div class="promotion-box">
                    <div class="text">
                        <h3>MEXICANA COC.</h3>
                        <button class="btn-flat btn-hover" role="link" onclick="window.location='./product-detail.php'"><span>TOMAR AHORA</span></button>
                    </div>
                    <img src="./images/mexicano.jpg">
                </div>
            </div>
            <div class="col-4 col-md-12 col-sm-12">
                <div class="promotion-box">
                    <div class="text">
                        <h3>ENSALADAS VERD.</h3>
                        <button class="btn-flat btn-hover" role="link" onclick="window.location='./product-detail.php'"><span>TOMAR AHORA</span></button>
                    </div>
                    <img src="./images/siete-claves-para-ofrecer-platos-saludables-atractivos-a-los-comensales.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- PROMOCIONES CURSOS -->

    <div class="section">
        <div class="container">
            <div class="section-header">
                <h2>PROMOCIONES CURSOS</h2>
            </div>
            <div class="row" id="latest-products">
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/plantilla-inspiracion-diseno-logotipo-restaurante-comida-japonesa-sushi_340145-41.webp" alt="logotipo plantilla comida">
                            <img src="./images/comidajaponesa-focus-0-0-954-636500x500.jpg" alt="comida japonesa varios ">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">TOMAR AHORA</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                COMIDA JAPONESA.
                            </div>
                            <div class="product-card-price">
                                <span><del>$399</del></span>
                                <span class="curr-price">$349</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-footer">
                <a href="./index1.php" class="btn-flat btn-hover">VER MAS</a>
            </div>
        </div>
    </div>

    <!-- LO DE TEMPORADA PARA CURSOS -->

    <div class="bg-second">
        <div class="section container">
            <div class="row">
                <div class="col-4 col-md-4">
                    <div class="sp-item-img">
                        <img src="./images/img_pastel_de_fresa_23942_orig.jpg" alt="PASTEL DE FRESA">
                    </div>
                </div>
                <div class="col-7 col-md-8">
                    <div class="sp-item-info">
                        <div class="sp-item-name">PASTELES FRUTALES </div>
                        <p class="sp-item-description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore dignissimos itaque et eaque quod harum vero autem? Reprehenderit enim non voluptate! Qui provident modi est non eius ratione, debitis iure.
                        </p>
                        <button class="btn-flat btn-hover" role="link" onclick="window.location='./index1.php'">TOMAR AHORA</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="section-header">
                <h2>CURSOS TOP`S</h2>
            </div>
            <div class="row" id="best-products">
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="./images/concepto-letras-tema-roma_23-2148391490.webp" alt="PIZZA ITALIANA">
                            <img src="./images/450_1000.jpg" alt="Medicamento Kerflex">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">TOMAR AHORA</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                COMIDA ITALIANA
                            </div>
                            <div class="product-card-price">
                                <span><del>$310.20</del></span>
                                <span class="curr-price">$249.20</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-footer">
                <a href="#" class="btn-flat btn-hover">VER MAS</a>
            </div>
        </div>
    </div>




    
    <!-- Agrgo el footer de l apagina para poder generer un estandar de las paginas -->
    
    <?php require 'partials/footer.php' ?>


    <!-- agregamos los links de js -->
    <script src="./js/app.js"></script>
    <script src="./js/index.js"></script>
</body>
</html>
