<html>
<head>
    <link rel="icon" href="favicon.ico" type="image/gif">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Programa e-mentores terminado con éxito | e-mentores</title>
    <link  type="text/css"  href="css/bootstrap.css" rel="stylesheet">
    <link  type="text/css"  href="css/bootstrap-grid.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700, 800" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/botones.css" rel="stylesheet" type="text/css" />
    <link href="css/index.css" rel="stylesheet" type="text/css" />
    
    <meta property="og:url"                content="http://ementores.org" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="Ha terminado con éxito el programa E-mentores Familias." />
    <meta property="og:description"        content="Ahora puede hacerlo tú!" />

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

	        <?php

            session_start();

            $user = $_SESSION['user'];
            $last_id = $user["id"];           

            if (is_null($user)) {
                echo '<script>window.location="http://ementores.org/familias/0-04_prelogin.php"</script>';
                die();
            }

            //echo $certificate;

            ?>

    <div class="wrapper">

        <div id="content">

            <section class="container-full index-main">



                <nav class="navbar navbar-expand-lg navbar-light bg-light d-block">

                    <div class="container-fluid">



                        <div class="nav justify-content-start">



                        </div>



                        <div class="nav justify-content-center">

                            <h1><a class="mx-auto" href="/index.php"><img src="img/logo-ementores.png" alt="E-mentores"></a></h1>

                        </div>



                        <div class="nav justify-content-end">

                            <button type="button" id="sidebarCollapse" class="btn" >

                                <span class="navbar-toggler-icon"></span>

                            </button>

                        </div>

                    </div>

                </nav>


                <p class="intro-header blue" style=" margin-bottom: 0;"><a href="../0-03_menu.php#mod3"  class="icovolver hvr-icon">Volver al<br>menú</a>Preguntas</p>
                <div class="bck-intro padding-top-bottom">

                    <section class="container">

                        <div class="row justify-content-md-center">

                            <div class="col-sm-offset-1 col-sm-10 main-block">

                                <p class="text-center label">¡Felicidades!<br>
                                Ha terminado con éxito el programa<br>
                                E-mentores Familias.</p>
                                <span class="div"><img src="img/bottom-color-line.png"></span>
                                <p>Ya casi puede descargar su certificado, pero antes queremos hacerle unas preguntas cortitas:</p>
                                <form action="0-06_cert.php" method="POST" id="encuesta">

                                    <div class="form-group email-input">
                                        <p class="text-center label-small quest-email">¿Le gustó el curso?</p>
                                          <input type="radio" name="q1" value="1" class="q s1" id="q1-1" required><label for="q1-1">1</label>
                                          <input type="radio" name="q1" value="2" class="q s2" id="q1-2"><label for="q1-2">2</label>
                                          <input type="radio" name="q1" value="3" class="q s3" id="q1-3"><label for="q1-3">3</label>
                                          <input type="radio" name="q1" value="4" class="q s4" id="q1-4"><label for="q1-4">4</label>
                                          <input type="radio" name="q1" value="5" class="q s5" id="q1-5"><label for="q1-5">5</label>
                                    </div>
                                    <span class="div"><img src="img/bottom-color-line.png"></span>
                                    <div class="form-group email-input">
                                        <p class="text-center label-small quest-email">¿Siente que el curso le dio nueva información para ayudarle en la
crianza de niños, niñas y adolescentes?</p>
                                          <input type="radio" name="q2" value="1" class="q s1" id="q2-1" required><label for="q2-1">1</label>
                                          <input type="radio" name="q2" value="2" class="q s2" id="q2-2"><label for="q2-2">2</label>
                                          <input type="radio" name="q2" value="3" class="q s3" id="q2-3"><label for="q2-3">3</label>
                                          <input type="radio" name="q2" value="4" class="q s4" id="q2-4"><label for="q2-4">4</label>
                                          <input type="radio" name="q2" value="5" class="q s5" id="q2-5"><label for="q2-5">5</label>
                                    </div> 
                                    <span class="div"><img src="img/bottom-color-line.png"></span>
                                    <div class="form-group email-input">
                                        <p class="text-center label-small quest-email">¿Los contenidos del curso le parecieron claros?</p>
                                          <input type="radio" name="q3" value="1" class="q s1" id="q3-1" required><label for="q3-1">1</label>
                                          <input type="radio" name="q3" value="2" class="q s2" id="q3-2"><label for="q3-2">2</label>
                                          <input type="radio" name="q3" value="3" class="q s3" id="q3-3"><label for="q3-3">3</label>
                                          <input type="radio" name="q3" value="4" class="q s4" id="q3-4"><label for="q3-4">4</label>
                                          <input type="radio" name="q3" value="5" class="q s5" id="q3-5"><label for="q3-5">5</label>
                                    </div> 

                                </form>

                                <div class="d-flex justify-content-md-center">
                                    <button type="submit" form="encuesta" id="submit" class="btn-continue mr-2">Enviar</button>
                                </div>
                                <a href="0-03_menu.php" class="back_to_menu d-none">Volver al menú</a>
                            </div>

                        </div>



                    </section>



                </div>

            </section>

            <?php require './footer.php'; ?>

        </div>

        <nav id="sidebar" class="">
    <div class="sidebar-header">
        <h3>Menu</h3>
    </div>

    <ul class="list-unstyled components">

        <li>
            <a href="/familias.php" class="nav-sobre">Sobre el proyecto</a>
        </li>
        <li>
            <a href="/familias/0-03_menu.php" class="nav-actividad">Ir a menú de actividades</a>
        </li>
        <li>
            <a href="/" class="nav-iniciar">Cerrar sesión</a>
        </li>
    </ul>

</nav>

    </div>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="js/bootstrap.bundle.js" type="text/javascript"></script>

    <script src="js/bootstrap.js" type="text/javascript"></script>


    <script>
        $('#submit').on('click', function(){
            var q1 = $('input[name=q1]:checked').val();
            var q2 = $('input[name=q2]:checked').val();
            var q3 = $('input[name=q3]:checked').val();

            $.ajax({
                type: "POST",
                url: 'db/user/insert_survey.php',
                data: {q1 : q1, q2 : q2, q3 : q3}
            });
        });

        var $q = $(".q");

        $("input[type=radio][name=align]").on('change', function() {
          var radVal = $(this).val();
          if (radVal == 'center') {
            $q.addClass('centerCssClass').removeClass('topCssClass');
          } else if (radVal == 'top') {
            $q.addClass('topCssClass').removeClass('centerCssClass')
          }
        });
    </script>

</body>

</html>