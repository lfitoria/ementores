<html>
<head>
    <link rel="icon" href="favicon.ico" type="image/gif">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ha terminado con éxito el programa E-mentores Familias | Programa e-mentores Familias</title>
    <link  type="text/css"  href="css/bootstrap.css" rel="stylesheet">
    <link  type="text/css"  href="css/bootstrap-grid.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700, 800" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/botones.css" rel="stylesheet" type="text/css" />
    <link href="css/index.css" rel="stylesheet" type="text/css" />
    
    <meta property="og:url" content="http://rd.ementores.org" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Ha terminado con éxito el Programa e-mentores familias." />
    <meta property="og:image" content="http://rd.ementores.org/familias/img/ementores-facebook.png" />
    <meta property="og:image:secure_url" content="http://rd.ementores.org/familias/img/ementores-facebook.png" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="512" />
    <meta property="og:image:height" content="270" />
    <meta property="og:image:alt" content="Ha terminado con éxito el Programa e-mentores familias." />
    <meta property="og:description" content="Ha terminado con éxito el Programa e-mentores familias." />

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
            // var_dump($_SESSION);
            $user = $_SESSION['user'];
            $cert = (!empty($_SESSION['cert'])) ? $_SESSION['cert'] : '';
            $last_id = $user["id"];
            $certificate = (!empty($_SESSION['user']['certificate_name'])) ? $_SESSION['user']['certificate_name'] : '';
            

            if (is_null($user)) {
                echo '<script>window.location="http://rd.ementores.org/familias/0-04_prelogin.php"</script>';
                die();
            }

            if($_POST['name']) {
                $_SESSION['user']['certificate_name'] = $_POST['name'];
                $certificate = $_SESSION['user']['certificate_name'];
            }

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


                <p class="intro-header blue" style=" margin-bottom: 0;"><a href="../familias/0-03_menu.php#mod3"  class="icovolver hvr-icon">Volver al<br>menú</a>Certificado</p>
                <div class="bck-intro padding-top-bottom">

                    <section class="container">

                        <div class="row justify-content-md-center">

                            <div class="col-sm-offset-1 col-sm-10 main-block end">

                                <p class="text-center label">Ahora sí, ya puedes descargar tu certificado de aprovechamiento:</p>

                                <?php if(empty($certificate) && $cert == ''){
                                    $display = 'style = "display:block"';

                                }else{
                                    $display = 'style = "display:none"';

                                } ?>
                                <form <?php echo $display;?> action="output.php" target="_blank" method="POST" id="output">

                                    <div class="form-group email-input">

                                        <p class="text-center label-small quest-email">Digita tu nombre completo (este aparecerá en el certificado)</p>

                                        <input type="text" name="name" id="name" value="<?php echo $certificate;?>" class="form-control mr-auto" placeholder="Nombre completo" required="required">

                                    </div> 

                                </form>
                                
                                <div class="d-flex justify-content-md-center">
                                    <button type="submit" form="output" id="submit" class="btn-continue mr-2">Descargar certificado</button>
                                    <!-- <a class="share-fb" target="_blank" href="javascript:myPopup('https://www.facebook.com/sharer/sharer.php?u=http%3A//ementores.org')">Compartir en Facebook</a> -->
                                    <a class="share-fb" target="_blank" onclick=myPopup('https://www.facebook.com/sharer/sharer.php?u=http%3A//ementores.org')>Compartir en Facebook</a>
                                </div>
                                <div class="d-flex justify-content-md-center">
                                    <p class="last-p">¿Algún familiar, amiga o amigo desea hacer el curso? <a target="_blank" href="/familias">EMPEZAR AQUÍ</a></p>
                                </div>

                               
                                <a href="0-03_menu.php" class="back_to_menu d-none">Volver al menú</a>
                            </div>

                        </div>
                        <br>
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
            <a href="/familias/familias.php" class="nav-sobre">Sobre el proyecto</a>
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
            var name = document.getElementById("name").value;

            if($('#name').val() != '') {
                $( "#name" ).hide();
            }

            if($('#name').val() != '') {
                $.ajax({
                    type: "POST",
                    url: 'db/user/update_certificate.php',
                    data: {name : name}
                });
            }
        });

        var urlParams = new URLSearchParams(window.location.search);

        $("input[name=type]").val(urlParams.get("t"));

        if (urlParams.get("t") === "1") {

            $(".email-input").remove();

        } else {

            $(".id-input").remove();

        }



        $(".text-number").keypress(function (evt) {

            var charCode = (evt.which) ? evt.which : evt.keyCode;

            if (charCode > 31 && (charCode < 48 || charCode > 57)) {

                return false;

            }

            return true;

        });

        
        function myPopup(url) {
            window.open( url, "myWindow", "status = 1, height = 500, width = 360, resizable = 0" )
        }


        $("input[name=id-type]").change(function () {

            if ($("div.resi-id").hasClass("d-none")) {

                $("div.resi-id").removeClass("d-none");

                $("div.cr-id").addClass("d-none");

                $("input#cr-id-input2").attr("required", true);

                $("input#cr-id-input").attr("required", false);



                $("input#cr-id-input").attr("name", '');

                $("input#cr-id-input2").attr("name", 'data');

            } else {

                $("div.resi-id").addClass("d-none");

                $("div.cr-id").removeClass("d-none");

                $("input#cr-id-input").attr("required", true);

                $("input#cr-id-input2").attr("required", false);


                $("input#cr-id-input2").attr("name", '');

                $("input#certificate_name").attr("name", '');

                $("input#cr-id-input").attr("name", 'data');

            }

        });

        $( document ).ready(function() {
            //alert('<?php echo $cert; ?>');
        });

    </script>

</body>

</html>