<html>

    <head>

        <meta http-equiv="Cache-Control" content="no-cache" />

        <meta http-equiv="Pragma" content="no-cache" />

        <meta http-equiv="Expires" content="0" />

        <link rel="icon" href="../favicon.ico" type="image/gif">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Prevengo: acompaño en línea | Programa e-mentores Familias</title>

        <link  type="text/css"  href="../css/bootstrap.css" rel="stylesheet">

        <link  type="text/css"  href="../css/bootstrap-grid.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">

        <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">

        <link href="../css/style.css" rel="stylesheet" type="text/css"/>

        <link href="../css/index.css" rel="stylesheet" type="text/css" />

        <link href="../css/mod2.css" rel="stylesheet" type="text/css" />



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

                <p class="intro-header blue"><a href="../0-03_menu.php#mod2"  class="icovolver hvr-icon">Volver al<br>menú</a>¡No lo cuente todo en la Internet!</p>

                <section class="container">

                    <div class="main">	

                        <div class="row justify-content-sm-center">



                            <div class="col-12 col-sm-8">

                                <img src="../img/mod2/2-04_inf.png" alt="" class="img-fluid"/>

                            </div>
                            


                        </div>



                    </div>

                    <a href="../0-03_menu.php#mod2" class="back_to_menu d-none">Volver al menú</a>
                    <br>
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

                    step: 4,

                    module: 2

                },

                dataType: "html"

            });

        </script>

    </body>

</html>