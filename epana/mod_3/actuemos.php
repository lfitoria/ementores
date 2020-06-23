<html id="page-3-05">



<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127635098-3"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-127635098-3');
    </script>
    <meta http-equiv="Cache-Control" content="no-cache" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <link rel="icon" href="http://www.ementores.org/epana/favicon.ico" type="image/gif">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url" content="http://www.ementores.org/epana" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Uso seguro de las tecnologías e internet para chicos y chicas -  Fundación  Costa Rica" />
    <meta property="og:image" content="http://www.ementores.org/epana/OG_e-compas.png" />
    <meta property="og:image:secure_url" content="https://www.ementores.org/epana/OG_e-compas.png" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="512" />
    <meta property="og:image:height" content="270" />
    <meta property="og:image:alt"
        content="Espacio con recursos audiovisuales e interactivos para que chicas y chicos aprendan a protegerse contra los peligros en la internet." />
    <meta property="og:description"
        content="Espacio con recursos audiovisuales e interactivos para que chicas y chicos aprendan a protegerse contra los peligros en la internet." />
    <meta name="description"
        content="Espacio con recursos audiovisuales e interactivos para que chicas y chicos aprendan a protegerse contra los peligros en la internet." />
    <title>Curso en línea uso seguro de internet para familias | Programa e-mentores Familias</title>
    <link type="text/css" href="/epana/css/bootstrap.css" rel="stylesheet">
    <link type="text/css" href="/epana/css/bootstrap-grid.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link href="/epana/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/epana/css/index.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/recu.css">

    <link href="/epana/css/mod2.css" rel="stylesheet" type="text/css" />
    <link href="/epana/css/mod3.css" rel="stylesheet" type="text/css" />
    <!-- <link  type="text/css"  href="/epana/css/bootstrap.css" rel="stylesheet">
    <link  type="text/css"  href="/epana/css/bootstrap-grid.css" rel="stylesheet"> -->
    <!-- Global site tag (gtag.js) - Google Analytics
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127635098-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-127635098-1');
        </script> -->
</head>
<button class="encuesta-modal" data-toggle="modal" data-target=".modal_encuesta">
    <p class="d-flex">¿Qué te parece
    <img id="img-encuesta-fixed" src="/epana/img/epana_survey.png">
        ?
    </p>
</button>

<div id="boxelo">
    <div id="logo-flotante">
        <h1>
            <a href="/epana">
                <img alt="e-compa: Uso seguro de las tecnologías e internet para chicos y chicas"
                    src="/epana/img/logo-header-e-pana.png">
            </a>
        </h1>
    </div>
    <div id="logo-texto">
        <p>Espacio con recursos audiovisuales para que <strong>chicas y chicos aprendan a aprovechar las tecnologías y
                protegerse contra los peligros en la Web.</strong></p>
    </div>
</div>

<?php
session_start();

?>

