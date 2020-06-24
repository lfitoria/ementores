<html>
    <head>
<meta http-equiv="Cache-Control" content="no-cache" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
        <link rel="icon" href="favicon.ico" type="image/gif">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registro | e-mentores</title>
        <link  type="text/css"  href="css/bootstrap.css" rel="stylesheet">
        <link  type="text/css"  href="css/bootstrap-grid.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700,800" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/index.css" rel="stylesheet" type="text/css" />
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

                    <nav class="navbar navbar-expand-lg navbar-light bg-light d-block">
                        <div class="container-fluid">

                            <div class="nav justify-content-start">

                            </div>

                            <div class="nav justify-content-center">
                                <h1><a class="mx-auto" href="/familias"><img src="img/logo-ementores.png" alt="E-mentores"></a></h1>
                            </div>

                            <div class="nav justify-content-end">
                                <button type="button" id="sidebarCollapse" class="btn" >
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </div>
                        </div>
                    </nav>

                    <div class="back-stars">
                        <section class="container">
                            <div class="header-familias row justify-content-md-center">
                                <div class="col-sm-10 main-block back-girl">
                                    <img src="img/internas/img-header1_rp.png" alt="" class="img-fluid"/>
                                    <h2 class="text-center"></h2>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="bck-internas">
                        <section class="container">
                            <div class="content-familias row justify-content-md-center">
                                <div class="col-sm-10 main-block back-girl">
                                <h3 class="">Acerca del proyecto</h3>
                                    <p>La plaforma e-mentores forma parte del proyecto “Protección para todos los niños contra la explotación y el abuso en línea” coordinado por Plan International y UNICEF en República Dominicana y financiado por “The End Violence Against Children Fund”. Este proyecto  también forma parte la Respuesta Nacional a la violencia en línea, desde la cual diferentes instituciones y organizaciones trabajan en conjunto para poner fin a la explotación y el abuso sexual de niños, niñas y adolescentes en República Dominicana.</p>
                                    <p>La plataforma e-mentores busca que cuidadores y docentes  estén mejor preparados para protegerles ante el abuso y explotación sexual en línea.</p>
                                    <h4>e-pana</h4>
                                    <a href="/epana" id="logoInfoPage">
                                        <img alt="e-compa: Uso seguro de las tecnologías e internet para chicos y chicas" src="/epana/img/logo-header-e-pana.png">
                                    </a>
                                    <p>El proyecto también cuenta con una plataforma dedicada a niñas, niños y adolescentes que busca que esta población esté informada sobre cómo protegerse y denunciar la violencia sexual en línea, sin dejar de aprovechar los beneficios de Internet.</p>
                                </div>
                            </div>
                        </section>
                    </div>
                    <section class="container-full index-decoracion mx-auto">
                        <img src="img/footer/footer-familia_rp.png" class="familia-imagen-decoracion mx-auto" alt="Familia">
                    </section>
                </section>
               
                <?php require './footer.php'; ?>
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
                        <a href="/familias/0-03_menu.php" class="nav-actividad">Ir a menú de actividades</a>
                    </li>
                    <li>
                        <a href="/familias" class="nav-iniciar">Cerrar sesión</a>
                    </li>
                </ul>

            </nav>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
        <script>
            $(".module.disabled a").each(function () {
                $(this).attr("href", "");
                $(this).attr("disabled", true);
            });

            $(".module.disabled a").click(function (e) {
                e.preventDefault();
            });

            $(document).ready(function () {

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });

            });

        </script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
    </body>

</html>
