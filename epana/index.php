<html class="front-page">
<?php require 'header.php'; ?>

<body>
<?php
session_start();
echo $_SESSION['usuario_id'];
echo $_SESSION['usuario'];
?>

    <input type="hidden" value="<?php
        if(isset($_SESSION['usuario_id'])){
            echo $_SESSION['usuario_id'];
        } 
    ?>" id="sessione">
     <input type="hidden" value="<?php
        if(isset($_SESSION['usuario'])){
            echo $_SESSION['usuario'];
        } 
    ?>" id="session">

    <div class="wrapper">
        <div id="content">

            <section class="container-full index-main">

                <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light d-block">
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
                </nav> -->

                <!-- <section class="container-full index-video padding-top-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 d-block d-sm-none">
                                <p class="main-div-intro-text">Aprenda sobre el uso seguro de internet para familias.</p>

                            </div>
                            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                <div class="embed-responsive embed-responsive-16by9 main-div-iframe">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/LLsdaT4NWu0?showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    <video width="100%" height="auto" id="video" poster="img/videos/vistas-Iintro.png" controls>
                                        <source src="/videos/0-introduccion_vid.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 ">
                                    <p class="main-div-intro-text d-none d-sm-block d-md-block d-lg-block">Aprenda sobre el uso seguro de internet para familias.</p>
                                    <a class="btn-entrar" href="0-04_intro.php">Entrar</a>
                                </div>
                            </div>
                        </div>
                    </section> -->
                <div class="rowa header-top">
                    <div class="container">
                        <div class="header-top-box"></div>
                    </div>

                    <!-- <img src="img/fondo_header.png"> -->
                </div>
                <div class="container">
                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                    <div class="red-so">
                        <div class="red-bo">
                            <p>Compártelo con tus panas:</p>
                            <div class="addthis_inline_share_toolbox"></div>
                        </div>
                    </div>
                    <div id="barra">
                        <div class="barrita"></div>
                    </div>
                    <div class="d-flex recursos_aprender justify-content-md-center">
                        <div class="col-sm-4 col">
                            <h2>Recursos para aprender</h2>
                            <p>Las tecnologías y la Internet te ayudan a descubrir cosas nuevas, comunicarte, divertirte
                                y a desarrollar tus talentos. ¡Solo tienes que aprender a sacarle el jugo y a protegerte
                                de los riesgos!</p>
                        </div>
                        <div class="col-sm-3 d-none d-sm-block"></div>
                    </div>
                </div>


                <section>

                    <div class="container">
                        <div class="recu-page-box">
                            <div class="recu-page">
                                <?php require 'recursos.php'; ?>
                            </div>
                        </div>
                    </div>

                </section>

                <!-- <section>
                        <div class="container">
                            <div class="row align-center justify-content-md-center">
                                <div col-12 col-sm-9 align-items-center justify-content-ms-center row>
                                    <div col-12 col-sm-10>
                                       <a href="https://ementores.org/"> <img src="img/mod1/banner-web.png" alt="volver-ementores" class="img-fluid mb-5" ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> -->



            </section>

            <?php require 'footer.php'; ?>
            <?php require 'db/connection/conexion.php'; ?>
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
                    <a href="/" class="nav-iniciar">Cerrar sesión</a>
                </li>
            </ul>

        </nav>
    </div>



    <div class="modal" id="modal_btn-chxs" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-body">


                    <p>Enlace pronto disponible.</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn-cerrar" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal -->
    <div class="modal" id="modal_1-03init" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-head">
                    <!-- <button type="button" class="close-m" data-dismiss="modal" aria-label="Close">x</button> -->
                </div>
                <div class="modal-body init-03">

                    <form id="registro_usuario" action="/epana/db/user/insert_joven.php" method="POST">
                        <img class="img-registro" src="img/icon-question.png">
                        <h2>Antes de empezar...</h2>
                        <!-- <h3>¡Contanos sobre vos!</h3> -->
                        <h3>Queremos conocerte.</h3>
                        <div class="row justify-content-center">
                            <div class="col col-sm-10">
                                <p class="label text-center" style="font-size: 1.3em;line-height: 20px;">
                                    Si tenés 11 años o más este espacio es para ti.
                                    <br>
                                    e-pana es un espacio con recursos audiovisuales para que chicas y chicos aprendan a
                                    aprovechar las tecnologías y protegerse contra los peligros en la Web.
                                </p>
                                <p class="label text-center" style="font-size: 0.9em;"> Además, para tu tranquilidad, los
                                    datos que colocas en este espacio son completamente privados.</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row justify-content-center">
                            <div class="col col-sm-6">
                                <p class="label"><i class="fas fa-user-alt"></i> Nombre completo</p>
                                <input type="text" name="nombre" placeholder="">
                                <p class="small d-none text-center" id="warone">Recordá completar este espacio.</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row justify-content-center">
                            <div class="col col-sm-6">
                                <p class="label"><i class="fas fa-user-circle"></i> Género</p>
                                <div class="d-flex">
                                    <div class="form-check d-inline-block col-4 chk-female">
                                        <input class="form-check-input " type="radio" name="genero" id="exampleRadios1"
                                            value="1">
                                        <label class="form-check-label float-right" for="exampleRadios1">
                                            <img src="img/avatar_unirse_femenina.png" class="img-genre" alt="" />
                                        </label>
                                    </div>
                                    <div class="form-check d-inline-block col-4 chk-male">
                                        <input class="form-check-input " type="radio" name="genero" id="exampleRadios2"
                                            value="2">
                                        <label class="form-check-label float-left" for="exampleRadios2">
                                            <img src="img/avatar_unirse_mixto.png" class="img-genre" alt="" />
                                        </label>
                                    </div>
                                    <div class="form-check d-inline-block col-4 chk-male">
                                        <input class="form-check-input " type="radio" name="genero" id="exampleRadios3"
                                            value="3">
                                        <label class="form-check-label float-left" for="exampleRadios3">
                                            <img src="img/avatar_unirse_masculino.png" class="img-genre" alt="" />
                                        </label>
                                    </div>
                                </div>
                                <p class="small d-none text-center" id="wartwo">Debés elegir una de las opciones.</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row justify-content-center">
                            <div class="col col-sm-6">

                                <p class="label"><i class="fas fa-birthday-cake"></i> Edad</p>
                                <p class="text-center label"><span id="demo"></span></p>
                                <!-- <input type="range" min="1" max="100" class="slider" value="1" id="myRange" name="edad" > -->
                                <input type="number" name="edad" class="w-25">
                                <p class="small d-none text-center" id="wartree">Debés escribir la edad.</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row justify-content-center">
                            <div class="col col-sm-6">

                                <p class="label"><i class="fas fa-map-marked-alt"></i> Lugar de residencia</p>
                                <!-- <input type="number" name="edad" class="w-25"> -->

                                <select id="first-choice" class="form-control year" name="user_provincia">
                                    <option selected value="">Provincia...</option>
                                    <option value="distrito_nacional">DISTRITO NACIONAL</option>
                                    <option value="la_altagracia">LA ALTAGRACIA</option>
                                    <option value="azua">AZUA</option>
                                    <option value="bahoruco">BAHORUCO</option>
                                    <option value="barahona">BARAHONA</option>
                                    <option value="dajabon">DAJABON</option>
                                    <option value="duarte">DUARTE</option>
                                    <option value="hermanas_mirabal">HERMANAS MIRABAL</option>
                                    <option value="el_seibo">EL SEIBO</option>
                                    <option value="elias_pina">ELIAS PIÑA</option>
                                    <option value="espaillat">ESPAILLAT</option>
                                    <option value="hato_mayor">HATO MAYOR</option>
                                    <option value="independencia">INDEPENDENCIA</option>
                                    <option value="la_romana">LA ROMANA</option>
                                    <option value="la_vega">LA VEGA</option>
                                    <option value="maria_trinidad_sanchez">MARIA TRINIDAD SANCHEZ</option>
                                    <option value="monsenor_nouel">MONSEÑOR NOUEL</option>
                                    <option value="monte_cristi">MONTE CRISTI</option>
                                    <option value="monte_plata">MONTE PLATA</option>
                                    <option value="pedernales">PEDERNALES</option>
                                    <option value="peravia">PERAVIA</option>
                                    <option value="puerto_plata">PUERTO PLATA</option>
                                    <option value="samana">SAMANA</option>
                                    <option value="san_cristobal">SAN CRISTOBAL</option>
                                    <option value="san_juan">SAN JUAN</option>
                                    <option value="san_pedro_de_macoris">SAN PEDRO DE MACORIS</option>
                                    <option value="sanchez_ramirez<">SANCHEZ RAMIREZ</option>
                                    <option value="santiago">SANTIAGO</option>
                                    <option value="santiago_rodriguez">SANTIAGO RODRIGUEZ </option>
                                    <option value="valverde">VALVERDE</option>
                                    <option value="san_jose_de_ocoa">SAN JOSE DE OCOA</option>
                                    <option value="santo_domingo">SANTO DOMINGO</option>
                                </select>
                                <p class="small d-none text-center text-danger" id="w_user_provincia">Debés seleccinar
                                    una opcion.</p>
                                <br>
                                <div class="second_parent" style="display:none">
                                    <p class="small text-center">Municipio</p>
                                    <select id="second-choice" class="form-control year" name="user_municipio">
                                        <option>Municipio</option>
                                    </select>
                                    <p class="small d-none text-center text-danger" id="w_user_municipio">Debés
                                        seleccinar una opcion.</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row justify-content-center">
                            <div class="col col-sm-6">
                                <p class="label"><i class="fas fa-school"></i> Centro educativo</p>
                                <input type="text" name="grado" placeholder="">
                                <p class="small d-none text-center" id="warfour">Recordá completar este espacio.</p>
                                <!-- <p class="small">Contanos en qué provincia y cantón vivís.</p> 
                            <i class="fas fa-map-marked-alt"></i>-->
                            </div>
                        </div>
                        <hr>
                        <div class="row justify-content-center">
                            <div class="col col-sm-6">
                                <p class="label"><i class="fas fa-at"></i> Correo electrónico</p>
                                <input type="text" name="lugar" placeholder="">
                                <p class="small d-none text-center text-danger" id="w_email_epana">Recordá seleccionar
                                    una opción.</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <button type="button" class="btn-c d-block m-auto " data-dismiss="modal"
                                    aria-label="Close">Cerrar</button>
                            </div>
                            <div class="col">
                                <button id="btn-r" type="button" class="btn-r d-block m-auto submet">Ingresar</button>
                            </div>

                        </div>


                    </form>

                    <div id="caja" style="display: none">
                        <p>Registrado</p>
                    </div>


                    <br>

                </div>
                <!-- <div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div> -->
            </div>
        </div>
    </div>

    <!-- modal -->
    <div class="modal" id="modal_encuesta" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-body">

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="la.jpg" alt="Los Angeles" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="chicago.jpg" alt="Chicago" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="ny.jpg" alt="New york" style="width:100%;">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>


                </div> <!-- fin modal-body -->

                <div class="modal-footer">
                    <button type="button" class="btn-cerrar" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>




    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script src="js/bootstrap.bundle.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js">
    </script>
    <script>
    //     var slider = document.getElementById("myRange");
    //     var output = document.getElementById("demo");

    // output.innerHTML = slider.value;
    // slider.oninput = function() {
    //     output.innerHTML = this.value;
    // }

    $("#first-choice").change(function() {

        var $dropdown = $(this);

        $.getJSON("../familias/jsondata/data.json", function(data) {

            var key = $dropdown.val();
            var vals = [];
            console.log(data)
            switch (key) {
                case 'la_altagracia':
                    vals = data.la_altagracia.split(",");
                    break;
                case 'azua':
                    vals = data.azua.split(",");
                    break;
                case 'bahoruco':
                    vals = data.bahoruco.split(",");
                    break;
                case 'barahonda':
                    vals = data.barahonda.split(",");
                    break;
                case 'dajabon':
                    vals = data.dajabon.split(",");
                    break;
                case 'duarte':
                    vals = data.duarte.split(",");
                    break;
                case 'hermanas_mirabal':
                    vals = data.hermanas_mirabal.split(",");
                    break;
                case 'el_seibo':
                    vals = data.el_seibo.split(",");
                    break;
                case 'elias_pina':
                    vals = data.elias_pina.split(",");
                    break;
                case 'espaillat':
                    vals = data.espaillat.split(",");
                    break;
                case 'hato_mayor':
                    vals = data.hato_mayor.split(",");
                    break;
                case 'independencia':
                    vals = data.independencia.split(",");
                    break;
                case 'la_romana':
                    vals = data.la_romana.split(",");
                    break;
                case 'la_vega':
                    vals = data.la_vega.split(",");
                    break;
                case 'maria_trinidad_sanchez':
                    vals = data.maria_trinidad_sanchez.split(",");
                    break;
                case 'monsenor_nouel':
                    vals = data.monsenor_nouel.split(",");
                    break;
                case 'monte_plata':
                    vals = data.monte_plata.split(",");
                    break;
                case 'pedernales':
                    vals = data.pedernales.split(",");
                    break;
                case 'peravia':
                    vals = data.peravia.split(",");
                    break;
                case 'puerto_plata':
                    vals = data.puerto_plata.split(",");
                    break;
                case 'samana':
                    vals = data.samana.split(",");
                    break;
                case 'san_cristobal':
                    vals = data.san_cristobal.split(",");
                    break;
                case 'san_juan':
                    vals = data.san_juan.split(",");
                    break;
                case 'san_pedro_de_macoris':
                    vals = data.azua.split(",");
                    break;
                case 'sanchez_ramirez':
                    vals = data.sanchez_ramirez.split(",");
                    break;
                case 'santiago':
                    vals = data.santiago.split(",");
                    break;
                case 'santiago_rodriguez':
                    vals = data.santiago_rodriguez.split(",");
                    break;
                case 'valverde':
                    vals = data.valverde.split(",");
                    break;
                case 'san_jose_de_ocoa':
                    vals = data.san_jose_de_ocoa.split(",");
                    break;
                case 'santo_domingo':
                    vals = data.santo_domingo.split(",");
                    break;
                case 'distrito_nacional':
                    vals = data.distrito_nacional.split(",");
                    break;
                case '':
                    vals = ['Please choose from above'];
            }


            var $secondChoice = $("#second-choice");
            $secondChoice.parent().show();
            $secondChoice.empty();
            $secondChoice.append("<option value=''>Municipio</option>");
            $.each(vals, function(index, value) {
                // $secondChoice.append("<option>" + value + "</option>");

                $secondChoice.append("<option value=" + value.split(' ').join('_') + ">" +
                    value + "</option>");

            });

        });
    });

    $("form#registro_usuario .submet").on('click', function() {


        var nombre = $('input[name=nombre]').val();
        var genero = $('input[name=genero]:checked').val();
        var range = $('input[name=edad]').val();
        var lugar = $('input[name=lugar]').val();
        var grado = $('input[name=grado]').val();
        var user_provincia = $('select[name=user_provincia]').val();
        var user_municipio = $('select[name=user_municipio]').val();
        console.log(range);
        console.log(lugar);
        console.log(grado);
        console.log(user_provincia);
        console.log(user_municipio);


        // if (nombre == "") {
        //     $("input[name=nombre]").focus();
        //     $("p#warone").removeClass("d-none");
        // }else if(genero == undefined){
        //     $("input[name=genero]").focus();
        //     $("p#wartwo").removeClass("d-none");
        //     $("p#warone").addClass("d-none");
        // }else 
        // }else if(grado == "default"){
        //     $("select[name=grado]").focus();
        //     // $("p#warfour").removeClass("d-none");

        //     // $("p#warone").addClass("d-none");
        //     // $("p#wartwo").addClass("d-none");
        //     // $("p#wartree").addClass("d-none");


        if (nombre == "") {
            $("input[name=nombre]").focus();
            $("p#warone").removeClass("d-none");
        } else if (genero == undefined) {
            $("input[name=genero]").focus();
            $("p#wartwo").removeClass("d-none");
            $("p#warone").addClass("d-none");
        } else if (range == "") {
            $("input[name=edad]").focus();
            $("p#wartree").removeClass("d-none");
            $("p#warone").addClass("d-none");
            $("p#wartwo").addClass("d-none");
        } else if (user_provincia == "") {
            $("select[name=ser_provincia]").focus();
            $("p#w_user_provincia").removeClass("d-none");

            $("p#warone").addClass("d-none");
            $("p#wartwo").addClass("d-none");
            $("p#wartree").addClass("d-none");
        } else if (user_municipio == "") {
            $("select[name=user_municipio]").focus();
            $("p#w_user_municipio").removeClass("d-none");

            $("p#w_user_provincia").addClass("d-none");
            $("p#warone").addClass("d-none");
            $("p#wartwo").addClass("d-none");
            $("p#wartree").addClass("d-none");
        } else if (grado == "") {
            $("select[name=grado]").focus();
            $("p#warfour").removeClass("d-none");

            $("p#warone").addClass("d-none");
            $("p#wartwo").addClass("d-none");
            $("p#wartree").addClass("d-none");
            $("p#w_user_provincia").addClass("d-none");
            $("p#w_user_municipio").addClass("d-none");
        } else if (lugar == "") {
            $("select[name=lugar]").focus();
            $("p#w_email_epana").removeClass("d-none");

            $("p#warone").addClass("d-none");
            $("p#wartwo").addClass("d-none");
            $("p#wartree").addClass("d-none");
            $("p#warfour").addClass("d-none");
            $("p#w_user_provincia").addClass("d-none");
            $("p#w_user_municipio").addClass("d-none");
        } else {
            $("p#w_email_epana").addClass("d-none");

            $("p#warone").addClass("d-none");
            $("p#wartwo").addClass("d-none");
            $("p#wartree").addClass("d-none");
            $("p#warfour").addClass("d-none");
            $("p#w_user_provincia").addClass("d-none");
            $("p#w_user_municipio").addClass("d-none");
            console.log("sumet");
            $("form#registro_usuario").submit();
        }


    });

    $('#btn-chxs').on('click', function() {
        $("#modal_btn-chxs").modal("show");
    });

    $("input[name=genero]").change(function() {
        $(".img-genre").removeClass("select-img");
        $(this).parent().find(".img-genre").addClass("select-img");
    });

    $(document).ready(function() {

        var user = $("input#session").val();
        console.log(user);
        if (user == "") {
            $("#modal_1-03init").modal("show");
        }
        //$("#modal_1-03init").modal("show");
        $(".item-module a.v-act-1").addClass("vi");
    });


    // $("#registrarme").click(function(){
    //     console.log("entranew");
    //     var myform = document.getElementById("registro_usuario");
    //     var fd = new FormData(myform);
    //     console.log(myform);
    //     console.log(fd);
    //     $.ajax({
    //         type: 'POST',

    //         url: 'http://ementores.org/jovenes/db/user/insert_joven.php',
    // data: fd,
    // cache: false,
    // processData: false,
    // contentType: false,
    // dataType: 'json'
    // }).done(function (data) {
    //     if (data[0] == true) {
    //         $("#caja").show();
    //         $("#registro_usuario").hide();
    //     }else{
    //         alert("Error al registrarse.")
    //     }

    // });

    // });
    </script>
</body>

</html>