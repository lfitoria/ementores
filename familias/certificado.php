<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <title>CERTIFICADO</title>
    <link type="text/css" href="css/bootstrap.css" rel="stylesheet">
    <link type="text/css" href="css/bootstrap-grid.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/index.css" rel="stylesheet" type="text/css" />
    <link href="css/mod1.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
    img#familias-logo {
        width: 450px;
    }

    #header {
        padding-bottom: 20px;
    }

    #header img {
        width: 100%;
    }

    #header p {
        text-align: center;
    }

    .content {
        background-color: #FAFCDB;
    }

    .content .label-div {
        background-color: #D98E2F;
        height: 40px;
    }



    .text-center {
        text-align: center;
    }

    .text-right {
        text-align: right;
    }

    .col-6-left {
        float: left;
        width: 40%;
        padding: 10px;
    }

    .col-6-right {
        float: right;
        width: 40%;
        padding: 10px;
    }

    .body p {
        font-size: 20px;
        font-family: "Nunito";
        line-height: 22px;
        text-align: center;
    }

    div.name {
        font-family: "Nunito";
        color: #55C7DC;
        font-size: 20px;
        text-align: center;
    }

    div.name span {
        font-family: "Nunito";
        line-height: 22px;
        font-size: 35px;
        text-align: center;
        color: #D5643D;
        padding-bottom: 5px;
        ;
    }

    h2,
    h3 {
        text-align: center;
        color: #136C73;
        font-family: "Nunito";
    }

    .m-d-20 {
        padding: 0px 70px;
    }

    .strong {
        font-weight: bold;
    }

    h2 span {
        font-weight: bold;
        text-transform: uppercase;
    }

    table {
        background: #E7ECEC;
        width: 100%;
        text-align: center;
        font-weight: bold;
    }

    table td {
        width: 28%;
    }

    table img {
        margin: 10px 27px;
    }

    table p {
        font-size: 13px;
        font-family: "Nunito";
        line-height: 20px;
        margin: 10px 5px;
    }

    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127635098-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-127635098-1');
    <link type="text/css" href="css/bootstrap.css" rel="stylesheet">
    <link type="text/css" href="css/bootstrap-grid.css" rel="stylesheet">
    </script>
</head>

<body>

    <div id="body" style="width: 100%">
        <div class="content">
            <div id="header">
                <p> <img src="img/certificado-personajes.png" id="familias-logo" class="img-fluid" /></p>
            </div>
            <br>
            <br>
            <br>
            <h2>El Ministerio de Educación de República Dominacana otorga el siguiente <br><span>CERTIFICADO DE PARTICIPACIÓN</span> a:</h2>
            <div class="name"><span><?php echo $_POST['name'] ?></span></div>
            <p class="text-center"> <img src="img/certificado-linea.png" id="linea" class="img-fluid" /></p>
            <br>
            <div class="body">
                <p>por la conclusión del programa de aprendizaje en línea</p>
                <p class="text-center"> <img src="img/logo-ementores.png" style="width: 400px;" id="linea"
                        class="img-fluid" /></p>
                <br>
                <p class="m-d-20"><span class="strong">¡Felicidades!</span> Ahora cuenta con herramientas para promover
                    el uso seguro de internet por parte de niños, niñas y adolescentes.</p>
                <br>
                <p>Otorgado el <?php 
                    $mes = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                    echo date('d \d\e ') . $mes[date('n')-1]. date(' \d\e\l Y'); ?></p>
                <br>
                <br>
                <div class="label-div"></div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <table>
        <tr>
        <td><img src="http://rd.ementores.org/familias/img/footer/LOGO_MINERD.png" alt="Paniamor" class="img-fluid prefooter-logos"></td>
        <td><img src="http://rd.ementores.org/familias/img/footer/EndViolence_Logo_rp.png" alt="End Violence Against Children" class="img-fluid prefooter-logos"></td>
        <td><img src="http://rd.ementores.org/familias/img/footer/PLAN.png" alt="End Violence Against Children" class="img-fluid prefooter-logos"></td>
        </tr>
        </table>

    </div>


</body>

</html>
