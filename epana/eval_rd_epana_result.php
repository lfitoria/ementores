<!DOCTYPE html>
<html>

<head>
    <meta charset=UTF-8" />
    <title></title>
    <link type="text/css" href="css/bootstrap.css" rel="stylesheet">
    <link type="text/css" href="css/bootstrap-grid.css" rel="stylesheet">
    <link type="text/css" href="css/style-reto.css" rel="stylesheet">
    <title>Resultado</title>

</head>

<body>

    <div id="page-wrap">

        <!-- <h1>Resultado</h1> -->

        <?php
        include 'db/connection/conexion.php';
        session_start();

        $user = $_SESSION['usuario_id'];
        if (is_null($user)) {
            echo '<script>window.location="/epana"</script>';
            die();
        }
        $user_name = $_SESSION['nombre'];
        
        // var_dump($_SESSION);

            $a = array();
            // var_dump($_POST['question-5-answers']);
            if($_POST['question-1-answers']){ $answer1 = $_POST['question-1-answers']; };
            if($_POST['question-2-answers']){ $answer2 = $_POST['question-2-answers']; };
            if($_POST['question-3-answers']){ $answer3 = $_POST['question-3-answers']; };
            if($_POST['question-4-answers']){ $answer4 = $_POST['question-4-answers']; };
            if($_POST['question-5-answers']){ $answer5 = $_POST['question-5-answers']; };
            if($_POST['question-6-answers']){ $answer6 = $_POST['question-6-answers']; };
            if($_POST['question-7-answers']){ $answer7 = $_POST['question-7-answers']; };
            if($_POST['question-8-answers']){ $answer8 = $_POST['question-8-answers']; };
            if($_POST['question-9-answers']){ $answer9 = $_POST['question-9-answers']; };
            if($_POST['question-10-answers']){ $answer10 = $_POST['question-10-answers']; };
            if($_POST['question-11-answers']){ $answer11 = $_POST['question-11-answers']; };
            if($_POST['question-12-answers']){ $answer12 = $_POST['question-12-answers']; };
            if($_POST['question-13-answers']){ $answer13 = $_POST['question-13-answers']; };
            if($_POST['question-14-answers']){ $answer14 = $_POST['question-14-answers']; };
            if($_POST['question-15-answers']){ $answer15 = $_POST['question-15-answers']; };

            if($_POST['question-1-answers']){ $a[1]=$_POST['question-1-answers']; };
            if($_POST['question-2-answers']){ $a[2]=$_POST['question-2-answers']; };
            if($_POST['question-3-answers']){ $a[3]=$_POST['question-3-answers']; };
            if($_POST['question-4-answers']){ $a[4]=$_POST['question-4-answers']; };
            if($_POST['question-5-answers']){ $a[5]=$_POST['question-5-answers']; };
            if($_POST['question-6-answers']){ $a[6]=$_POST['question-6-answers']; };
            if($_POST['question-7-answers']){ $a[7]=$_POST['question-7-answers']; };
            if($_POST['question-8-answers']){ $a[8]=$_POST['question-8-answers']; };
            if($_POST['question-9-answers']){ $a[9]=$_POST['question-9-answers']; };
            if($_POST['question-10-answers']){ $a[10]=$_POST['question-10-answers']; };
            if($_POST['question-11-answers']){ $a[11]=$_POST['question-11-answers']; };
            if($_POST['question-12-answers']){ $a[12]=$_POST['question-12-answers']; };
            if($_POST['question-13-answers']){ $a[13]=$_POST['question-13-answers']; };
            if($_POST['question-14-answers']){ $a[14]=$_POST['question-14-answers']; };
            if($_POST['question-15-answers']){ $a[15]=$_POST['question-15-answers']; };
            
            

            // echo "<pre>";
            // var_dump($a);
            // echo "</pre>";
            $totalCorrect = 0;

            for ($i=1; $i < 16 ; $i++) { 
                // $question = ${'answer'. $i};
                if($a[$i]){
                    // var_dump($a[$i]);
                    if($i == 1 && $a[$i] == "V"){
                        $totalCorrect++;
                    }
                    if($i == 2 && $a[$i] == "F"){
                        $totalCorrect++;
                    }
                    if($i == 3 && $a[$i] == "F"){
                        $totalCorrect++;
                    }
                    if($i == 4 && $a[$i] == "F"){
                        $totalCorrect++;
                    }
                    if($i == 5 && $a[$i] == "V"){
                        $totalCorrect++;
                    }
                    if($i == 6 && $a[$i] == "V"){
                        $totalCorrect++;
                    }
                    if($i == 7 && $a[$i] == "F"){
                        $totalCorrect++;
                    }
                    if($i == 8 && $a[$i] == "V"){
                        $totalCorrect++;
                    }
                    if($i == 9 && $a[$i] == "V"){
                        $totalCorrect++;
                    }
                    if($i == 10 && $a[$i] == "V"){
                        $totalCorrect++;
                    }
                    if($i == 11 && $a[$i] == "F"){
                        $totalCorrect++;
                    }
                    if($i == 12 && $a[$i] == "F"){
                        $totalCorrect++;
                    }
                    if($i == 13 && $a[$i] == "V"){
                        $totalCorrect++;
                    }
                    if($i == 14 && $a[$i] == "F"){
                        $totalCorrect++;
                    }
                    if($i == 15 && $a[$i] == "F"){
                        $totalCorrect++;
                    }
                }
            }
            // var_dump($totalCorrect);
            // $totalCorrect = 7;
            ?>
        <?php if($totalCorrect >= 7){ ?>
        <?php 
                $query = "UPDATE usuario set eval_completed = 1, score = $totalCorrect where id = $user";
                $result = $mysqli->query($query);

                // echo "pasa prueba";
                ?>
                <div id="eva_result_positive" class="mod">
            <div class="container">
                <div class="cont row sl-1">
                    <div class="col-12 col-sm-8"">
                        <div class="controwbox">
                            <h3 class="intro-paragrah-result"><strong>¡Muy bien!</strong> Lograste superar con éxito este reto.</h3>
                            <p>Ya cuentas con más herramientas para disfrutar y aprovechar las tecnologías de manera segura</p>
                            <img src="img/reto/feedback1-graphic.png" alt="">
                            <p></p>
                            <div class="btns-answ">
                                <!-- <a href="#">
                                <img src="img/reto/cert_positive_result.png" alt="">
                                </a> -->
                                <!-- -- -->
                                
                            <a id="down-slide" class="d-block m-auto btn-continue"><img src="img/reto/cert_positive_result.png" alt=""></a>
                        
                                <!-- // -->
                            </div>
                        </div>
                    </div>
                </div>
            
            <div class="cont row sl-2 d-none">
                    <div class="col-12 col-sm-8"">
                        <div class="controwbox">
                            <h3 class="intro-paragrah-result"><strong>Ahora sí,</strong><br> ya puedes descargar tu certificado de participación:</h3>
                            
                            <p></p>
                            <div class="btns-answ">
                                <!-- <a href="#">
                                <img src="img/reto/cert_positive_result.png" alt="">
                                </a> -->
                                <!-- -- -->
                            <form action="output.php" method="POST" >
                            <input type="hidden" name="name" class="form-control mr-auto" value="<?php echo $user_name ?>">
                            <button type="submit" class="d-block m-auto btn-continue"><img src="img/reto/btn-obtener.png" alt=""></button>
                        </form>
                        <div>
                            <a class="share-fb" target="_blank" onclick=myPopup('https://www.facebook.com/sharer/sharer.php?u=http%3A//rd.ementores.org')><img src="img/reto/btn-fb-share.png" alt=""></a>
                        </div>
                        
                                <!-- // -->
                            </div>
                            <a href="/epana" class="btn-xcap">
                <img src="img/reto/ok_result.png" alt="">
                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }else{ ?>

        <div id="eva_result_negative" class="mod">
            <div class="container">
                <div class="cont row">
                    <div class="col-12 col-sm-8"">
                        <div class="controwbox">
                            <h3 class="intro-paragrah-result"><strong>¡No has logrado superar</strong> con éxito este reto!</h3>
                            <p>¿Qué tal si lo intentas de nuevo?</p>
                            <img src="img/reto/feedback2-graphic.png" alt="">
                            <p></p>
                            <div class="btns-answ">
                <label class="btn-false">
                <a href="/epana">
                <img src="img/reto/ok_result.png" alt="">
                </a>
                </label>
                <label class="label-instruction">Elije una opción</label>
                <label class="btn-true">
                <a href="/epana/eval_rd_epana.php">
                <img src="img/reto/negative_result.png" alt="">
                </a>
                </label>
                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php } ?>



    </div>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script>
        $("#down-slide").click(function(){
            $(".sl-1").addClass("d-none");
            $(".sl-2").removeClass("d-none");
        });
        function myPopup(url) {
            window.open( url, "myWindow", "status = 1, height = 500, width = 360, resizable = 0" )
        }
    </script>

</body>

</html>
