<html id="page-3-05">
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
                    <div class="btn-na">
                    <a href="redes_sociales.php#titleancla" class="iconextact hvr-icon">Siguiente</a>
                    </div>
                <h2 class="title-cx" id="titleancla">
                
                Las tecnologías de información y comunicación (TIC),  en todos lados y a todas horas
                </h2>
                <img id="vol-img" src="../img/E-COMPAS-audio_rp.png">
                    <div class="main">
                        <div id="act_01" class="">
                            <div class="cont row">
                                <div class="col-12">
                                    <video width="100%" height="auto" id="video" poster="../img/videos/vistas-1-01.png" controls preload="auto">
                                        <source src="../../../epana/videos/01-01_vid_RD.mp4" type="video/mp4">
                                    </video>
                                    <a href="../0-03_menu.php#mod1" class="back_to_menu d-none">Volver al menú</a>
<p class="intro-header blue"><a href="../"  class="icovolver hvr-icon">Volver al inicio</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <?php require '../footer.php'; ?>
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="../js/bootstrap.bundle.js" type="text/javascript"></script>
        <script src="../js/bootstrap.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

        <script>
            $.ajax({
                url: "../db/user/update_module.php",
                method: "POST",
                data: {
                    step: 1,
                    module: 1
                },
                dataType: "html"
            });
        </script>
    </body>
</html>