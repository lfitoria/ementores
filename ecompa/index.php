<html class="front-page">
<?php require 'header.php'; ?>
<body>

<!-- <?php
session_start();

?>

    <input type="hidden" value="<?php
        if(isset($_SESSION['edad'])){
            echo $_SESSION['edad'];
        } 
    ?>" id="session"> -->

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
                            <p>Compartilo con tus compas:</p>
                        <div class="addthis_inline_share_toolbox" ></div>
                        </div>
                        </div>
                        <div id="barra">
                            <div class="barrita"></div>
                        </div>
                        <div class="d-flex recursos_aprender justify-content-md-center">
                            <div class="col-sm-4 col">
                                <h2>Recursos para aprender</h2>
                                <p>Las tecnologías y la Internet te ayudan a descubrir cosas nuevas, comunicarte, divertirte y a desarrollar tus talentos. ¡Solo tenés que aprender a sacarle el jugo y a protegerte de los riesgos!</p>
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

                    <section>
                        <div class="container">
                            <div class="row align-center justify-content-md-center">
                                <div col-12 col-sm-9 align-items-center justify-content-ms-center row>
                                    <div col-12 col-sm-10>
                                       <a href="https://ementores.org/"> <img src="img/mod1/banner-web.png" alt="volver-ementores" class="img-fluid mb-5" ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>



                </section> 

                <?php require 'footer.php'; ?>
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
                        
                        <form id="registro_usuario" action="/ecompa/db/user/insert_joven.php" method="POST">
                            <img class="img-registro" src="img/icon-question.png">
                            <h2>Antes de empezar...</h2>
                            <!-- <h3>¡Contanos sobre vos!</h3> -->
                            <h3>Nos interesa saber unas pocas cosas,<br> ¡contanos sobre vos!</h3>
                            <p class="label text-center" style="font-size: 1.3em;">
                                Si tenés 11 años o más este espacio es para vos.
                                <br>
                                Tu privacidad está garantizada en este espacio.
                                    </p>
                            
                            <!-- <div class="row justify-content-center">
                            <div class="col col-sm-6">
                                <p class="label">¿Cómo te llamás?</p>
                                <input type="text" name="nombre" placeholder="">
                                <p class="small d-none text-center" id="warone">Recordá completar este espacio.</p>
                            </div>
                            </div>
                            <hr>
                            <div class="row justify-content-center">
                            <div class="col col-sm-6">
                            <p class="label">Elegí un avatar</p>
                            <div class="d-flex">
                                <div class="form-check d-inline-block col-4 chk-female">
                                    <input class="form-check-input " type="radio" name="genero" id="exampleRadios1" value="1" >
                                    <label class="form-check-label float-right" for="exampleRadios1">
                                        <img src="img/avatar_unirse_femenina.png" class="img-genre" alt=""/>
                                    </label>
                                </div>
                                <div class="form-check d-inline-block col-4 chk-male">
                                    <input class="form-check-input " type="radio" name="genero" id="exampleRadios2" value="2">
                                    <label class="form-check-label float-left" for="exampleRadios2">
                                        <img src="img/avatar_unirse_mixto.png" class="img-genre" alt=""/>
                                    </label>
                                </div>
                                <div class="form-check d-inline-block col-4 chk-male">
                                    <input class="form-check-input " type="radio" name="genero" id="exampleRadios3" value="3">
                                    <label class="form-check-label float-left" for="exampleRadios3">
                                        <img src="img/avatar_unirse_masculino.png" class="img-genre" alt=""/>
                                    </label>
                                </div>
                            </div>
                            <p class="small d-none text-center" id="wartwo">Debés elegir una de las opciones.</p>
                            </div>
                            </div>
                            <hr> -->
                            <div class="row justify-content-center">
                            <div class="col col-sm-6">
                            <p class="label">¿Qué edad tenés?</p>
                            <p class="text-center label"><span id="demo"></span></p>
                            <!-- <input type="range" min="1" max="100" class="slider" value="1" id="myRange" name="edad" > -->
                            <input type="number" name="edad" class="w-25">
                            <p class="small d-none text-center" id="wartree">Debés escribir la edad.</p>
                            </div>
                            </div>
                            
                            <hr>
                            <div class="row justify-content-center">
                            <div class="col col-sm-6">
                            <p class="label">¿Dónde vivís?</p>
                            <input type="text" name="lugar" placeholder="">
                            <!-- <select name="lugar">
                                <option value="default">Provincia</option>
                                <option value="San José">San José</option>
                                <option value="Alajuela">Alajuela</option>
                                <option value="Cartago">Cartago</option>
                                <option value="Heredia">Heredia</option>
                                <option value="Guanacaste">Guanacaste</option>
                                <option value="Puntarenas">Puntarenas</option>
                                <option value="Limón">Limón</option>
                            </select> -->
                            <p class="small d-none text-center" id="warfour">Recordá seleccionar una opción.</p>
                            <!-- <p class="small">Contanos en qué provincia y cantón vivís.</p> -->
                            </div>
                            </div>
                            <hr>
                            <div class="row justify-content-center">
                            <div class="col col-sm-6">
                            <p class="label">¿En qué grado estás?</p>
                            <input type="text" name="grado" placeholder="">
                            <!-- <p class="small d-none text-center" id="warfour">Recordá completar este espacio.</p> -->
                            <!-- <p class="small">Contanos en qué provincia y cantón vivís.</p> -->
                            </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn-c d-block m-auto " data-dismiss="modal" aria-label="Close">Cerrar</button>
                                </div>
                                <div class="col">
                                    <button id="btn-r" type="button" class="btn-r d-block m-auto submet" >Ingresar</button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
<script>

//     var slider = document.getElementById("myRange");
//     var output = document.getElementById("demo");

// output.innerHTML = slider.value;
// slider.oninput = function() {
//     output.innerHTML = this.value;
// }



$("form#registro_usuario .submet").on('click', function () {
    
    
    // var nombre = $('input[name=nombre]').val();
    // var genero = $('input[name=genero]:checked').val();
    var range = $('input[name=edad]').val();
    var lugar = $('select[name=lugar]').val();
    var grado = $('input[name=grado]').val();
console.log(range);
console.log(lugar);
console.log(grado);


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

    
    if(range == ""){
        $("input[name=edad]").focus();
        $("p#wartree").removeClass("d-none");
        $("p#warone").addClass("d-none");
        $("p#wartwo").addClass("d-none");
    }else if(lugar == "default"){
        $("select[name=lugar]").focus();
        $("p#warfour").removeClass("d-none");

        $("p#warone").addClass("d-none");
        $("p#wartwo").addClass("d-none");
        $("p#wartree").addClass("d-none");
    

    }else{
        console.log("sumet");
        $("form#registro_usuario").submit();
    }


});

$('#btn-chxs').on('click', function () {
    $("#modal_btn-chxs").modal("show");
});

$("input[name=genero]").change(function(){
    $(".img-genre").removeClass("select-img");
    $(this).parent().find(".img-genre").addClass("select-img");
});

$(document).ready(function(){

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
