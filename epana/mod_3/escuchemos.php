<html id="page-3-03">
<?php require '../header.php'; ?>

<body>

    <div class="wrapper">
        <!-- Page Content -->
        <div id="content">
            <div class="rowa header-top">
                <div class="container">
                    <div class="header-top-box"></div>
                </div>
                <!-- <img src="img/fondo_header.png"> -->
            </div>


            <section class="container">
                <!--<p class="intro-header blue"><a href="../"  class="icovolver hvr-icon">Volver al inicio</a></p>-->
                <h2 class="title-cx" id="titleancla">
                    Escuchemos: no siempre tenemos la razón
                </h2>

                <div class="main">

                    <div id="act_01" class="">



                        <div class="cont row">
                            <div class="row align-items-center justify-content-md-center">
                                <div class="col-12 col-sm-8">


                                    <p id="info-p">Escucha a cada una de estas personas describir una conducta. Piensa
                                        brevemente si esta conducta es adecuada o no. Luego, presiona el ícono para
                                        descubrirlo</p>

                                </div>
                            </div>

                            <div class="col-6 col-md-4">

                                <div class="item item-thumb" data-slider="1" data-title="Abuso sexual en línea">

                                    <a href="escuchemos_act_01.php"><img src="../img/mod3/3-03_act-thumb1_rp.png" alt=""
                                            class="img-fluid" /></a>

                                </div>

                            </div>

                            <div class="col-6 col-md-4">

                                <div class="item item-thumb" data-slider="2" data-title="Explotación sexual en línea">

                                    <a href="3-03_act_02.php"><img src="../img/mod3/3-03_act-thumb2_rp.png" alt=""
                                            class="img-fluid" /></a>

                                </div>

                            </div>

                            <div class="col-6 col-md-4">

                                <div class="item item-thumb" data-slider="2" data-title="Explotación sexual en línea">

                                    <a href="3-03_act_03.php"><img src="../img/mod3/3-03_act-thumb3_rp.png" alt=""
                                            class="img-fluid" /></a>



                                </div>

                            </div>

                            <div class="col-6 col-md-4">

                                <div class="item item-thumb" data-slider="2" data-title="Explotación sexual en línea">

                                    <a href="3-03_act_04.php"><img src="../img/mod3/3-03_act-thumb4_rp.png" alt=""
                                            class="img-fluid" /></a>



                                </div>

                            </div>

                            <div class="col-6 col-md-4">

                                <div class="item item-thumb" data-slider="2" data-title="Explotación sexual en línea">

                                    <a href="3-03_act_05.php"><img src="../img/mod3/3-03_act-thumb5_rp.png" alt=""
                                            class="img-fluid" /></a>



                                </div>

                            </div>

                            <div class="col-6 col-md-4">

                                <div class="item item-thumb" data-slider="2" data-title="Explotación sexual en línea">

                                    <a href="3-03_act_06.php"><img src="../img/mod3/3-03_act-thumb6_rp.png" alt=""
                                            class="img-fluid" /></a>



                                </div>

                            </div>

                            <a href="../0-03_menu.php#mod3" class="back_to_menu d-none">Volver al menú</a>
<p class="intro-header blue"><a href="../"  class="icovolver hvr-icon">Volver al inicio</a></p>

                        </div>

                    </div>

                </div>

            </section>

            <?php require '../footer.php'; ?>

        </div>

        <nav id="sidebar" class="">

            <div class="sidebar-header">

                <h3>Menu</h3>

            </div>



            <ul class="list-unstyled components">

                <?php require '../menu-sidebar-2.php'?>

            </ul>



        </nav>

    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="../js/bootstrap.bundle.js" type="text/javascript"></script>

    <script src="../js/bootstrap.js" type="text/javascript"></script>

    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>



    <script>
    $.ajax({

        url: "../db/user/update_module.php",

        method: "POST",

        data: {

            step: 3,

            module: 3

        },

        dataType: "html"

    });
    </script>

</body>

</html>
