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
    <!-- migas para saber donde ando -->
    <div class="box">
        <div class="breadcumb">
            <a href="./index.php">INICIO</a>
            <span><i class='bx bxs-chevrons-right'></i></span>
            <a href="./products.php">TALLERES & TIP´S</a>
        </div>
    </div>
    <!-- cuerpo de la pagína  -->

    <!-- TALLERES Y TIP´S -->

    <div class="section">
        <div class="container">
            <div class="section-header">
                <h2>TALLERES  & TIP'S </h2>
            </div>
            <div class="blog2">
                <div class="blog-img">
                    <img src="./images/N_2016.10_articulo_nutricionydeporte_WEB.jpg" alt="Imagenes de pixabayderechos reservados de la pagina vida-mas-sana-y-ejercicio.jpg">
                </div>
                <div class="blog-info">
                    <div class="blog-title">
                        EL EJERCICIO TE ACTIVA.
                    </div>
                    <div class="blog-preview2">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat. Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Eveniet consequatur a enim ullam obcaecati mollitia adipisci quam fuga? Consequatur temporibus inventore tenetur modi atque maiores ad, explicabo ipsam. Dignissimos debitis aliquid voluptatem
                        maiores nesciunt aut architecto corrupti, porro deserunt quos aspernatur inventore officia ab quam quis ipsam alias quas iusto obcaecati mollitia corporis. Porro, tempora. lorem100 Lorem, ipsum dolor sit amet consectetur adipisicing
                    </div>
                </div>
            </div>
            <div class="container2">
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
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore a alias debitis amet tempore ratione harum ipsum possimus inventore eaque modi dignissimos odio commodi, impedit perferendis eius sit consequatur doloremque obcaecati quibusdam vero ducimus?
                    Vel veritatis ut expedita. Repudiandae delectus non deserunt perspiciatis quis neque magni debitis impedit eveniet natus earum repellendus quasi corrupti illum magnam inventore veniam, tempora dignissimos quas commodi eos nemo. Porro
                    temporibus tempora alias natus, illum dolores labore id vitae, placeat quaerat minus reiciendis impedit quos! Totam voluptate corporis similique magni dolor quos sequi quidem, impedit voluptatem incidunt voluptas accusamus tenetur
                    ipsam perferendis expedita voluptatum iusto?
                </p>
            </div>
            <div class="blog2 row-revere">
                <div class="blog-img">
                    <img src="./images/realmente-el-agua-es-tan-milagrosa.jpg" alt="Imagenes de pixabayderechos reservados de la pagina ARTICULO_NUTRICION_DEPORTE.jpg">
                </div>
                <div class="blog-info">
                    <div class="blog-title">
                        REALMENTE, ¿EL AGUA ES TAN MILAGROSA?.
                    </div>
                    <div class="blog-preview">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat.
                    </div>
                </div>
            </div>
            <div class="container2">
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
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore a alias debitis amet tempore ratione harum ipsum possimus inventore eaque modi dignissimos odio commodi, impedit perferendis eius sit consequatur doloremque obcaecati quibusdam vero ducimus?
                    Vel veritatis ut expedita. Repudiandae delectus non deserunt perspiciatis quis neque magni debitis impedit eveniet natus earum repellendus quasi corrupti illum magnam inventore veniam, tempora dignissimos quas commodi eos nemo. Porro
                    temporibus tempora alias natus, illum dolores labore id vitae, placeat quaerat minus reiciendis impedit quos! Totam voluptate corporis similique magni dolor quos sequi quidem, impedit voluptatem incidunt voluptas accusamus tenetur
                    ipsam perferendis expedita voluptatum iusto?
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo a ex quas maxime fuga numquam reprehenderit aliquid nemo voluptates, laboriosam vitae libero minima rerum deserunt recusandae quos earum saepe veritatis. Obcaecati voluptate autem a, ratione
                    repellendus tempora fugit magnam eos. Dolores pariatur labore laboriosam dicta doloribus saepe modi obcaecati voluptatum consequuntur, maxime alias in ut cupiditate. Quod adipisci ex praesentium ipsa labore sint, distinctio perferendis
                    quia iste officiis impedit iure cum numquam, maiores, porro quaerat dolor voluptatum officia quisquam! Earum, debitis! Ipsam voluptas nemo repellat obcaecati, molestias odio maiores nobis sed et rem quos eaque natus voluptatibus sequi,
                    odit suscipit aliquid. Quis adipisci saepe perferendis laudantium, odit aut accusantium dolorem doloribus. Voluptatum in animi cupiditate sequi corrupti autem enim recusandae?
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia illum fuga temporibus obcaecati ipsum perferendis non unde facere aspernatur, enim et, ab, eveniet ullam! Voluptatem, et sunt in esse fuga eius quae repellendus dolor saepe maiores expedita
                    recusandae rerum quo quos laboriosam cumque veritatis enim quaerat quidem error nesciunt totam aliquid. Consectetur, molestiae. Cum ipsum non quaerat quisquam. Id blanditiis quibusdam perspiciatis assumenda dicta animi dolore sunt
                    incidunt veniam, earum provident nobis saepe placeat consectetur! Libero provident ex qui laudantium totam at odio impedit repellat nobis accusamus animi aut, dolores quisquam. Neque debitis similique labore fuga veritatis, ducimus
                    aut? Cupiditate?
                </p>
            </div>
            <div class="blog2">
                <div class="blog-img">
                    <img src="./images/6 Imagen de 5688709 en Pixabay.jpg" alt="">
                </div>
                <div class="blog-info">
                    <div class="blog-title">
                        TIP'S, SONREIR CURA ENFERMEDADES.
                    </div>
                    <div class="blog-preview">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat. Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit. Repudiandae cupiditate natus officiis ab? Nostrum sint unde animi aspernatur consequuntur provident dolor magnam expedita enim quis saepe, pariatur doloribus neque illum asperiores
                        beatae. Dolor blanditiis vitae eaque perferendis. Id necessitatibus voluptates, ducimus architecto beatae impedit asperiores minima voluptatibus. Perferendis non magni ducimus, deleniti tenetur obcaecati, quam sequi, possimus ea
                        quos quas?
                    </div>
                </div>
            </div>
            <div class="container2">
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
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore a alias debitis amet tempore ratione harum ipsum possimus inventore eaque modi dignissimos odio commodi, impedit perferendis eius sit consequatur doloremque obcaecati quibusdam vero ducimus?
                    Vel veritatis ut expedita. Repudiandae delectus non deserunt perspiciatis quis neque magni debitis impedit eveniet natus earum repellendus quasi corrupti illum magnam inventore veniam, tempora dignissimos quas commodi eos nemo. Porro
                    temporibus tempora alias natus, illum dolores labore id vitae, placeat quaerat minus reiciendis impedit quos! Totam voluptate corporis similique magni dolor quos sequi quidem, impedit voluptatem incidunt voluptas accusamus tenetur
                    ipsam perferendis expedita voluptatum iusto?
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo a ex quas maxime fuga numquam reprehenderit aliquid nemo voluptates, laboriosam vitae libero minima rerum deserunt recusandae quos earum saepe veritatis. Obcaecati voluptate autem a, ratione
                    repellendus tempora fugit magnam eos. Dolores pariatur labore laboriosam dicta doloribus saepe modi obcaecati voluptatum consequuntur, maxime alias in ut cupiditate. Quod adipisci ex praesentium ipsa labore sint, distinctio perferendis
                    quia iste officiis impedit iure cum numquam, maiores, porro quaerat dolor voluptatum officia quisquam! Earum, debitis! Ipsam voluptas nemo repellat obcaecati, molestias odio maiores nobis sed et rem quos eaque natus voluptatibus sequi,
                    odit suscipit aliquid. Quis adipisci saepe perferendis laudantium, odit aut accusantium dolorem doloribus. Voluptatum in animi cupiditate sequi corrupti autem enim recusandae?
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia illum fuga temporibus obcaecati ipsum perferendis non unde facere aspernatur, enim et, ab, eveniet ullam! Voluptatem, et sunt in esse fuga eius quae repellendus dolor saepe maiores expedita
                    recusandae rerum quo quos laboriosam cumque veritatis enim quaerat quidem error nesciunt totam aliquid. Consectetur, molestiae. Cum ipsum non quaerat quisquam. Id blanditiis quibusdam perspiciatis assumenda dicta animi dolore sunt
                    incidunt veniam, earum provident nobis saepe placeat consectetur! Libero provident ex qui laudantium totam at odio impedit repellat nobis accusamus animi aut, dolores quisquam. Neque debitis similique labore fuga veritatis, ducimus
                    aut? Cupiditate?
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia illum fuga temporibus obcaecati ipsum perferendis non unde facere aspernatur, enim et, ab, eveniet ullam! Voluptatem, et sunt in esse fuga eius quae repellendus dolor saepe maiores expedita
                    recusandae rerum quo quos laboriosam cumque veritatis enim quaerat quidem error nesciunt totam aliquid. Consectetur, molestiae. Cum ipsum non quaerat quisquam. Id blanditiis quibusdam perspiciatis assumenda dicta animi dolore sunt
                    incidunt veniam, earum provident nobis saepe placeat consectetur! Libero provident ex qui laudantium totam at odio impedit repellat nobis accusamus animi aut, dolores quisquam. Neque debitis similique labore fuga veritatis, ducimus
                    aut? Cupiditate?
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia illum fuga temporibus obcaecati ipsum perferendis non unde facere aspernatur, enim et, ab, eveniet ullam! Voluptatem, et sunt in esse fuga eius quae repellendus dolor saepe maiores expedita
                    recusandae rerum quo quos laboriosam cumque veritatis enim quaerat quidem error nesciunt totam aliquid. Consectetur, molestiae. Cum ipsum non quaerat quisquam. Id blanditiis quibusdam perspiciatis assumenda dicta animi dolore sunt
                    incidunt veniam, earum provident nobis saepe placeat consectetur! Libero provident ex qui laudantium totam at odio impedit repellat nobis accusamus animi aut, dolores quisquam. Neque debitis similique labore fuga veritatis, ducimus
                    aut? Cupiditate?
                </p>
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

    <!-- TALLERES Y TIP´S -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                <h2>TALLERES  & TIP'S </h2>
            </div>
            <div class="blog2">
                <div class="blog-img">
                    <img src="./images/recetasparavivirmejor_beneficios_de_una_dieta_saludable_saludables_2021.jpg" alt="Imagenes de pixabayderechos reservados de la pagina vida-mas-sana-y-ejercicio.jpg">
                </div>
                <div class="blog-info">
                    <div class="blog-title">
                        EL PESCADO SABE MAL.
                    </div>
                    <div class="blog-preview2">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat. Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Eveniet consequatur a enim ullam obcaecati mollitia adipisci quam fuga? Consequatur temporibus inventore tenetur modi atque maiores ad, explicabo ipsam. Dignissimos debitis aliquid voluptatem
                        maiores nesciunt aut architecto corrupti, porro deserunt quos aspernatur inventore officia ab quam quis ipsam alias quas iusto obcaecati mollitia corporis. Porro, tempora. lorem100 Lorem, ipsum dolor sit amet consectetur adipisicing
                    </div>
                </div>
            </div>
            <div class="container2">
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
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore a alias debitis amet tempore ratione harum ipsum possimus inventore eaque modi dignissimos odio commodi, impedit perferendis eius sit consequatur doloremque obcaecati quibusdam vero ducimus?
                    Vel veritatis ut expedita. Repudiandae delectus non deserunt perspiciatis quis neque magni debitis impedit eveniet natus earum repellendus quasi corrupti illum magnam inventore veniam, tempora dignissimos quas commodi eos nemo. Porro
                    temporibus tempora alias natus, illum dolores labore id vitae, placeat quaerat minus reiciendis impedit quos! Totam voluptate corporis similique magni dolor quos sequi quidem, impedit voluptatem incidunt voluptas accusamus tenetur
                    ipsam perferendis expedita voluptatum iusto?
                </p>
            </div>
            <div class="blog2 row-revere">
                <div class="blog-img">
                    <img src="./images/postre_de_tres_leches_con_fruta_58432_orig 500x500.jpg" alt="Imagenes de pixabayderechos reservados de la pagina ARTICULO_NUTRICION_DEPORTE.jpg">
                </div>
                <div class="blog-info">
                    <div class="blog-title">
                        REALMENTE, ¿TIENE MUCHAS CALORIAS LOS POSTRES?.
                    </div>
                    <div class="blog-preview">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat.
                    </div>
                </div>
            </div>
            <div class="container2">
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
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore a alias debitis amet tempore ratione harum ipsum possimus inventore eaque modi dignissimos odio commodi, impedit perferendis eius sit consequatur doloremque obcaecati quibusdam vero ducimus?
                    Vel veritatis ut expedita. Repudiandae delectus non deserunt perspiciatis quis neque magni debitis impedit eveniet natus earum repellendus quasi corrupti illum magnam inventore veniam, tempora dignissimos quas commodi eos nemo. Porro
                    temporibus tempora alias natus, illum dolores labore id vitae, placeat quaerat minus reiciendis impedit quos! Totam voluptate corporis similique magni dolor quos sequi quidem, impedit voluptatem incidunt voluptas accusamus tenetur
                    ipsam perferendis expedita voluptatum iusto?
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo a ex quas maxime fuga numquam reprehenderit aliquid nemo voluptates, laboriosam vitae libero minima rerum deserunt recusandae quos earum saepe veritatis. Obcaecati voluptate autem a, ratione
                    repellendus tempora fugit magnam eos. Dolores pariatur labore laboriosam dicta doloribus saepe modi obcaecati voluptatum consequuntur, maxime alias in ut cupiditate. Quod adipisci ex praesentium ipsa labore sint, distinctio perferendis
                    quia iste officiis impedit iure cum numquam, maiores, porro quaerat dolor voluptatum officia quisquam! Earum, debitis! Ipsam voluptas nemo repellat obcaecati, molestias odio maiores nobis sed et rem quos eaque natus voluptatibus sequi,
                    odit suscipit aliquid. Quis adipisci saepe perferendis laudantium, odit aut accusantium dolorem doloribus. Voluptatum in animi cupiditate sequi corrupti autem enim recusandae?
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia illum fuga temporibus obcaecati ipsum perferendis non unde facere aspernatur, enim et, ab, eveniet ullam! Voluptatem, et sunt in esse fuga eius quae repellendus dolor saepe maiores expedita
                    recusandae rerum quo quos laboriosam cumque veritatis enim quaerat quidem error nesciunt totam aliquid. Consectetur, molestiae. Cum ipsum non quaerat quisquam. Id blanditiis quibusdam perspiciatis assumenda dicta animi dolore sunt
                    incidunt veniam, earum provident nobis saepe placeat consectetur! Libero provident ex qui laudantium totam at odio impedit repellat nobis accusamus animi aut, dolores quisquam. Neque debitis similique labore fuga veritatis, ducimus
                    aut? Cupiditate?
                </p>
            </div>
            <div class="blog2">
                <div class="blog-img">
                    <img src="./images/Donde-comer-sushi...webp" alt="">
                </div>
                <div class="blog-info">
                    <div class="blog-title">
                        LA COMIDA JAPONESA ES REALMENTE BUENA.
                    </div>
                    <div class="blog-preview">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat. Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit. Repudiandae cupiditate natus officiis ab? Nostrum sint unde animi aspernatur consequuntur provident dolor magnam expedita enim quis saepe, pariatur doloribus neque illum asperiores
                        beatae. Dolor blanditiis vitae eaque perferendis. Id necessitatibus voluptates, ducimus architecto beatae impedit asperiores minima voluptatibus. Perferendis non magni ducimus, deleniti tenetur obcaecati, quam sequi, possimus ea
                        quos quas?
                    </div>
                </div>
            </div>
            <div class="container2">
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
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore a alias debitis amet tempore ratione harum ipsum possimus inventore eaque modi dignissimos odio commodi, impedit perferendis eius sit consequatur doloremque obcaecati quibusdam vero ducimus?
                    Vel veritatis ut expedita. Repudiandae delectus non deserunt perspiciatis quis neque magni debitis impedit eveniet natus earum repellendus quasi corrupti illum magnam inventore veniam, tempora dignissimos quas commodi eos nemo. Porro
                    temporibus tempora alias natus, illum dolores labore id vitae, placeat quaerat minus reiciendis impedit quos! Totam voluptate corporis similique magni dolor quos sequi quidem, impedit voluptatem incidunt voluptas accusamus tenetur
                    ipsam perferendis expedita voluptatum iusto?
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo a ex quas maxime fuga numquam reprehenderit aliquid nemo voluptates, laboriosam vitae libero minima rerum deserunt recusandae quos earum saepe veritatis. Obcaecati voluptate autem a, ratione
                    repellendus tempora fugit magnam eos. Dolores pariatur labore laboriosam dicta doloribus saepe modi obcaecati voluptatum consequuntur, maxime alias in ut cupiditate. Quod adipisci ex praesentium ipsa labore sint, distinctio perferendis
                    quia iste officiis impedit iure cum numquam, maiores, porro quaerat dolor voluptatum officia quisquam! Earum, debitis! Ipsam voluptas nemo repellat obcaecati, molestias odio maiores nobis sed et rem quos eaque natus voluptatibus sequi,
                    odit suscipit aliquid. Quis adipisci saepe perferendis laudantium, odit aut accusantium dolorem doloribus. Voluptatum in animi cupiditate sequi corrupti autem enim recusandae?
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia illum fuga temporibus obcaecati ipsum perferendis non unde facere aspernatur, enim et, ab, eveniet ullam! Voluptatem, et sunt in esse fuga eius quae repellendus dolor saepe maiores expedita
                    recusandae rerum quo quos laboriosam cumque veritatis enim quaerat quidem error nesciunt totam aliquid. Consectetur, molestiae. Cum ipsum non quaerat quisquam. Id blanditiis quibusdam perspiciatis assumenda dicta animi dolore sunt
                    incidunt veniam, earum provident nobis saepe placeat consectetur! Libero provident ex qui laudantium totam at odio impedit repellat nobis accusamus animi aut, dolores quisquam. Neque debitis similique labore fuga veritatis, ducimus
                    aut? Cupiditate?
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia illum fuga temporibus obcaecati ipsum perferendis non unde facere aspernatur, enim et, ab, eveniet ullam! Voluptatem, et sunt in esse fuga eius quae repellendus dolor saepe maiores expedita
                    recusandae rerum quo quos laboriosam cumque veritatis enim quaerat quidem error nesciunt totam aliquid. Consectetur, molestiae. Cum ipsum non quaerat quisquam. Id blanditiis quibusdam perspiciatis assumenda dicta animi dolore sunt
                    incidunt veniam, earum provident nobis saepe placeat consectetur! Libero provident ex qui laudantium totam at odio impedit repellat nobis accusamus animi aut, dolores quisquam. Neque debitis similique labore fuga veritatis, ducimus
                    aut? Cupiditate?
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia illum fuga temporibus obcaecati ipsum perferendis non unde facere aspernatur, enim et, ab, eveniet ullam! Voluptatem, et sunt in esse fuga eius quae repellendus dolor saepe maiores expedita
                    recusandae rerum quo quos laboriosam cumque veritatis enim quaerat quidem error nesciunt totam aliquid. Consectetur, molestiae. Cum ipsum non quaerat quisquam. Id blanditiis quibusdam perspiciatis assumenda dicta animi dolore sunt
                    incidunt veniam, earum provident nobis saepe placeat consectetur! Libero provident ex qui laudantium totam at odio impedit repellat nobis accusamus animi aut, dolores quisquam. Neque debitis similique labore fuga veritatis, ducimus
                    aut? Cupiditate?
                </p>
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