<input type="hidden" value="<?php
                            if (isset($_SESSION['usuario'])) {
                                echo $_SESSION['usuario'];
                            }
                            ?>" id="session">



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
                    ¡No lo dejemos pasar! Actuemos contra el abuso
                </h2>

                <div class="row align-items-center justify-content-md-center">
                    <div class="col-12 col-sm-8 p-ins">

                        
                        <p id="info-p"><strong>Haz clic en las pestañas para ver los videos. Cuando se te presente una pregunta, elije la opción que consideres adecuada.
                            </strong><img id="vol-img" src="../img/E-COMPAS-audio_rp.png">
                        </p>

                    </div>
                </div>
                <div class="main">
                    <div id="act_01" class="">
                        <ul class="nav nav-tabs " id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link sof-tab active" id="sofia-tab" data-toggle="tab" href="#sofia"
                                    role="tab" aria-controls="home" aria-selected="true">Sofía</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link stev-tab" id="steven-valeria-tab" data-toggle="tab"
                                    href="#steven-valeria" role="tab" aria-controls="contact"
                                    aria-selected="false">Steven y Valeria</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link eri-tab " id="erick-tab" data-toggle="tab" href="#erick" role="tab"
                                    aria-controls="contact" aria-selected="false">Erick</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">


                            <div class="card tab-pane fade sof show active" id="sofia" role="tabpanel"
                                aria-labelledby="home-tab">
                                <div class="card-header" role="tab" id="heading-A">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" href="#collapse-A" data-parent="#content"
                                            aria-expanded="true" aria-controls="collapse-A">
                                            Sofía
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse-A" class="collapse show" role="tabpanel" aria-labelledby="heading-A">
                                    <div class="card-body">
                                        <div class="col-12">
                                            <div class="video-item">
                                                <!-- <video width="100%" height="auto" id="video1"
                                                    poster="../img/videos/vistas-3-05-1.png" controls> -->
                                                <video width="100%" height="auto" id="video1" controls>
                                                    <source src="../../../familias/videos/3-05_vid_RD_ePana_sofia.mp4"
                                                        type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="modal" id="modal_3-05_vid" tabindex="-1" role="dialog"
                                                data-backdrop="static" data-keyboard="false">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header"></div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <p class="font-weight-bold">Sofía no le ha enviado
                                                                        nada pero su mamá, preocupada, le pide ver los
                                                                        mensajes. Ella no quiere porque le da vergüenza.
                                                                    </p>
                                                                    <p class="font-weight-bold" style="font-size: 1.6em;">¿Qué debería hacer Sofía?</p>
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-6">
                                                                            <button class="btn btn-info"
                                                                                style="display: block; width: 100%; white-space: normal;"
                                                                                onclick="playVideo()">Llamar a la persona y enfrentarla.</button>
                                                                            <br>
                                                                        </div>
                                                                        <div class="col-12 col-md-6">
                                                                            <button class="btn btn-info"
                                                                                style="display: block; width: 100%; white-space: normal;"
                                                                                onclick="playVideo()">Contarle a su mamá y sacar pantallazos de los mensajes para que sirvan de prueba en una denuncia</button>
                                                                            <br>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button class="gotoModulePage3 baki">Atrás</button>
                                <button class="gotoModulePage2 conti">Continuar</button>

                            </div>





                            <div class="card tab-pane fade ste show" id="steven-valeria" role="tabpanel"
                                aria-labelledby="profile-tab">

                                <div class="card-header" role="tab" id="heading-B">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapse-B"
                                            data-parent="#content" aria-expanded="false" aria-controls="collapse-B">
                                            Steven y Valeria
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-A">
                                    <div class="card-body">
                                        <div class="col-12">
                                            <div class="video-item">
                                                <video width="100%" height="auto" id="video2"
                                                    poster="../img/videos/vistas-3-05-2.png" controls>
                                                    <source src="../../../familias/videos/3-05_vid_RD_ePana_steven-valeria.mp4"
                                                        type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="modal" id="modal_3-05_vid" tabindex="-1" role="dialog"
                                                data-backdrop="static" data-keyboard="false">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header"></div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <p class="font-weight-bold">Cuando Steven y Valeria
                                                                        eran novios se mandaron fotos íntimas. Seis
                                                                        meses después, reciben un mensaje de alguien que
                                                                        no conocen, pidiéndoles más fotos o dinero a
                                                                        cambio de no publicarlas en Facebook. Steven
                                                                        empieza a sacarse malas notas. Valeria deja de
                                                                        comer y llora todo el día. </p>
                                                                    <p class="font-weight-bold" style="font-size: 1.6em;">¿Qué deben hacer Steven y Valeria?</p>
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-6">
                                                                            <button class="btn btn-info"
                                                                                style="display: block; width: 100%; white-space: normal;"
                                                                                onclick="playVideo()">Acceder a lo que le pidan con tal de no pasar la vergüenza de sus fotografías publicadas…</button>
                                                                            <br>
                                                                        </div>
                                                                        <div class="col-12 col-md-6">
                                                                            <button class="btn btn-info"
                                                                                style="display: block; width: 100%; white-space: normal;"
                                                                                onclick="playVideo()">Contarle a una persona de confianza y juntas poner la denuncia.</button>
                                                                            <br>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button class="gotoModulePage1 baki">Atrás</button>
                                <button class="gotoModulePage3 conti">Continuar</button>

                            </div>





                            <div class="card tab-pane fade eric" id="erick" role="tabpanel"
                                aria-labelledby="profile-tab">
                                <div class="card-header" role="tab" id="heading-B">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapse-C"
                                            data-parent="#content" aria-expanded="false" aria-controls="collapse-B">
                                            Erick
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse-C" class="collapse" role="tabpanel" aria-labelledby="heading-A">
                                    <div class="card-body">
                                        <div class="col-12">
                                            <div class="video-item">
                                                <!-- <video width="100%" height="auto" id="video3"
                                                    poster="../img/videos/vistas-3-05-3.png" controls> -->
                                                    <video width="100%" height="auto" id="video3" controls>
                                                    <source src="../../../familias/videos/3-05_vid_ePana-erick.mp4" type="video/mp4">
                                                </video>

                                            </div>
                                            <div class="modal" id="modal_3-05_vid" tabindex="-1" role="dialog"
                                                data-backdrop="static" data-keyboard="false">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header"></div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <p class="font-weight-bold">Eric es un chico de 17 años que conoció a María José en redes sociales. <br>
