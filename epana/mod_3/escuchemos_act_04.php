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

                                    <img src="../img/mod3/3-03_act-personaje4_rp.png" alt="" class="img-fluid"/>

                                </div>

                                <div class="col-12 col-md-7">

                                    <div class="audio_3-03 per4">

                                        <p class="text-center intro-label">A mí me gusta escribir y de vez en cuando, hasta dibujar historias eróticas. A veces son sobre adolescentes, pero son sólo fantasías para poner en mi blog o para mandarlos por WhatsApp a mis primos, que esos con 15 años ya han visto cosas peores.</p>

                                        <audio height="auto" id="video" controls>

                                            <source src="../audios/mod3/3-03_act-situacion4.mp3" type="audio/mp3">

                                        </audio>

                                    </div>

                                    <button class="btn-modal">Respuesta</button>

                                </div>

                                <div class="d-block d-sm-none">

                                    <div class="row ">

                                        <a class="gotoModulePage baki" href="escuchemos_act_03.php">Atrás</a>

                                        <a class="gotoModulePage conti" href="escuchemos_act_05.php">Continuar</a>

                                    </div>

                                </div>



                                <a class="gotoModulePage baki d-none d-sm-block" href="escuchemos_act_03.php">Atrás</a>

                                <a class="gotoModulePage conti d-none d-sm-block" href="escuchemos_act_05.php">Continuar</a>

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

                                    <div class="row 3-03-act-mdl" >

                                        <div class="col-12">

                                            <p>La ley establece que las representaciones de personas menores de edad en actos sexuales, o de sus partes íntimas, en cualquier forma, es material de abuso sexual infantil. <br>Aunque se trate de un texto o ilustración, igual es un delito. <br> Además, enviar contenido sexual a personas  menores de edad, <strong>es un crimen.</strong></p>

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

                <?php require '../menu-sidebar-2.php'?>

                </ul>



            </nav>

        </div>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script src="../js/bootstrap.bundle.js" type="text/javascript"></script>

        <script src="../js/bootstrap.js" type="text/javascript"></script>

        <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>



        <script>

            $(".btn-modal").click(function(){

                $("#modal_3-03_act").modal("show");

            });

        </script>

    </body>

</html>