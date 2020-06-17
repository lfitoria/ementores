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
                        <div id="act_01" class="btn-j-center">
                            <div class="mod">
                                <div class="row">
                                    <div class="col-12 col-md-5">
                                        <img src="../img/mod3/3-03_act-personaje1_rp.png" alt="" class="img-fluid"/>
                                    </div>
                                    <div class="col-12 col-md-7">
                                        <div class="audio_3-03 per1">
                                            <p class="text-center intro-label">Pienso que hay que tener cuidado al hacer una denuncia de abuso sexual en línea. Cuando el abuso se da en Internet, es imposible aportar pruebas. Si yo denuncio un delito de este tipo, ¡no tengo cómo probarlo!</p>
                                            <audio height="auto" id="video" controls>
                                                <source src="../audios/mod3/3-03_act-situacion1.mp3" type="audio/mp3">
                                            </audio>
                                        </div>
                                        <button class="btn-modal btn-modal-3-03">Respuesta</button>
                                    </div>
                                </div>
                                <div class="d-block d-sm-none">
                                    <div class="row ">
                                        <a class="gotoModulePage conti" href="escuchemos_act_02.php">Continuar</a>
                                    </div>
                                </div>
                                <a class="gotoModulePage conti" href="escuchemos_act_02.php">Continuar</a>
                                
                                <!-- <a href="../0-03_menu.php#mod3" class="back_to_menu d-none">Volver</a>
                                <a href="/familias/mod_3/3-03_act.php" id="back_family">Volver al inicio</a> -->
                                <p class="intro-header blue"><a href="../"  class="icovolver hvr-icon">Volver al inicio</a></p>
                            </div>
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
                                            <p><strong>Falso.</strong> Aunque un delito sexual tenga lugar en línea, es posible obtener pruebas, ya sean fotos, audios, vídeos o capturas de los mensajes intercambiados. <br>  Además la ley nos dice que estamos obligados a denunciar este tipo de delitos, sean físicos o a través de las TIC.</p>
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