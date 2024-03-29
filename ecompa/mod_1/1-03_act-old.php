<html>
    <head>
<meta http-equiv="Cache-Control" content="no-cache" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
    <link rel="icon" href="../favicon.ico" type="image/gif">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Me informo: oportunidades y riesgos en la web | Programa e-mentores Familias</title>
        <link  type="text/css"  href="../css/bootstrap.css" rel="stylesheet">
        <link  type="text/css"  href="../css/bootstrap-grid.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        <link href="../css/index.css" rel="stylesheet" type="text/css" />

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


            <!-- Page Content -->

            <div id="content">
                <nav class="navbar navbar-expand-lg navbar-light bg-light d-block">
                    <div class="container-fluid">

                        <div class="nav justify-content-start">

                        </div>

                        <div class="nav justify-content-center">
                            <h1><a class="mx-auto" href="../index.php"><img src="../img/logo-ementores.png" alt="Curso en línea uso seguro de internet para familia |  Programa e-mentores Familias"></a></h1>
                        </div>

                        <div class="nav justify-content-end">
                            <button type="button" id="sidebarCollapse" class="btn" >
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </div>
                </nav>
                <p class="intro-header blue"><a href="../0-03_menu.php#mod1"  class="icovolver hvr-icon">Volver al<br>menú</a>Las dos caras de las TIC</p>
                <section class="container">
                    <div class="main">
                        <p id="info-p">Vea a cada una de estas personas menores de edad describir una oportunidad
                            que ofrecen las TIC y un riesgo relacionado con ella.</p>
                        <div id="act_01" class="">
                            <div class="cont row">
                                <div class="col-3">
                                    <a href="1-03_act/1-03_act_01.php"><img src="../img/mod1/1-03_act_personaje1.png" alt="" class="img-fluid"/></a>
                                </div>
                                <div class="col-3">
                                    <a href="1-03_act/1-03_act_02.php"><img src="../img/mod1/1-03_act_personaje2.png" alt="" class="img-fluid"/></a>
                                </div>
                                <div class="col-3">
                                    <a href="1-03_act/1-03_act_03.php"><img src="../img/mod1/1-03_act_personaje3.png" alt="" class="img-fluid"/></a>
                                </div>
                                <div class="col-3">
                                    <a href="1-03_act/1-03_act_04.php"><img src="../img/mod1/1-03_act_personaje4.png" alt="" class="img-fluid"/></a>
                                </div>
                            </div>
                        </div>
                        <a href="../0-03_menu.php#mod1" class="back_to_menu d-none">Volver al menú</a>
                    </div>
                </section>
                <?php require '../footer.php'; ?>
            </div>
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
                        <a href="/" class="nav-iniciar">Cerrar sesión</a>
                    </li>
                </ul>

            </nav>
        </div>
        <!-- modal -->
        <div class="modal" id="modal_1-03init" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->

                    </div>
                    <div class="modal-body init-03">
                        <p>Las TIC ofrecen una gran oportunidad para comunicarse, aprender, entretenerse, trabajar y estudiar. Pero estas ventajas conllevan algunos riesgos que es esencial conocer.</p>
                        <button type="button" class="btn-start d-block m-auto " data-dismiss="modal" aria-label="Close">Iniciar</button>
                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div> -->
                </div>
            </div>
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
                    module: 1
                },
                dataType: "html"
            });
            var urlParams = new URLSearchParams(window.location.search);
         
            if (urlParams.get("t") === "m") {
                $("#modal_1-03init").modal("show");
            }
            

        </script>
    </body>
</html>