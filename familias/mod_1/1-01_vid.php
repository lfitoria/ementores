<html>
    <head>
        <meta http-equiv="Cache-Control" content="no-cache" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <link rel="icon" href="../favicon.ico" type="image/gif">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Me informo: oportunidades y desafíos en la web | Programa e-mentores Familias</title>
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
                <p class="intro-header blue"><a href="../0-03_menu.php#mod1"  class="icovolver hvr-icon">Volver al<br>menú</a>Las TIC en todos lados y a todas horas</p>
                <section class="container">
                    <div class="main">
                        <div id="act_01" class="">
                            <div class="cont row">
                                <div class="col-12">
                                    <!-- <video width="100%" height="auto" id="video" poster="../img/videos/vistas-1-01.png" controls preload="auto"> -->
                                    <video width="100%" height="auto" id="video" controls preload="auto">
                                        <source src="../videos/01-01_vid_RD.mp4" type="video/mp4">
                                    </video>
                                    <a href="../0-03_menu.php#mod1" class="back_to_menu d-none">Volver al menú</a>
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
            $.ajax({
                url: "../db/user/update_module.php",
                method: "POST",
                data: {
                    step: 1,
                    module: 1
                },
                dataType: "html"
            });
        </script>
    </body>
</html>