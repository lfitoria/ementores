<html>
    <head>
<meta http-equiv="Cache-Control" content="no-cache" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
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
                                    <?php

                                    session_start();

                                    

                                    $incorrect_user = isset($_SESSION['incorrect_user'])? $_SESSION['incorrect_user'] : null;

                                   

                                    if ($incorrect_user) {?>

                                    <div class="alert alert-warning" role="alert">

                                        ¡Huummm! Al parecer no está registrado.

                                    </div>

                                    <?php } ?>

                                    

                                    
                                    <form action="db/user/insert_user_complete.php" method="POST" id="registro_usuario">
                                        <div class="form-group">
                                            <p class="text-center label">¿Cuál es tu nombre?</p>
                                            <p class="text-center label-small">Hola, mi nombre completo es:</p>
                                            <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre completo" required>
                                            <input type="hidden" name="step" value="2"> 
                                            <p class="small text-center">Nombre y apellido</p>
                                        </div>
                                        <hr>
                                        <!-- genero -->
                                        <div class="form-group">
                                            <p class="text-center label">Escoje tu personaje</p>
                                            <div class="row">
                                                <div class="form-check d-inline-block col-6 chk-female">
                                                    <input class="form-check-input d-none" type="radio" name="genre" id="exampleRadios1" value="1">
                                                    <label class="form-check-label float-right" for="exampleRadios1">
                                                        <img src="img/icon-female.png" class="img-genre" alt=""/>
                                                    </label>
                                                </div>
                                                <div class="form-check d-inline-block col-6 chk-male">
                                                    <input class="form-check-input d-none" type="radio" name="genre" id="exampleRadios2" value="2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        <img src="img/icon-male.png" class="img-genre" alt=""/>
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- <input type="hidden" name="step" value="3"> -->
                                        </div>
                                        <hr>
                                        <!-- fecha -->
                                        <div class="form-group">
                                            <p class="text-center label">¿Cuál es tu año de nacimiento?</p>
                                            <select class="form-control year" name="year" required>
                                                <?php for ($i = 2010; $i >= 1930; $i--) { ?>
                                                    <option class="<?php print $i ?>"><?php print $i ?></option>
                                                <?php } ?>
                                            </select>

                                            <!-- <input type="hidden" name="step" value="4"> -->
                                        </div>

                                        <div class="form-grupo">
                                        <div class="row justify-content-center">
                                        <div class="col-sm-6">
                                            <p class="label"><i class="fas fa-map-marked-alt"></i> Lugar de residencia</p>
                            
                                            <!-- <select name="state" class="form-control year" required>
                                                <option value="">Provincia</option>
                                                <option value="san-jose">San José</option>
                                                <option value="alajuela">Alajuela</option>
                                                <option value="cartago">Cartago</option>
                                                <option value="heredia">Heredia</option>
                                                <option value="guanacaste">Guanacaste</option>
                                                <option value="puntarenas">Puntarenas</option>
                                                <option value="limon">Limón</option>
                                            </select> -->
                                            
                                            <select id="first-choice" class="form-control" name="user_provincia" required>
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
                                            <option value="santiago_rodriguez">SANTIAGO RODRIGUEZ	</option>
                                            <option value="valverde">VALVERDE</option>
                                            <option value="san_jose_de_ocoa">SAN JOSE DE OCOA</option>
                                            <option value="santo_domingo">SANTO DOMINGO</option>
                                            </select>

                                            <br>
                                            <div class="second_parent" style="display:none">
                                            <p class="small text-center">Municipio</p>
                                                <select id="second-choice" class="form-control" name="user_municipio"  required>
                                                <option>Municipio</option>
                                                </select>
                                            </div>
                                            </div>
                                            
                                        </div>
                                        <br>
                                        <hr>
                                        <!-- boton -->
                                        <button type="submit" class="d-block m-auto btn-continue submet">Continuar</button>
                                    </form>
                                </div>
                            </div>

                        </section>

                    </div>
                    <div class="barra-progress">
                            <div class="barra-progress-img-2"></div>
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

                    $("input[name=genre]").change(function(){
                        $(".img-genre").removeClass("select-img");
                        $(this).parent().find(".img-genre").addClass("select-img");

                    });
                    // $("form#registro_usuario .submet").on('click', function (e) {
                    //     console.log("detiene");
                    //     e.preventDefault();
                    //     alert("akert");
                    //     if(form#registro_usuario.){
                    //         $("form#registro_usuario").submit();
                    //     }
                    // });
            // select provincias
            $("#first-choice").change(function() {

            var $dropdown = $(this);

            $.getJSON("jsondata/data.json", function(data) {

                var key = $dropdown.val();
                var vals = [];
                // console.log(data)
                switch(key) {
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
                    
                    $secondChoice.append("<option value="+value.split(' ').join('_')+">" + value + "</option>");
                
                });

            });
            });
                </script>
    </body>
</html>