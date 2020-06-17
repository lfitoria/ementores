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
                                    <img src="../img/mod3/3-03_act-personaje3_rp.png" alt="" class="img-fluid"/>
                                </div>
                                <div class="col-12 col-md-7">
                                    <div class="audio_3-03 per3">
                                        <p class="text-center intro-label">Yo conocí a una persona menor de edad por Internet. Siempre fui honesto y le dije que me gustaba mucho y que siempre sueño con verla sin ropa. Pero eso es todo. Yo nunca le he pedido fotos y menos que nos encontremos.</p>
                                        <audio height="auto" id="video" controls>
                                            <source src="../audios/mod3/3-03_act-situacion3.mp3" type="audio/mp3">
                                        </audio>
                                    </div>
                                    <button class="btn-modal">Respuesta</button>
                                </div>
                                <div class="d-block d-sm-none">
                                    <div class="row ">
                                        <a class="gotoModulePage baki" href="escuchemos_act_02.php">Atrás</a>
                                        <a class="gotoModulePage conti" href="escuchemos_act_04.php">Continuar</a>
                                    </div>
                                </div>

                                <a class="gotoModulePage baki d-none d-sm-block" href="escuchemos_act_02.php">Atrás</a>
                                <a class="gotoModulePage conti d-none d-sm-block" href="escuchemos_act_04.php">Continuar</a>
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
                                            <!-- <p>No es necesario que se envíen imágenes ni que la víctima y la persona abusadora se encuentren, para que exista un abuso. <br><strong>Cualquier comunicación de contenido sexual o erótico por medio de las TIC es un delito.</strong></p> -->
                                            <p>No es necesario que se envíen imágenes ni que la víctima y la persona abusadora se encuentren, para que exista un abuso.
                                            <strong>Cualquier comunicación de contenido sexual o erótico entre un adulto y una persona menor de edad por medio de las TIC es un delito.</strong></p>
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

                <?php require '../menu-sidebar.php'?>
                
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