Un día su tío le pregunta con quién pasa hablando todo el día y Eric le responde que es sólo una amiga llamada María José. "¿Del colegio?", pregunta su tío. "No", responde Eric, "la conocí en Facebook". Unos días después, su tío busca el perfil de María José en Facebook y descubre que es una mujer adulta de 34 años. Preocupado, le pide a Eric alejarse María José, éste se enoja y le dice que no hablen más del tema, él ya es grande y puede escoger con quien relacionarse. </p>
                                                                    <p class="font-weight-bold" style="font-size: 1.6em;">¿Qué debería hacer Erick?</p>
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-6">
                                                                            <button class="btn btn-info"
                                                                                style="display: block; width: 100%; white-space: normal;"
                                                                                onclick="playVideo()">Escuchar a su tío y alejarse de Maria José. Las relaciones sexuales entre menores de edad y adultos no son adecuadas y esta situación puede volverse difícil de manejar.</button>
                                                                            <br>
                                                                        </div>
                                                                        <div class="col-12 col-md-6">
                                                                            <button class="btn btn-info"
                                                                                style="display: block; width: 100%; white-space: normal;"
                                                                                onclick="playVideo()">Seguir hablando con Maria José como si nada. De por sí, él ya está grande y puede escoger con quién se mete.</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button class="gotoModulePage2 baki">Atrás</button>
                                <button class="gotoModulePage1 conti">Continuar</button>

                            </div>





                        </div>
                        <a href="../0-03_menu.php#mod3" class="back_to_menu d-none">Volver al menú</a>
                        <p class="intro-header blue"><a href="../" class="icovolver hvr-icon">Volver al inicio</a></p>
                    </div>
                </div>
            </section>
            <?php require '../footer.php'; ?>
        </div>


        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.bundle.js" type="text/javascript"></script>
        <script src="../js/bootstrap.js" type="text/javascript"></script>
        <script src="../js/jquery.bxslider.min.js"></script>

        <script>
        // $.ajax({
        //     url: "../db/user/update_module.php",
        //     method: "POST",
        //     data: {
        //         step: 5,
        //         module: 3
        //     },
        //     dataType: "html"
        // });

        let video = null;
        let time = null;
        let modal = null;


        function playVideo() {
            modal.modal("hide");
            video.currentTime = time;
            video.play();
        }


        $(".gotoModulePage1").click(function() {

            $(".sof").addClass("show active");
            $(".ste").removeClass("show active");
            $(".eric").removeClass("show active");

            $(".sof-tab").addClass("active show");
            $(".stev-tab").removeClass("active show");
            $(".eri-tab").removeClass("active show");
            video1 = document.getElementById("video1");
            video1.pause();
            video2 = document.getElementById("video2");
            video2.pause();
            video3 = document.getElementById("video3");
            video3.pause();

        });

        $(".gotoModulePage2").click(function() {

            $(".ste").addClass("show active");
            $(".sof").removeClass("show active");
            $(".eric").removeClass("show active");

            $(".stev-tab").addClass("active show");
            $(".sof-tab").removeClass("active show");
            $(".eri-tab").removeClass("active show");
            video1 = document.getElementById("video1");
            video1.pause();
            video2 = document.getElementById("video2");
            video2.pause();
            video3 = document.getElementById("video3");
            video3.pause();

        });
        $(".gotoModulePage3").click(function() {

            $(".eric").addClass("show active");
            $(".ste").removeClass("show active");
            $(".sof").removeClass("show active");

            $(".eri-tab").addClass("active show");
            $(".sof-tab").removeClass("active show");
            $(".stev-tab").removeClass("active show");
            video1 = document.getElementById("video1");
            video1.pause();
            video2 = document.getElementById("video2");
            video2.pause();
            video3 = document.getElementById("video3");
            video3.pause();


        });

        $('video').on('play', function(e) {
            $("video").removeClass("active");
            $(this).addClass("active");
            $('video').not($("video.active")).each(function() {
                $(this).get(0).currentTime = 0;
                $(this).get(0).pause();
            });

        });

        $("#video1").on("timeupdate", function() {
            console.log(parseInt(this.currentTime));
            if (parseInt(this.currentTime * 1000) >= 27600 && parseInt(this.currentTime * 1000) <= 27999) {

                time = 28;
                video = document.getElementById("video1");
                modal = $(this).parent().parent().find(".modal")
                modal.modal("show");
            }
        });

        $("#video2").on("timeupdate", function() {
            console.log(parseInt(this.currentTime * 1000));
            if (parseInt(this.currentTime * 1000) >= 33500 && parseInt(this.currentTime * 1000) <= 33800){ 
                this.pause();
                time = 34;
                video = document.getElementById("video2");
                modal = $(this).parent().parent().find(".modal")
                modal.modal("show");

            }
        });

        $("#video3").on("timeupdate", function() {
            console.log(parseInt(this.currentTime));
            if (parseInt(this.currentTime * 1000) >= 41500 && parseInt(this.currentTime * 1000) <= 41900) {
                this.pause();
                time = 42;
                video = document.getElementById("video3");
                modal = $(this).parent().parent().find(".modal")
                modal.modal("show");
            }
        });

        $("a[data-toggle=tab]").click(function() {
            video1 = document.getElementById("video1");
            video1.pause();
            video2 = document.getElementById("video2");
            video2.pause();
            video3 = document.getElementById("video3");
            video3.pause();
        });
        $("a[data-toggle=collapse]").click(function() {
            video1 = document.getElementById("video1");
            video1.pause();
            video2 = document.getElementById("video2");
            video2.pause();
            video3 = document.getElementById("video3");
            video3.pause();
        });
        </script>
</body>

</html>