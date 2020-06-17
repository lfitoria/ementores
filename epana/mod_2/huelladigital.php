<html id="page-2-08_act">
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
                Huella digital: nuestro rastro en Internet
                </h2>
                <div class="main">
                        <div id="act_01" class="">
                            <div class="cont row">
                                <div class="col-12">
                                    <video width="100%" height="auto" id="video" poster="../img/videos/vistas-1-01.png" controls preload="auto">
                                        <source src="../videos/02-08_vid_rd.mp4" type="video/mp4">
                                    </video>
                                    <a href="../0-03_menu.php#mod1" class="back_to_menu d-none">Volver al menú</a>
<p class="intro-header blue"><a href="../"  class="icovolver hvr-icon">Volver al inicio</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- <a href="../0-03_menu.php#mod2" class="back_to_menu d-none">Volver al menú</a> -->
<!-- <p class="intro-header blue"><a href="../"  class="icovolver hvr-icon">Volver al inicio</a></p> -->
            <?php require '../footer.php'; ?>
        </div>
        
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.bundle.js" type="text/javascript"></script>
    <script src="../js/bootstrap.js" type="text/javascript"></script>


    <script>

        var boton = null;
        $(".gotoModulePage").click(function () {
            $(".module-page").addClass("d-none");
            $("#act_01p" + $(this).data("page")).removeClass("d-none");

            if(!$('#act0_01p1').hasClass("d-none")){
                $("#content").removeClass("bck-blue");    
            }else{
                $("#content").addClass("bck-blue");
            }
            
        });

        $(".main button.btn-action").click(function () {

            console.log($(this).data("modl"));

            boton = $(this);

            $(this).attr('disabled', 'disabled');
            $(this).addClass('disabled-btn-request');


            $(".act-04-mdl").addClass("d-none");
            $(".act-04-mdl.act0" + $(this).data("modl")).removeClass("d-none");
            $("#modal_1-04_act").modal("show");

        });

        $("button.close").click(function () {

            var count = boton.parent().find("button[disabled=disabled]").length;

            if (count == 2) {
                boton.parent().parent().addClass("disabled-request");
            }
            $("#modal_1-04_act").modal("hide");
        });




        $.ajax({
            url: "../db/user/update_module.php",
            method: "POST",
            data: {
                step: 5,
                module: 2
            },
            dataType: "html"
        });
    </script>
</body>
</html>