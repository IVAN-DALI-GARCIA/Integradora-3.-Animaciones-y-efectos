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
            <a href="./preguntas.php">PREGUNTAS</a>
        </div>
    </div>
    <!-- cuerpo de la pagína  -->

    <div class="section">
        <div class="container">            
            <div class="section-header">
                <h2>SECCIÓN DE PREGUNTAS FRECUENTES </h2>
            </div>
            <div class="container2">
                <img src="./images/question-mark-png-5a3734b5e2a0a9.0719789815135674139283-removebg-preview.png" alt="logotipo de cuestions">
            </div>
            <div class="container2">
                <h2>
                    ¿Aceptan tarjetas de credito?
                </h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus mollitia nihil accusamus reiciendis nemo, nostrum consequuntur eaque recusandae cum adipisci dolorum autem architecto odio distinctio tempore consequatur, perferendis odit deserunt
                    ut laboriosam iure! At voluptates similique magni repellat. Atque, dolores dolorum sapiente repellat eius perferendis earum aliquam non veniam rem quaerat consequatur, adipisci perspiciatis ipsam nesciunt? Voluptates doloremque eveniet
                    cupiditate repudiandae illum sed nisi at dolor hic sunt suscipit nobis esse adipisci iure earum voluptate assumenda quae, atque autem voluptatum. Tempore eos excepturi rem nulla, ipsam autem obcaecati pariatur quibusdam, id facere
                    esse dolorem voluptatum deserunt tempora explicabo. Vel, dolorem hic atque sint voluptatum quisquam incidunt numquam, quia at optio fuga vitae? Sint, voluptatem assumenda quisquam itaque, alias tempore impedit ad consequatur repudiandae
                    veniam, facere quasi. Voluptatum quas repellat similique repudiandae autem, unde consequatur eum quo vel debitis eius eveniet atque sapiente at nam aperiam corporis, porro nulla fugit dignissimos.
                </p>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, reprehenderit.
                </p>
                <h2>
                    ¿Tiene envios a toda a otros estados?
                </h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus mollitia nihil accusamus reiciendis nemo, nostrum consequuntur eaque recusandae cum adipisci dolorum autem architecto odio distinctio tempore consequatur, perferendis odit deserunt
                    ut laboriosam iure! At voluptates similique magni repellat. Atque, dolores dolorum sapiente repellat eius perferendis earum aliquam non veniam rem quaerat consequatur, adipisci perspiciatis ipsam nesciunt? Voluptates doloremque eveniet
                    cupiditate repudiandae illum sed nisi at dolor hic sunt suscipit nobis esse adipisci iure earum voluptate assumenda quae, atque autem voluptatum. Tempore eos excepturi rem nulla, ipsam autem obcaecati pariatur quibusdam, id facere
                    esse dolorem voluptatum deserunt tempora explicabo. Vel, dolorem hic atque sint voluptatum quisquam incidunt numquam, quia at optio fuga vitae? Sint, voluptatem assumenda quisquam itaque, alias tempore impedit ad consequatur repudiandae
                    veniam, facere quasi. Voluptatum quas repellat similique repudiandae autem, unde consequatur eum quo vel debitis eius eveniet atque sapiente at nam aperiam corporis, porro nulla fugit dignissimos.
                </p>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, reprehenderit.
                </p>
                <h2>
                    ¿Tiene sucursales en CDMX?
                </h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus mollitia nihil accusamus reiciendis nemo, nostrum consequuntur eaque recusandae cum adipisci dolorum autem architecto odio distinctio tempore consequatur, perferendis odit deserunt
                    ut laboriosam iure! At voluptates similique magni repellat. Atque, dolores dolorum sapiente repellat eius perferendis earum aliquam non veniam rem quaerat consequatur, adipisci perspiciatis ipsam nesciunt? Voluptates doloremque eveniet
                    cupiditate repudiandae illum sed nisi at dolor hic sunt suscipit nobis esse adipisci iure earum voluptate assumenda quae, atque autem voluptatum. Tempore eos excepturi rem nulla, ipsam autem obcaecati pariatur quibusdam, id facere
                    esse dolorem voluptatum deserunt tempora explicabo. Vel, dolorem hic atque sint voluptatum quisquam incidunt numquam, quia at optio fuga vitae? Sint, voluptatem assumenda quisquam itaque, alias tempore impedit ad consequatur repudiandae
                    veniam, facere quasi. Voluptatum quas repellat similique repudiandae autem, unde consequatur eum quo vel debitis eius eveniet atque sapiente at nam aperiam corporis, porro nulla fugit dignissimos.
                </p>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, reprehenderit.
                </p>
                <h2>
                    ¿Cúanto tarde en llegar el pedido hasta mi domicilio?
                </h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus mollitia nihil accusamus reiciendis nemo, nostrum consequuntur eaque recusandae cum adipisci dolorum autem architecto odio distinctio tempore consequatur, perferendis odit deserunt
                    ut laboriosam iure! At voluptates similique magni repellat. Atque, dolores dolorum sapiente repellat eius perferendis earum aliquam non veniam rem quaerat consequatur, adipisci perspiciatis ipsam nesciunt? Voluptates doloremque eveniet
                    cupiditate repudiandae illum sed nisi at dolor hic sunt suscipit nobis esse adipisci iure earum voluptate assumenda quae, atque autem voluptatum. Tempore eos excepturi rem nulla, ipsam autem obcaecati pariatur quibusdam, id facere
                    esse dolorem voluptatum deserunt tempora explicabo. Vel, dolorem hic atque sint voluptatum quisquam incidunt numquam, quia at optio fuga vitae? Sint, voluptatem assumenda quisquam itaque, alias tempore impedit ad consequatur repudiandae
                    veniam, facere quasi. Voluptatum quas repellat similique repudiandae autem, unde consequatur eum quo vel debitis eius eveniet atque sapiente at nam aperiam corporis, porro nulla fugit dignissimos.
                </p>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, reprehenderit.
                </p>
                <h2>
                    ¿Hacen devoluciones de compras, o cambios por otro medicamento?
                </h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus mollitia nihil accusamus reiciendis nemo, nostrum consequuntur eaque recusandae cum adipisci dolorum autem architecto odio distinctio tempore consequatur, perferendis odit deserunt
                    ut laboriosam iure! At voluptates similique magni repellat. Atque, dolores dolorum sapiente repellat eius perferendis earum aliquam non veniam rem quaerat consequatur, adipisci perspiciatis ipsam nesciunt? Voluptates doloremque eveniet
                    cupiditate repudiandae illum sed nisi at dolor hic sunt suscipit nobis esse adipisci iure earum voluptate assumenda quae, atque autem voluptatum. Tempore eos excepturi rem nulla, ipsam autem obcaecati pariatur quibusdam, id facere
                    esse dolorem voluptatum deserunt tempora explicabo. Vel, dolorem hic atque sint voluptatum quisquam incidunt numquam, quia at optio fuga vitae? Sint, voluptatem assumenda quisquam itaque, alias tempore impedit ad consequatur repudiandae
                    veniam, facere quasi. Voluptatum quas repellat similique repudiandae autem, unde consequatur eum quo vel debitis eius eveniet atque sapiente at nam aperiam corporis, porro nulla fugit dignissimos.
                </p>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, reprehenderit.
                </p>
                <h2>
                    ¿Puedo recoger la mercancia en Bodega de Guadalajara?
                </h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus mollitia nihil accusamus reiciendis nemo, nostrum consequuntur eaque recusandae cum adipisci dolorum autem architecto odio distinctio tempore consequatur, perferendis odit deserunt
                    ut laboriosam iure! At voluptates similique magni repellat. Atque, dolores dolorum sapiente repellat eius perferendis earum aliquam non veniam rem quaerat consequatur, adipisci perspiciatis ipsam nesciunt? Voluptates doloremque eveniet
                    cupiditate repudiandae illum sed nisi at dolor hic sunt suscipit nobis esse adipisci iure earum voluptate assumenda quae, atque autem voluptatum. Tempore eos excepturi rem nulla, ipsam autem obcaecati pariatur quibusdam, id facere
                    esse dolorem voluptatum deserunt tempora explicabo. Vel, dolorem hic atque sint voluptatum quisquam incidunt numquam, quia at optio fuga vitae? Sint, voluptatem assumenda quisquam itaque, alias tempore impedit ad consequatur repudiandae
                    veniam, facere quasi. Voluptatum quas repellat similique repudiandae autem, unde consequatur eum quo vel debitis eius eveniet atque sapiente at nam aperiam corporis, porro nulla fugit dignissimos.
                </p>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, reprehenderit.
                </p>
                <h2>
                    ¿Las Hemodiálisis, tiene algun tipo de apoyo o financiamiento para clinetes regulares?
                </h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus mollitia nihil accusamus reiciendis nemo, nostrum consequuntur eaque recusandae cum adipisci dolorum autem architecto odio distinctio tempore consequatur, perferendis odit deserunt
                    ut laboriosam iure! At voluptates similique magni repellat. Atque, dolores dolorum sapiente repellat eius perferendis earum aliquam non veniam rem quaerat consequatur, adipisci perspiciatis ipsam nesciunt? Voluptates doloremque eveniet
                    cupiditate repudiandae illum sed nisi at dolor hic sunt suscipit nobis esse adipisci iure earum voluptate assumenda quae, atque autem voluptatum. Tempore eos excepturi rem nulla, ipsam autem obcaecati pariatur quibusdam, id facere
                    esse dolorem voluptatum deserunt tempora explicabo. Vel, dolorem hic atque sint voluptatum quisquam incidunt numquam, quia at optio fuga vitae? Sint, voluptatem assumenda quisquam itaque, alias tempore impedit ad consequatur repudiandae
                    veniam, facere quasi. Voluptatum quas repellat similique repudiandae autem, unde consequatur eum quo vel debitis eius eveniet atque sapiente at nam aperiam corporis, porro nulla fugit dignissimos.
                </p>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, reprehenderit.
                </p>
                <h2>
                    ¿Se puede facturar las comprar realizadas en linea?
                </h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus mollitia nihil accusamus reiciendis nemo, nostrum consequuntur eaque recusandae cum adipisci dolorum autem architecto odio distinctio tempore consequatur, perferendis odit deserunt
                    ut laboriosam iure! At voluptates similique magni repellat. Atque, dolores dolorum sapiente repellat eius perferendis earum aliquam non veniam rem quaerat consequatur, adipisci perspiciatis ipsam nesciunt? Voluptates doloremque eveniet
                    cupiditate repudiandae illum sed nisi at dolor hic sunt suscipit nobis esse adipisci iure earum voluptate assumenda quae, atque autem voluptatum. Tempore eos excepturi rem nulla, ipsam autem obcaecati pariatur quibusdam, id facere
                    esse dolorem voluptatum deserunt tempora explicabo. Vel, dolorem hic atque sint voluptatum quisquam incidunt numquam, quia at optio fuga vitae? Sint, voluptatem assumenda quisquam itaque, alias tempore impedit ad consequatur repudiandae
                    veniam, facere quasi. Voluptatum quas repellat similique repudiandae autem, unde consequatur eum quo vel debitis eius eveniet atque sapiente at nam aperiam corporis, porro nulla fugit dignissimos.
                </p>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, reprehenderit.
                </p>
            </div>
            <div class="section-header">
                <h2>APOYO A ESTUDIANTES</h2>
            </div>
            <div class="blog2 row-revere">
                <div class="blog-img">
                    <img src="./images/flecha-verde.png" alt="Imagenes de pixabayderechos reservados de la pagina VALORES1.jpg">
                </div>
                <div class="blog-info">
                    <div class="blog-title">
                        APOYOS Y BECAS.
                    </div>
                    <div class="blog-preview2">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat. Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Eveniet consequatur a enim ullam obcaecati mollitia adipisci quam fuga? Consequatur temporibus inventore tenetur modi atque maiores ad, explicabo ipsam. Dignissimos debitis aliquid voluptatem
                        maiores nesciunt aut architecto corrupti, porro deserunt quos aspernatur inventore officia ab quam quis ipsam alias quas iusto obcaecati mollitia corporis. Porro, tempora. lorem100 Lorem, ipsum dolor sit amet consectetur adipisicing
                    </div>
                </div>
            </div>
            <div class="blog2">
                <div class="blog-img">
                    <img src="./images/imagene-de-comida.jpg" alt="Imagenes de pixabayderechos reservados de la pagina VALORES1.jpg">
                </div>
                <div class="blog-info">
                    <div class="blog-title">
                        CURSOS GRATIS .
                    </div>
                    <div class="blog-preview2">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat. Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Eveniet consequatur a enim ullam obcaecati mollitia adipisci quam fuga? Consequatur temporibus inventore tenetur modi atque maiores ad, explicabo ipsam. Dignissimos debitis aliquid voluptatem
                        maiores nesciunt aut architecto corrupti, porro deserunt quos aspernatur inventore officia ab quam quis ipsam alias quas iusto obcaecati mollitia corporis. Porro, tempora. lorem100 Lorem, ipsum dolor sit amet consectetur adipisicing
                    </div>
                </div>
            </div>
            <div class="blog2 row-revere">
                <div class="blog-img">
                    <img src="./images/postre-facil-gelatina-de-mosaico-500x500.jpg" alt="Imagenes de pixabayderechos reservados de la pagina VALORES3.jpg">
                </div>
                <div class="blog-info">
                    <div class="blog-title">
                        TIP´S DE POSTRES
                    </div>
                    <div class="blog-preview2">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat. Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Eveniet consequatur a enim ullam obcaecati mollitia adipisci quam fuga? Consequatur temporibus inventore tenetur modi atque maiores ad, explicabo ipsam. Dignissimos debitis aliquid voluptatem
                        maiores nesciunt aut architecto corrupti, porro deserunt quos aspernatur inventore officia ab quam quis ipsam alias quas iusto obcaecati mollitia corporis. Porro, tempora. lorem100 Lorem, ipsum dolor sit amet consectetur adipisicing
                    </div>
                </div>
            </div>
            <div class="blog2">
                <div class="blog-img">
                    <img src="./images/imagene-de-comida.jpg" alt="Imagenes de pixabayderechos reservados de la pagina valores4.jpg">
                </div>
                <div class="blog-info">
                    <div class="blog-title">
                        INSUMOS Y ALIMENTOS.
                    </div>
                    <div class="blog-preview2">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat. Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Eveniet consequatur a enim ullam obcaecati mollitia adipisci quam fuga? Consequatur temporibus inventore tenetur modi atque maiores ad, explicabo ipsam. Dignissimos debitis aliquid voluptatem
                        maiores nesciunt aut architecto corrupti, porro deserunt quos aspernatur inventore officia ab quam quis ipsam alias quas iusto obcaecati mollitia corporis. Porro, tempora. lorem100 Lorem, ipsum dolor sit amet consectetur adipisicing
                    </div>
                </div>
            </div>
            <div class="blog2 row-revere">
                <div class="blog-img">
                    <img src="./images/cdn-3.expansion.mx.webp" alt="Imagenes de pixabayderechos reservados de la pagina VALORES1.jpg">
                </div>
                <div class="blog-info">
                    <div class="blog-title">
                        FAST FOOD ¿SALUDABLE?.
                    </div>
                    <div class="blog-preview2">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat. Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Eveniet consequatur a enim ullam obcaecati mollitia adipisci quam fuga? Consequatur temporibus inventore tenetur modi atque maiores ad, explicabo ipsam. Dignissimos debitis aliquid voluptatem
                        maiores nesciunt aut architecto corrupti, porro deserunt quos aspernatur inventore officia ab quam quis ipsam alias quas iusto obcaecati mollitia corporis. Porro, tempora. lorem100 Lorem, ipsum dolor sit amet consectetur adipisicing
                    </div>
                </div>
            </div>
            <div class="container2">
                <div class="blog-title">
                    VIDEO CORPORATIVO.
                </div>
                <iframe src="https://www.youtube.com/embed/1YlSdVotRCk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <!-- CURSOS TOP´S -->

    <div class="promotion">
        <div class="section-header">
            <h2> CURSOS & TIP`S</h2>
        </div>
        <div class="row">
            <div class="col-4 col-md-12 col-sm-12">
                <div class="promotion-box">
                    <div class="text">
                        <h3>COMIDA RAPIDA </h3>
                        <button class="btn-flat btn-hover" role="link" onclick="window.location='./talleres.php'"><span>TOMAR CURSO</span></button>
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
                        <button class="btn-flat btn-hover" role="link" onclick="window.location='./talleres.php'"><span>TOMAR AHORA</span></button>
                    </div>
                    <img src="./images/Tiramisu.png" alt="PAY DE QUESO VEGANO">
                </div>
            </div>
            <div class="col-4 col-md-12 col-sm-12">
                <div class="promotion-box">
                    <div class="text">
                        <h3>TRES LECHES</h3>
                        <button class="btn-flat btn-hover" role="link" onclick="window.location='./talleres.php'"><span>TOMAR AHORA</span></button>
                    </div>
                    <img src="./images/postre_de_tres_leches_con_fruta_58432_orig 500x500.jpg">
                </div>
            </div>
            <div class="col-4 col-md-12 col-sm-12">
                <div class="promotion-box">
                    <div class="text">
                        <h3>MEXICANA COC.</h3>
                        <button class="btn-flat btn-hover" role="link" onclick="window.location='./talleres.php'"><span>TOMAR AHORA</span></button>
                    </div>
                    <img src="./images/mexicano.jpg">
                </div>
            </div>
            <div class="col-4 col-md-12 col-sm-12">
                <div class="promotion-box">
                    <div class="text">
                        <h3>ENSALADAS VERD.</h3>
                        <button class="btn-flat btn-hover" role="link" onclick="window.location='./talleres.php'"><span>TOMAR AHORA</span></button>
                    </div>
                    <img src="./images/siete-claves-para-ofrecer-platos-saludables-atractivos-a-los-comensales.jpg" alt="">
                </div>
            </div>
        </div>
    </div>






    <!-- agrego el footer del html o cabecera de la pagina -->
    <?php require 'partials/footer.php' ?>


    <!-- agregamos los links de js -->
    <script src="./js/app.js"></script>
    <script src="./js/index.js"></script>
    
</body>
</html>