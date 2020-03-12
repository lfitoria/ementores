<html>
    <head>
        <meta http-equiv="Cache-Control" content="no-cache" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <link rel="icon" href="favicon.ico" type="image/gif">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Menú | Programa e-mentores Familias</title>
        <link type="text/css" href="css/bootstrap.css" rel="stylesheet">
        <link type="text/css" href="css/bootstrap-grid.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/index.css" rel="stylesheet" type="text/css" />
        <link href="css/mod1.css" rel="stylesheet" type="text/css" />

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127635098-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-127635098-1');
        </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127635098-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-127635098-1');
        </script>
    </head>
    <body>
        <div class="wrapper">
            <div id="content">
                <section class="container-full index-main">
                    <?php

                    session_start();

                    $user = $_SESSION['user'];
                    $last_id = $user["id"];
                    $certificate = $user["certificate_name"];
                    $q1 = $user["q1"];


                    if (is_null($user)) {
                        echo '<script>window.location="http://ementores.org/familias/0-04_prelogin.php"</script>';
                        die();
                    }

                    ?>
                    <nav class="navbar navbar-expand-lg navbar-light bg-light d-block">
                        <div class="container-fluid">


                            <div class="nav justify-content-start">


                            </div>


                            <div class="nav justify-content-center">
                                <h1><a class="mx-auto" href="/familias/index.php"><img src="img/logo-ementores.png" alt="Curso en línea uso seguro de Internet para familia |  Programa e-mentores Familias"></a></h1>
                            </div>


                            <div class="nav justify-content-end">
                                <button type="button" id="sidebarCollapse" class="btn" >
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </div>
                        </div>
                    </nav>


                    <div class="bck-intro padding-top-bottom">
                        <section class="container">
                            <div class="row justify-content-md-center">
                                <div class="main-block-menu">
                                    <?php

                                    // include 'db/connection/conexion.php';


                                    // $module = 1;


                                    // $query = "SELECT * FROM module where user = $last_id and module = $module and is_completed = 0";
                                    // $result = $mysqli->query($query);
                                    // $row_cnt1 = $result->num_rows;


                                    // $query = "SELECT step, is_completed FROM module where user = $last_id and module = $module";
                                    // $result = $mysqli->query($query);
                                    // $values1 = array();
                                    // while ($row = mysqli_fetch_array($result)) {

                                    //     $values1[] = $row;
                                    // }
                                    // $values1[0]["is_completed"] = 1;

                                    ?>
                                    <h3 class="text-center menu-title" id="mod1">Me informo: oportunidades y riesgos en la web.</h3>
                                    <div class="menu-mod-cont col-12">
                                        <div class="row">
                                            <div class="row col-12 justify-content-center">
                                            <div class="row intro-menu col-12 col-sm-10 justify-content-center">
                                                <!-- <p style="
                                                font-size: 1.2em;" id="info-p">A continuación encontrará información para aprender sobre el uso seguro de internet. 
                                                <br>
                                                Cada vez que termine de ver los contenidos de un capítulo, podrá realizar un reto final para desbloquear el siguiente apartado.
                                                </p> -->
                                                <p style="
                                                font-size: 1.2em;" id="info-p">A continuación encontrarás información para aprender más sobre el uso seguro de Internet y las TIC.
                                                </p>
                                            </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                <div class="item-module <?php if ($values1[0]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                    <!-- <img src="img/mod1/modulo1-act1.png" alt=""/> -->
                                                    <a href="mod_1/1-01_vid.php" class="v-act-1">Las TIC en todos lados y a todas horas</a>
                                                    <!--<p class=dots-mod>. . .</p>-->
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                <div class="item-module <?php if ($values1[1]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                    <!-- <img src="img/icon.png" alt=""/> -->
                                                    <a href="mod_1/1-02_inf.php" class="v-act-2">Aplicaciones y redes sociales para estar al día</a>
                                                    <!--<p class=dots-mod>. . .</p>-->
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                <div class="item-module <?php if ($values1[2]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                    <!-- <img src="img/icon.png" alt=""/> -->
                                                    <a href="mod_1/1-03_act.php?t=m" class="v-act-3">Las dos caras de las TIC</a>
                                                    <!--<p class=dots-mod>. . .</p>-->
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                <div class="item-module <?php if ($values1[3]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                    <!-- <img src="img/icon.png" alt=""/> -->
                                                    <a href="mod_1/1-04_inf.php" class="v-act-4">Sáquele el máximo a la Internet</a>
                                                    <!--<p class=dots-mod>. . .</p>-->
                                                </div>
                                            </div>


                                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                <div class="item-module <?php if ($values1[4]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                    <!-- <img src="img/icon.png" alt=""/> -->
                                                    <a href="mod_1/1-05_sld.php" class="v-act-5">Conductas violentas en la Internet y en Redes Sociales</a>
                                                    <!-- <a href="mod_1/1-05_sld.php" class="v-act-5">La legión del ciber-mal</a> -->
                                                    <!--<p class=dots-mod>. . .</p>-->
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                <div class="item-module <?php if ($values1[5]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                    <!-- <img src="img/icon.png" alt=""/> -->
                                                    <a href="mod_1/1-06_vid.php" class="v-act-6">¿Qué es el abuso y la explotación sexual en línea?</a>
                                                    <!--<p class=dots-mod>. . .</p>-->
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                <div class="item-module <?php if ($values1[6]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                    <!-- <img src="img/icon.png" alt=""/> -->
                                                    <a href="mod_1/1-07_act.php" class="v-act-7">Abuso sexual en línea: ojo con las señales</a>
                                                    <!--<p class=dots-mod>. . .</p>-->
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                <div class="item-module <?php if ($values1[7]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                    <!-- <img src="img/icon.png" alt=""/> -->
                                                    <a href="mod_1/1-08_sld.php" class="v-act-8">Las cicatrices del abuso sexual</a>
                                                    <!--<p class=dots-mod>. . .</p>-->
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-12 item-module-final">
                                                <?php if ($row_cnt1 == 0): ?><a href="mod_1/1-09_eva.php">ACTIVIDAD FINAL</a><?php endif; ?>
                                            </div>
                                        </div>
                                    </div>


                                    <?php

                                    // $module2 = 2;


                                    // $query2 = "SELECT * FROM module where user = $last_id and module = $module2 and is_completed = 0";
                                    // $result2 = $mysqli->query($query2);
                                    // $row_cnt2 = $result2->num_rows;


                                    // $query2 = "SELECT step, is_completed FROM module where user = $last_id and module = $module2";
                                    // $result2 = $mysqli->query($query2);
                                    // $values2 = array();
                                    // while ($row = mysqli_fetch_array($result2)) {

                                    //     $values2[] = $row;
                                    // }



                                    // $queryAct1 = "SELECT * FROM activity where user = $last_id and module = 1";
                                    // $resultAct1 = $mysqli->query($queryAct1);
                                    // $activity1 = mysqli_fetch_assoc($resultAct1);
                                    $activity1["is_approved"] = 1;
                                    
                                    ?>
                                    <div class="module <?php if ($activity1["is_approved"] == 0) : ?>disabled<?php endif ?>">
                                        <h3 class="text-center menu-title" id="mod2">Prevengo: acompaño en línea.</h3>
                                        <div class="menu-mod-cont col-12">
                                            <div class="row">
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values2[0]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <!-- <img src="img/icon.png" alt=""/> -->
                                                        <a href="mod_2/2-01_vid.php" class="v2-act-1">Acompañar también es proteger</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values2[1]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <!-- <img src="img/icon.png" alt=""/> -->
                                                        <a href="mod_2/2-02a_sli.php" class="v2-act-2">Crianza Respetuosa: pongamos límites con amor</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values2[9]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <!-- <img src="img/icon.png" alt=""/> -->
                                                        <a href="mod_2/2-02b_sli.php" class="v2-act-2a">Crianza tecnólogica en tiempos del Internet</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values2[2]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <!-- <img src="img/icon.png" alt=""/> -->
                                                        <a href="mod_2/2-03_act.php" class="v2-act-3">Decisiones que le protegen en Internet</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values2[3]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <!-- <img src="img/icon.png" alt=""/> -->
                                                        <a href="mod_2/2-04_inf.php" class="v2-act-4">¡No lo cuente todo en la Internet!</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>




                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values2[4]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <!-- <img src="img/icon.png" alt=""/> -->
                                                        <a href="mod_2/2-05_act.php" class="v2-act-5">“Amistad” en redes sociales ¿Aceptaría estas invitaciones?</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values2[5]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <!-- <img src="img/icon.png" alt=""/> -->
                                                        <a href="mod_2/2-06_act.php" class="v2-act-6">Reconozcamos nuestras emociones en el uso de las TIC</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values2[6]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <!-- <img src="img/icon.png" alt=""/> -->
                                                        <a href="mod_2/2-07_inf.php" class="v2-act-7">Prevenir y prohibir ¡No son lo mismo!</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values2[7]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <!-- <img src="img/icon.png" alt=""/> -->
                                                        <a href="mod_2/2-08_vid.php" class="v2-act-8">Huella digital: nuestro rastro en Internet</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>




                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values2[8]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <!-- <img src="img/icon.png" alt=""/> -->
                                                        <a href="mod_2/2-09_sli.php" class="v2-act-9">Nuestro escudo de protección en Internet</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 item-module-final">
                                                    <?php if ($row_cnt2 == 0): ?><a href="mod_2/2-10_eva.php">ACTIVIDAD FINAL</a><?php endif; ?>
                                                </div>
                                            </div>
                                        </div>




                                    </div>


                                    <?php

                                    // $module3 = 3;


                                    // $query3 = "SELECT * FROM module where user = $last_id and module = $module3 and is_completed = 0";
                                    // $result3 = $mysqli->query($query3);
                                    // $row_cnt3 = $result3->num_rows;


                                    // $query3 = "SELECT step, is_completed FROM module where user = $last_id and module = $module3";
                                    // $result3 = $mysqli->query($query3);
                                    // $values3 = array();
                                    // while ($row = mysqli_fetch_array($result3)) {

                                    //     $values3[] = $row;
                                    // }

              

                                    // $queryAct2 = "SELECT * FROM activity where user = $last_id and module = 2";
                                    // $resultAct2 = $mysqli->query($queryAct2);
                                    // $activity2 = mysqli_fetch_assoc($resultAct2);

                                    // $queryAct3 = "SELECT * FROM activity where user = $last_id and module = 3";
                                    // $resultAct3 = $mysqli->query($queryAct3);
                                    // $activity3 = mysqli_fetch_assoc($resultAct3);
                                    // // var_dump($activity2);
                                    $activity2["is_approved"] = 1;
                                    
                                    ?>
                                    <div class="module <?php if ($activity2["is_approved"] == 0) : ?>disabled<?php endif ?>">
                                        <h3 class="text-center menu-title" id="mod3">Protejo: reacciono ante situaciones.</h3>
                                        <div class="menu-mod-cont col-12">
                                            <div class="row">
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values3[0]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <!-- <img src="img/icon.png" alt=""/> -->
                                                        <a href="mod_3/3-01_vid.php" class="v3-act-1">¿Cómo protegen las leyes a las nuestras niñas y niños?</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values3[1]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <!-- <img src="img/icon.png" alt=""/> -->
                                                        <a href="mod_3/3-03_act.php" class="v3-act-3">​Escuchemos: no siempre tenemos ​la ​razón</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values3[2]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <a href="mod_3/3-04_inf.php" class="v3-act-4">Recuerde las señales de alarma para identificar el abuso sexual</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>


                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values3[3]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <!-- <img src="img/icon.png" alt=""/> -->
                                                        <a href="mod_3/3-05_vid.php" class="v3-act-5">¡No lo dejemos pasar! Actuemos contra el abuso</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values3[4]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <!-- <img src="img/icon.png" alt=""/> -->
                                                        <a href="mod_3/3-07_inf.php" class="v3-act-7">¿Cómo denunciar las violencias en línea?</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                                    <div class="item-module <?php if ($values3[5]["is_completed"] == 1) : ?>active<?php endif ?>">
                                                        <!-- <img src="img/icon.png" alt=""/> -->
                                                        <a href="mod_3/3-08_vid.php" class="v3-act-8">¿Cómo ser una familia e-Mentora?</a><!--<p class=dots-mod>. . .</p>-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 item-module-final">
                                                    <?php if ($row_cnt3 == 0): ?><a href="mod_3/3-09_eva.php">ACTIVIDAD FINAL</a><?php endif; ?>
                                                   

                                                </div>
                                            </div>
                                        </div>
                                        <?php if ($activity2["is_approved"] == 1 && $activity3["is_approved"] == 1) : ?>
                                            <div class="col-12 item-cert">
                                                <?php if(!empty($q1)){ ?>
                                                    <a href="0-06_cert.php" class="btn-cert">Descargar certificado</a>
                                                <?php }else{ ?>
                                                    <a href="encuesta.php" class="btn-cert">Descargar certificado</a>
                                                <?php } ?>
                                            </div>
                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>  

                        </section>
                    </div>
                </section>
                <?php require './footer.php'; ?>
            </div><!--  fin  <div id="content"> -->
            <nav id="sidebar" class="">
                <div class="sidebar-header">
                    <h3>Menu</h3>
                </div>
                <ul class="list-unstyled components">
                    <!-- <p>Dummy Heading</p> -->
                    <!-- <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="#">Home 1</a>
                            </li>
                            <li>
                                <a href="#">Home 2</a>
                            </li>
                            <li>
                                <a href="#">Home 3</a>
                            </li>
                        </ul>
                    </li> -->
                    <li>
                        <a href="/familias/familias.php" class="nav-sobre">Sobre el proyecto</a>
                    </li>
                    <li>
                         <a href="/familias/0-03_menu.php" class="nav-actividad">Ir a menú de actividades</a>
                    </li>
                    <li>
                        <a href="/familias" class="nav-iniciar">Cerrar sesión</a>
                    </li>
                </ul>


            </nav>
        </div> <!-- fin wrapper -->


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script>
            $(".module.disabled a").each(function () {

                $(this).attr("href", "");
                $(this).attr("disabled", true);
            });


            $(".module.disabled a").click(function (e) {

                e.preventDefault();
            });


            $(window).load(function(){

                var type = window.location.hash.substr(1);


                $("html, body").animate({ scrollTop: $('#'+ type).offset().top }, 500);
            });
        </script>
    </body>
</html>