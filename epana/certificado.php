<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <title>CERTIFICADO</title>
    <!-- <link type="text/css" href="css/bootstrap.css" rel="stylesheet">
    <link type="text/css" href="css/bootstrap-grid.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/index.css" rel="stylesheet" type="text/css" />
    <link href="css/mod1.css" rel="stylesheet" type="text/css" /> -->
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
        /* width: 28%; */
    }


    table img {
        margin: 10px 10px;
        width: 130px;
    }

    table p {
        font-size: 13px;
        font-family: "Nunito";
        line-height: 20px;
        margin: 10px 5px;
        text-align: left;
    }

    </style>

</head>

<body>

    <div id="body" style="width: 100%">
        <div class="content">
            <div id="header">
                <p> <img width="100%" src="img/reto/doc-certificado-header.png" id="familias-logo" class="img-fluid" />
                </p>
            </div>
            <br>
            <h2>El Ministerio de Educación de República Dominicana <br> otorga el siguiente <br><span>CERTIFICADO DE
                    PARTICIPACIÓN</span> a:</h2>
            <div class="name"><span><?php echo $_POST['name'] ?></span></div>
            <p class="text-center"> <img src="img/certificado-linea.png" id="linea" class="img-fluid" /></p>
            <br>
            <div class="body">
                <p>por la conclusión del programa de aprendizaje en línea</p>
                <p class="text-center"> <img src="img/reto/doc-certificado-logos.png" /></p>
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
        <table  style="width: 100%;">
                 <tr>
                    <td><p>Avalado por:</p></td>
                    <td><p>Auspiciado por:</p></td>
                    <td><p>Una iniciativa de:</p></td>
                </tr>
                <tr>
                    <td>
                        <img src="img/footer/LOGO_MINERD.png" alt="Paniamor" class="img-fluid prefooter-logos" style="width: 100px;" >
                    </td>
                    <td >
                        
                        <img src="img/footer/EndViolence_Logo_rp.png" alt="End Violence Against Children" class="img-fluid prefooter-logos" style="width: 160px;">
                    </td>
                    <td>
                        
                            <img src="img/footer/PLAN.png" alt="Paniamor" class="img-fluid prefooter-logos" >
                            <img src="img/footer/footer-logo-paniamor.png" alt="Paniamor" class="img-fluid prefooter-logos">
                            <img src="img/footer/Unicef-logo.png" alt="Paniamor" class="img-fluid prefooter-logos" style="margin-top: -12px;">
                        
                        
                    </td>
                </tr>
            </table>
    </div>


</body>

</html>
