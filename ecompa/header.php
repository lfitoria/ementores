


    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127635098-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127635098-3');
</script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d0ae9ed6e1416bc"></script>


        <meta http-equiv="Cache-Control" content="no-cache" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <link rel="icon" href="https://www.ementores.org/ecompa/favicon.ico" type="image/gif">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:url" content="https://www.ementores.org/ecompa" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Uso seguro de las tecnologías e internet para chicos y chicas -  Fundación Paniamor Costa Rica" />
        <meta property="og:image" content="https://www.ementores.org/ecompa/OG_e-compas.png" />
        <meta property="og:image:secure_url" content="https://www.ementores.org/ecompa/OG_e-compas.png" />
        <meta property="og:image:type" content="image/jpeg" />
        <meta property="og:image:width" content="512" />
        <meta property="og:image:height" content="270" />
        <meta property="og:image:alt" content="Espacio con recursos audiovisuales e interactivos para que chicas y chicos aprendan a protegerse contra los peligros en la internet." />
        <meta property="og:description" content="Espacio con recursos audiovisuales e interactivos para que chicas y chicos aprendan a protegerse contra los peligros en la internet." />
        <meta name="description" content="Espacio con recursos audiovisuales e interactivos para que chicas y chicos aprendan a protegerse contra los peligros en la internet."/>
        <title>e-compa: Uso seguro de las tecnologías e internet para chicos y chicas -  Fundación Paniamor Costa Rica</title>
        <link type="text/css" href="/ecompa/css/bootstrap.css" rel="stylesheet">
        <link type="text/css" href="/ecompa/css/bootstrap-grid.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,700,800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700,900" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <link href="/ecompa/css/style.css" rel="stylesheet" type="text/css" />
        <link href="/ecompa/css/index.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" type="text/css" href="css/recu.css">

    <link href="/ecompa/css/mod2.css" rel="stylesheet" type="text/css" />
    <link href="/ecompa/css/mod3.css" rel="stylesheet" type="text/css" />
    <link  type="text/css"  href="/ecompa/css/bootstrap.css" rel="stylesheet">
    <link  type="text/css"  href="/ecompa/css/bootstrap-grid.css" rel="stylesheet">
      <!-- Global site tag (gtag.js) - Google Analytics
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127635098-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
¿Qué te parece e-compa?
          gtag('config', 'UA-127635098-1');
        </script> -->
        <script src="https://kit.fontawesome.com/93f079ed62.js" crossorigin="anonymous"></script>

    </head>
    

<div id="boxelo">
    <div id="logo-flotante">
        <h1>
            <a href="/ecompa">
        <img alt="e-compa: Uso seguro de las tecnologías e internet para chicos y chicas" src="https://ementores.org/ecompa/img/icono-e-compas.png">
            </a>
        </h1>
    </div>
    <div id="logo-texto">
        <p>Espacio con recursos audiovisuales para que <strong>chicas y chicos aprendan a protegerse contra los peligros en la Web.</strong></p>
    </div>
    </div>
    <button class="encuesta-modal" data-toggle="modal" data-target=".modal_encuesta">
        <p class="d-flex">¿Qué te parece
        <img id="img-encuesta-fixed" src="https://ementores.org/themes/gestion/img/e-compas_color.png">
        ?
        </p>
    </button>

    <?php
session_start();

?>

    <input type="hidden" value="<?php
        if(isset($_SESSION['usuario'])){
            echo $_SESSION['usuario'];
        } 
    ?>" id="session">
    
    
