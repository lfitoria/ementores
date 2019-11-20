<html id="page-3-07">
<?php require '../header.php'; ?>
<body>

        <div class="wrapper">
            <!-- Page Content -->
            <div id="content"> 
                <div class="rowa header-top">
                <div class="container">
                    <div class="header-top-box"></div>
                </div>
                <!-- <img src="img/fondo_header.png"> -->
            </div>


                <section class="container">
                    <!--<p class="intro-header blue"><a href="../"  class="icovolver hvr-icon">Volver al inicio</a></p>-->
                <h2 class="title-cx" id="titleancla">
                Cómo denunciar las violencias en línea?
                </h2>
                    <div class="main">
                        <div id="act_01" class="">
                            <div class="cont row">
                                <div id="map_container">
                                    <img usemap="#3-07-inf" id="img-map" src="../img/mod3/3-07_inf.png" class="img-fluid">
                                    <map name="3-07-inf">
                                        <area data-nbr="1" shape='rect' coords='349, 183, 612, 277' href='#' />
                                        <area data-nbr="2" shape='rect' coords='639, 183, 900, 277' href='#' />
                                        <area data-nbr="3" shape='rect' coords='959, 184, 1220, 274' href='#' />
                                    </map>
                                </div>
                            </div>
                            <a href="../0-03_menu.php#mod3" class="back_to_menu d-none">Volver al menú</a>
<p class="intro-header blue"><a href="../"  class="icovolver hvr-icon">Volver al inicio</a></p>
                        </div>
                    </div>
                </section>
                <?php require '../footer.php'; ?>
            </div>
    
        </div>
        <div class="modal" id="modal_3-07_inf" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>

                    </div>
                    <div class="modal-body">
                        <div class="row d-none act-07-mdl act01" >
                            <div class="col-12">
                                <div class="slider1">
                                    <div>Se da cuando una persona adulta se gana la confianza o amistad de una niña, niño o adolescente, generalmente a través de una identidad falsa en redes sociales, chats, o videojuegos, con el fin de acosarles tanto en línea, como fuera de ella. <p></p><br></div>
                                </div>
                            </div>
                        </div>
                        <div class="row d-none act-07-mdl act02" >
                            <div class="col-12">
                                <div class="slider2">
                                    <div>Situación en la que niñas, niños y adolescentes comparten con personas a las que tienen confianza mensajes sexualmente explícitos, videos o imágenes con contenidos sexual, que ellos han generado de sí mismos. <p></p><br> </div>
                                </div>
                            </div>
                        </div>
                        <div class="row d-none act-07-mdl act03" >
                            <div class="col-12">
                                <div class="slider3">
                                    <div>Es cuando se amenaza a una niña, niño o adolescente con el fin de no revelar imágenes, videos o mensajes con contenido sexual que fueron adquiridos por medios ilícitos y así obtener dinero, más contenido o algún encuentro sexual. <p></p><br></div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div> -->
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="../js/bootstrap.bundle.js" type="text/javascript"></script>
        <script src="../js/bootstrap.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
        
        <script type="text/javascript" src="../js/map/jquery.imagemapster.js"></script>
        <script type="text/javascript" src="../js/map/when.js"></script>
        <script type="text/javascript" src="../js/map/core.js"></script>
        <script type="text/javascript" src="../js/map/graphics.js"></script>
        <script type="text/javascript" src="../js/map/mapimage.js"></script>
        <script type="text/javascript" src="../js/map/mapdata.js"></script>
        <script type="text/javascript" src="../js/map/areadata.js"></script>
        <script type="text/javascript" src="../js/map/areacorners.js"></script>
        <script type="text/javascript" src="../js/map/scale.js"></script>
        <script type="text/javascript" src="../js/map/tooltip.js"></script>
        <script type="text/javascript" src="../js/map/jquery.rwdImageMaps.js"></script>
        <script type="text/javascript" src="../js/map/init.js" ></script>

        <script>
            init();

            $("area").click(function (e) {
                e.preventDefault();
                console.log($(this).data("nbr"));
                $(".act-07-mdl").addClass("d-none");
                $(".act-07-mdl.act0" + $(this).data("nbr")).removeClass("d-none");
                $("#modal_3-07_inf").modal("show");

            });

            $.ajax({
                url: "../db/user/update_module.php",
                method: "POST",
                data: {
                    step: 7,
                    module: 3
                },
                dataType: "html"
            });
        </script>
    </body>
</html>