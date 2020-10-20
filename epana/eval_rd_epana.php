<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset=UTF-8" />

    <meta http-equiv="Cache-Control" content="no-cache" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <link rel="icon" href="/epana/favicon.ico" type="image/gif">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" href="css/bootstrap.css" rel="stylesheet">
    <link type="text/css" href="css/bootstrap-grid.css" rel="stylesheet">
    <link type="text/css" href="css/style-reto.css" rel="stylesheet">


</head>

<body id="content">
    <div class="rowa header-top">
        <div class="container">
            <div id="logo-texto">
                <p>Espacio con recursos audiovisuales para que <strong>chicas y chicos aprendan a aprovechar las
                        tecnologías y protegerse contra los peligros en la Web.</strong></p>
            </div>
            <div class="header-top-box"></div>
        </div>
        <!-- <img src="img/fondo_header.png"> -->
    </div>
    <!-- $user = $_SESSION['usuario_id'];

$query = "SELECT step, is_completed FROM activity where user = $user";
// $result = $mysqli->query($query);
// $result_f = mysqli_fetch_array($result);

try {
  $result = $mysqli->query($query);
} catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
} -->
    <?php 
session_start();
include 'db/connection/conexion.php';
$user = $_SESSION['usuario_id'];
// var_dump($_SESSION);
// die();
if (is_null($user)) {
    echo '<script>window.location="/epana"</script>';
    die();
}
$last_id = $user["id"];

    

    $random_number_array = range(1,15);
    shuffle($random_number_array );
    // echo "<pre>";
    // var_dump($random_number_array);
    $output = array_slice($random_number_array, 1, 10);

    
    $array = implode("','",$output);
    $query = "SELECT * FROM quiz where id in ('$array')";
$result = $mysqli->query($query);
$result_f = array();
while ($row = mysqli_fetch_array($result)) {

$result_f[] = $row;
}

// var_dump($array);
// var_dump($query);
// var_dump($result);
// var_dump($result_f);
// echo "</pre><hr>";

?>

    <div id="page-wrap" class="container">
        <form action="eval_rd_epana_result.php" method="post" id="quiz">
            <div id="eva_09p0" class="mod">
                <div class="container">
                    <div class="cont row">
                        <div class="col-12 col-sm-8"">
                        <img class=" img-home" src="img/reto/reto-graphic.png" alt="">
                            <div class="controwbox">
                                <h3 class="intro-paragrah"><strong>¡Es momento</strong> de realizar el reto final!</h3>
                                <p class="label-info">A continuación encontrarás una <strong>serie de
                                        enunciados.</strong></p>
                                <p class="label-info">Analízalas y selecciona si consideras que la frase es
                                    <strong>Falsa o Verdadera</strong>
                                </p>
                                <a href="#" class="gotoModulePage btn-start" data-page="1">Iniciar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- // -->
            <?php foreach ($result_f as $key => $item) {  ?>

            <div id="eva_09p<?php echo (++$key) ; ?>" class="mod d-none">
                <div class="box-quest container-box">

                    <h2>Lee la siguiente frase</h2>

                    <label class="ques-title" for="question-1-answers-A"><?php echo ($item["que"]) ; ?></label>

                    <div class="img-box-quest">
                        <div class="num-slide"><?=($key)?>/10</div>
                        <img src="img/reto/stages/<?=($item["image"])?>" alt="">
                    </div>
                    <?php ++$key //echo ($item["que"]."<br>") ; ?>

                    <div class="btns-answ">
                        <label class="btn-false">
                            <input type="radio" name="question-<?= ($item["id"])  ?>-answers"
                                id="question-<?= ($item["id"])  ?>-answers" value="F" required
                                data-page="<?php echo ($key) ; ?>" />
                            <img src="img/reto/ico-f.png" alt="">
                        </label>
                        <label class="label-instruction">Elije una opción</label>
                        <label class="btn-true">
                            <input type="radio" name="question-<?= ($item["id"])  ?>-answers"
                                id="question-<?= ($item["id"])  ?>-answers" value="V" required
                                data-page="<?php echo ($key) ; ?>" />
                            <img src="img/reto/ico-v.png" alt="">
                        </label>
                    </div>

                </div>
            </div>
            <?php } ?>
            <!-- </div> -->


        </form>

    </div>
    <!-- <div class="slider">
    <div>I am a slide.</div>
    <div>I am another slide.</div> -->
    </div>
    <div id="subfooter">
        <?php require 'footer.php'; ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
    // $(".gotoModulePage").click(function(e) {
    //     // console.log($(this).data("page"))
    //     if ($(this).data("page") !== 1) {
    //         console.log($(this).parent().find("input[type=radio]"))
    //         console.log($(this).parent().find("input[type=radio]:checked").val())
    //         father = $(this).parent();
    //         if ($(this).parent().find("input[type=radio]:checked").val() !== undefined) {
    //             $(".mod").addClass("d-none");
    //             $("#eva_09p" + $(this).data("page")).removeClass("d-none");
    //         } else {
    //             father.find(".alerta").removeClass("d-none")
    //         }
    //     } else {
    //         $(".mod").addClass("d-none");
    //         $("#eva_09p" + $(this).data("page")).removeClass("d-none");
    //     }
    // });

    $(".gotoModulePage").click(function(e) {
        e.preventDefault();
        // console.log($(this).data("page"))

        $(".mod").addClass("d-none");
        $("#eva_09p" + $(this).data("page")).removeClass("d-none");
    });


    $("input[type=radio]").click(function(e) {
        console.log("entraaaaa")

        if ($(this).data("page") !== 11) {
            $(".mod").addClass("d-none");
            $("#eva_09p" + $(this).data("page")).removeClass("d-none");
        } else {
            $("#quiz").submit();
        }
    });
    </script>
</body>

</html>
