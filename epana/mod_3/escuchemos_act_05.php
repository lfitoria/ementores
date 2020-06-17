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

                        <div class="cont row mod">

                            <div class="col-12 col-md-5">

                                <img src="../img/mod3/3-03_act-personaje5_rp.png" alt="" class="img-fluid" />

                            </div>

                            <div class="col-12 col-md-7">

                                <div class="audio_3-03 per5">

                                    <p class="text-center intro-label">Yo tengo 20 y mi novio tiene 17. Él quiere que compartamos fotos íntimas. A pesar de que somos novios desde hace bastante tiempo y sea algo sólo entre nosotros, sé que al enviarlas por Internet algo podría salir mal y rechazo su propuesta.</p>

                                    <audio height="auto" id="video" controls>

                                        <source src="../audios/mod3/3-03_act-situacion5.mp3" type="audio/mp3">

                                    </audio>

                                </div>

                                <button class="btn-modal">Respuesta</button>

                            </div>
                            <div class="d-block d-sm-none">

                                <div class="row ">

                                    <a class="gotoModulePage baki" href="escuchemos_act_04.php">Atrás</a>

                                    <a class="gotoModulePage conti" href="escuchemos_act_06.php">Continuar</a>

                                </div>

                            </div>



                            <a class="gotoModulePage baki d-none d-sm-block" href="escuchemos_act_04.php">Atrás</a>

                            <a class="gotoModulePage conti d-none d-sm-block" href="escuchemos_act_06.php">Continuar</a>

                            <!-- <a href="../0-03_menu.php#mod3" class="back_to_menu d-none">Volver</a>
                            <a href="/familias/mod_3/3-03_act.php" id="back_family">Volver al inicio</a> -->
                            
                        </div>
                        <p class="intro-header blue"><a href="../"  class="icovolver hvr-icon">Volver al inicio</a></p>
                    </div>

                </div>

                <div class="modal" id="modal_3-03_act" tabindex="-1" role="dialog">

                    <div class="modal-dialog" role="document">

                        <div class="modal-content">

                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                            </div>

                            <div class="modal-body">

                                <div class="row 3-03-act-mdl">

                                    <div class="col-12">

                                        <p>No importa si las imágenes fueron obtenidas en una relación de confianza ni tampoco si fueron enviadas voluntariamente. <strong> Una persona adulta que tenga en su poder estas imágenes puede ser denunciada y procesada.</strong> <br> Recuerda, si una persona adulta mantiene una relación con una persona entre los 15 y los 18 años, y le lleva más de cinco años, está cometiendo un delito.</p>

                                    </div>

                                </div>

                            </div>

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

                <?php require '../menu-sidebar-2.php' ?>

            </ul>



        </nav>

    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="../js/bootstrap.bundle.js" type="text/javascript"></script>

    <script src="../js/bootstrap.js" type="text/javascript"></script>

    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>



    <script>
        $(".btn-modal").click(function() {

            $("#modal_3-03_act").modal("show");

        });
    </script>

</body>

</html>