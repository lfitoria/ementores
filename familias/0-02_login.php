<html>

    <head>

        <link rel="icon" href="favicon.ico" type="image/gif">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registro | Programa e-mentores Familias</title>

        <link  type="text/css"  href="css/bootstrap.css" rel="stylesheet">

        <link  type="text/css"  href="css/bootstrap-grid.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700, 800" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

        <link href="css/style.css" rel="stylesheet" type="text/css" />

        <link href="css/botones.css" rel="stylesheet" type="text/css" />

        <link href="css/index.css" rel="stylesheet" type="text/css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127635098-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-127635098-1');
        </script>
        <style type="text/css">
            .hidden {
                 visibility:hidden;
            }
        </style>
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

                                    <?php

                                    session_start();

                                    

                                    $incorrect_user = isset($_SESSION['incorrect_user'])? $_SESSION['incorrect_user'] : null;

                                   

                                    if ($incorrect_user) {?>

                                    <div class="alert alert-warning" role="alert">

                                        ¡Huummm! Al parecer esta información no ha sido registrado aún. Corrobórelo y vuelva a intentarlo. 
                                         <!-- Oh oh, parece que esta información ya está registrada. Corrobórela y vuelva a intentarlo.-->
                                    </div>

                                    <?php } ?>

                                    

                                    <?php

                                    $duplicated_user = isset($_SESSION['duplicated_user'])? $_SESSION['duplicated_user'] : null;

                                    

                                    if ($duplicated_user) {?>

                                    <div class="alert alert-warning" role="alert">

                                        Oh oh, parece que esta información ya está registrada. Corrobórela y vuelva a intentarlo.

                                    </div>

                                    <?php } ?>

                                    

                                    <div class="email-input">

                                        <h2 class="text-center"><img src="img/icon-form.png" alt=""/></h2>



                                    </div> 

                                    <div class="id-input">

                                        <h2 class="text-center"><img src="img/icon-login.png" alt=""/></h2>

                                    </div> 

                                    <p class="text-center label">¡Perfecto! empecemos.</p>



                                    <form action="db/user/login_user.php" method="POST" >

                                        <div class="form-group email-input">
                                            <p class="text-center label-small quest-email">¿Cuál es tu correo electrónico?</p>
                                            <input type="email" class="required form-control mr-auto" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ejemplo@correo.com">
                                            <div class="emsg hidden">
                                            <small style=" color: red;">
                                                Verificar correo electrónico.
                                                <br>
                                            </small>
                                            </div>
                                            <small id="emailHelp" class="form-text text-muted">Puedes usar esta misma dirección de correo para volver a entrar más adelante.</small>
                                            <br>
                                            
                                            
                                        </div>
                                        <!-- inicio -->
                                        
                                        <div class="selector">
                                                <input type="checkbox" id="cambiocredenciales" class="text-muted" value="1">
                                                <label for="cambiocredenciales" class="text-muted text-center">Ingresar mediante número de cédula o número de residencia</label>
                                                </div>
                                            
                                        <!-- fin -->
                                        <div class="radio radio-ced">

                                            <input type="radio" name="id-type" id="ced-1" value="1" checked>Número de cédula
                                            <br>
                                            <input type="radio" name="id-type" id="ced-2" value="2">Número de residencia
                                        </div>


                                        <div class="form-group id-input cr-id">
                                            <p class="text-center label-small">Escribe su número de cédula</p>
                                            <input type="text" class="required form-control text-number mr-auto" id="cr-id-input" minlength="11" maxlength="11" aria-describedby="idHelp" placeholder="XXXXXXXXXXXX" >
                                            <small id="emailHelp" class="form-text text-muted">Escribe solamente números, sin espacios. <br>Por ejemplo: 00100123456</small>

                                        </div> 

                                        <!-- residente -->

                                        <div class="form-group id-input resi-id d-none">

                                            <p class="text-center label-small">Escribe su número de residencia</p>
                                            <input type="text" class="form-control text-number mr-auto" id="cr-id-input2" minlength="11" maxlength="11" aria-describedby="idHelp" placeholder="XXXXXXXXXXXX">
                                            <small id="emailHelp" class="form-text text-muted">Escribe solamente números, sin espacios. <br>Por ejemplo: 00100123456</small>
                                        </div> 
                                        <input type="hidden" name="type" value="1">
                                        
                                        

                                    </form>
                                    <button id="goneform" type="submit" class="d-block m-auto btn-continue">Siguiente</button>

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

        <script>
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
                // $("input#exampleInputEmail1").attr("required", false);
                $("input#exampleInputEmail1").removeClass("required");
                $("input#exampleInputEmail1").attr("name", '');
                $(".selector").hide();
            } 
            if (tech === "2") {
                $(".id-input").hide();
                $(".radio-ced").hide();
                $("input#exampleInputEmail1").attr("name", 'data');
                $("input[name=type]").val(2);
                // $("input#cr-id-input").attr("required", false);
                $("input#cr-id-input").removeClass("required");
            }

            $("input#cambiocredenciales").change(function(){
                $("input#ced-1").click();
                 if ($(this).is(':checked')) {
                    $("input[name=type]").val(1);
                        $(".email-input").hide(1000);
                        $(".id-input").show(1000);
                        $(".radio-ced").show(1000);
                        $("input#exampleInputEmail1").attr("name", '');
                        // $("input#exampleInputEmail1").attr("required", false)
                        $("input#exampleInputEmail1").removeClass("required");
                        // $("input#cr-id-input").attr("required", true);
                        $("input#cr-id-input").addClass("required");
                        $("input#cr-id-input").attr("name", 'data');
                    }else{
                        $("input[name=type]").val(2);
                         $(".email-input").show(1000);
                         $(".id-input").hide(1000);
                         $(".radio-ced").hide(1000);
                         $("input#exampleInputEmail1").attr("name", 'data');
                         $("input#cr-id-input").attr("name", '');
                         // $("input#cr-id-input2").attr("required", false);
                         $("input#cr-id-input2").removeClass("required");
                    // $("input#cr-id-input").attr("required", false);
                    $("input#cr-id-input").removeClass("required");
                    // $("input#exampleInputEmail1").attr("required", true);
                    $("input#exampleInputEmail1").addClass("required");

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
                    // $("input#cr-id-input2").attr("required", true);
                    $("input#cr-id-input2").addClass("required");
                    // $("input#cr-id-input").attr("required", false);
                    $("input#cr-id-input").removeClass("required");

                    $("input#cr-id-input").attr("name", '');
                    $("input#cr-id-input2").attr("name", 'data');
                } else {
                    $("div.resi-id").addClass("d-none");
                    $("div.cr-id").removeClass("d-none");
                    // $("input#cr-id-input").attr("required", true);
                    $("input#cr-id-input").addClass("required");
                    // $("input#cr-id-input2").attr("required", false);
                    $("input#cr-id-input2").removeClass("required");

                    $("input#cr-id-input2").attr("name", '');
                    $("input#cr-id-input").attr("name", 'data');
                }
            });

            $(".text-number").keypress(function (evt) {

                var charCode = (evt.which) ? evt.which : evt.keyCode;

                if (charCode > 31 && (charCode < 48 || charCode > 57)) {

                    return false;

                }

                return true;

            });
            $('#goneform').click(function(e) {
                

                e.preventDefault();
                

                var input_texto = $("input.required").val();

                var input_id = $("input.required").attr("id");


                console.log(input_texto);
                console.log(input_id);

                if (input_id == "cr-id-input") {
                    if (input_texto.length == 11) {
                        // alert("entra y envia");
                         $("form").submit();
                    }else{
                        alert("Campo incorrecto.");
                    }
                }
                if (input_id == "cr-id-input2") {
                    if (input_texto.length == 11) {
                        // alert("entra y envia");
                         $("form").submit();
                    }else{
                        alert("Campo incorrecto.");
                    }
                }
                if (input_id == "exampleInputEmail1") {

                    if (input_texto == "") {
                        alert("Campo de correo electrónico incorrecto.");
                    }else{
                        // confirmacion = confirm("Su correo electrónico es: "+input_texto);

                        // alert(confirmacion); 

                        // if (confirmacion == true) {
                        //     alert("entra y envia");
                        // }else{
                        //     $("input.required").val("");
                        // }
                        $("form").submit();
                    }
                    
                }
                 


                // if (input_texto=="") {
                //     alert("Faltan campos por llenar.");
                // }else{
                //     $("form").submit();
                //     console.log(input_texto);
                //     console.log(input_id);
                // }
                
                
                

            });
            var $regexname=/.*\w+@+.*\w/;
                    $('#exampleInputEmail1').keypress(function(){
                             if (!$(this).val().match($regexname)) {
                              // there is a mismatch, hence show the error message
                                $('.emsg').removeClass('hidden');
                                
                             }
                           else{
                                // else, do not display message
                                $('.emsg').addClass('hidden');
                                
                               }
                         });

        }); //fin ready

        </script>

    </body>

</html>