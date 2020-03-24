<html>
    <head>
<!-- <meta http-equiv="Cache-Control" content="no-cache" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" /> -->
    <link rel="icon" href="favicon.ico" type="image/gif">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registro | Programa e-mentores Familias</title>
        <link  type="text/css"  href="css/bootstrap.css" rel="stylesheet">
        <link  type="text/css"  href="css/bootstrap-grid.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700, 800" rel="stylesheet">
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
                                <h1><a class="mx-auto" href="/index.php"><img src="img/logo-ementores.png" alt="Curso en línea uso seguro de internet para familia |  Programa e-mentores Familias"></a></h1>
                            </div>

                            <div class="nav justify-content-end">
                                <button type="button" id="sidebarCollapse" class="btn" >
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </div>
                        </div>
                    </nav>

                    <div class="bck-intro padding-top-bottom">
                        <section class="container">
                            <div class="row justify-content-md-center">
                                <div class="col-sm-10 main-block">
                                    <h2 class="text-center"><img src="img/icon-question.png"></h2>
                                    <!-- <?php var_dump($_SESSION['error_login']); ?>
                                    <?php var_dump($_SESSION['user']); ?>
                                    <?php if(isset($_SESSION['error_login'])): ?>
                                        <div class="alerta alerta-error">
                                            <?=$_SESSION['error_login']?>
                                        </div> 
                                    <?php endif ?> -->
                                    <!-- <div id="alertid" class="d-none">
                                        <div class="alert alert-warning" role="alert">

                                        ¡Huummm! Al parecer los datos ya han sido registrados. Corrobórelo y vuelva a intentarlo.

                                    </div> -->
                                    <?php

                                    session_start();

                                    

                                    $incorrect_login = isset($_SESSION['error_login'])? $_SESSION['error_login'] : null;

                                   

                                    if ($incorrect_login) {?>

                                    <div class="alert alert-warning" role="alert">

                                        <!-- ¡Huummm! Al parecer este correo no ha sido registrado aún. Corrobórelo y vuelva a intentarlo. -->

                                        ¡Huummm! Al parecer estos datos ya ha sido registrados. Corrobórelo y vuelva a intentarlo.


                                    </div>

                                    <?php } ?>

                                    <!-- </div> -->
                                    <form action="db/user/update_user.php" method="POST">
	                                    <div class="form-group email-input">
	                                        <p class="text-center label">¿Cuál es su correo electrónico?</p>
	                                        <input type="email" class="form-control mr-auto" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ejemplo@correo.com" required>
	                                        <small id="emailHelp" class="form-text text-muted">Puedes usar esta misma dirección de correo para volver a entrar más adelante.</small>
                                            <br>
                                            
                                            
	                                    </div>
                                        <!-- inicio -->
                                        
                                        <div class="selector">
                                                <input type="checkbox" id="cambiocredenciales" class="text-muted" value="1">
                                                <label for="cambiocredenciales" class="text-muted text-center" style="font-size: 0.8em;">Registrarme mediante número de cédula o número de residencia </label>
                                                </div>
                                            
                                        <!-- fin -->
	                                    <div class="radio radio-ced">

	                                        <input type="radio" name="id-type" id="ced-1" value="1" checked>Número de cédula
	                                        <br>
	                                        <input type="radio" name="id-type" id="ced-2" value="2">Número de residencia
	                                    </div>


	                                    <div class="form-group id-input cr-id">
	                                        <p class="text-center label-small">Escribe tu número de cédula</p>
	                                        <input type="text" class="form-control text-number mr-auto" id="cr-id-input" aria-describedby="idHelp" minlength="11" maxlength="11" placeholder="XXXXXXXXXXX" required>
	                                        <small id="emailHelp" class="form-text text-muted">Escribe solamente números, sin espacios. <br>Por ejemplo: 00100123456</small>

	                                    </div> 

	                                    <!-- residente -->

	                                    <div class="form-group id-input resi-id d-none">

	                                        <p class="text-center label-small">Escribe tu número de residencia</p>
	                                        <input type="text" class="form-control text-number mr-auto" id="cr-id-input2" aria-describedby="idHelp" minlength="11" maxlength="11" placeholder="XXXXXXXXXXX">
	                                        <small id="emailHelp" class="form-text text-muted">Escribe solamente números, sin espacios. <br>Por ejemplo: 00100123456</small>
	                                    </div> 
	                                    <input type="hidden" name="type" value="1">
	                                    
	                                    <button type="submit" class="d-block m-auto btn-continue">Siguiente</button>
                                	</form>

                                    
                                </div> <!-- fin col-10 -->
                            </div>

                        </section>

                    </div>
                    <div class="barra-progress">
                            <div class="barra-progress-img-5"></div>
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
                        <a href="/familias" class="nav-iniciar">Cerrar sesión</a>
                    </li>
                </ul>

            </nav>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script type="text/javascript">
            $( document ).ready(function() {

                function getQueryVariable(variable)
                    {
                           var query = window.location.search.substring(1);
                           var vars = query.split("&");
                           for (var i=0;i<vars.length;i++) {
                                   var pair = vars[i].split("=");
                                   if(pair[0] == variable){return pair[1];}
                           }
                           return(false);
                    }

                    var tech = getQueryVariable('t');

                    console.log(tech);
        	// var urlParams = new URLSearchParams(window.location.search);
            // $("input[name=type]").val(urlParams.get("t"));
            if (tech === "1") {
                $(".email-input").hide();
                $("#cambiocredenciales").hide();

                    $("input#cr-id-input2").attr("name", '');
                    $("input#cr-id-input").attr("name", 'data');
                $("input[name=type]").val(1);
                $("input#exampleInputEmail1").prop("required", false);
                $(".selector").hide();
            } 
            if (tech === "2") {
                $(".id-input").hide();
                $(".radio-ced").hide();
                $("input#exampleInputEmail1").attr("name", 'data');
                $("input[name=type]").val(2);
                $("input#cr-id-input").prop("required", false);
            }

            $("input#cambiocredenciales").change(function(){
                $("input#ced-1").click();
                 if ($(this).is(':checked')) {
                    $("input[name=type]").val(1);
                        $(".email-input").hide(1000);
                        $(".id-input").show(1000);
                        $(".radio-ced").show(1000);
                        $("input#exampleInputEmail1").attr("name", '');
                        $("input#exampleInputEmail1").prop("required", false)
                        $("input#cr-id-input").prop("required", true);
                        $("input#cr-id-input").attr("name", 'data');
                    }else{
                        $("input[name=type]").val(2);
                         $(".email-input").show(1000);
                         $(".id-input").hide(1000);
                         $(".radio-ced").hide(1000);
                         $("input#exampleInputEmail1").attr("name", 'data');
                         $("input#cr-id-input").attr("name", '');
                         $("input#cr-id-input2").prop("required", false);
                    $("input#cr-id-input").prop("required", false);
                    $("input#exampleInputEmail1").prop("required", true);

                    }
                 

           });

             
            // alert(urlParams.get("t"));
            // if (urlParams.get("e") === "3") {
            //     $("#alertid").removeClass("d-none");
            //     $(".email-input").remove();
            //     $(".id-input").removeClass("d-none");
            // }

            //alert(urlParams.get("t"));
            //alert(urlParams.get("e"));

        	$("input[name=id-type]").change(function () {
                if ($("div.resi-id").hasClass("d-none")) {
                    $("div.resi-id").removeClass("d-none");
                    $("div.cr-id").addClass("d-none");
                    $("input#cr-id-input2").prop("required", true);
                    $("input#cr-id-input").prop("required", false);

                    $("input#cr-id-input").attr("name", '');
                    $("input#cr-id-input2").attr("name", 'data');
                } else {
                    $("div.resi-id").addClass("d-none");
                    $("div.cr-id").removeClass("d-none");
                    $("input#cr-id-input").prop("required", true);
                    $("input#cr-id-input2").prop("required", false);

                    $("input#cr-id-input2").attr("name", '');
                    $("input#cr-id-input").attr("name", 'data');
                }
            });

         }); //fin ready
        </script>
    </body>
</html>