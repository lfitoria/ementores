<?php

session_start();
 
    // $session_value=$_POST["nombre"];
    $session_value=$_POST["edad"];

    $_SESSION['usuario']=$session_value;


include '../connection/conexion.php';

mysqli_set_charset($mysqli, "utf8");

// $nombre = $_POST["nombre"];
$edad = $session_value;

// $edad = $_POST["edad"];
// $genero = $_POST["genero"];

// if ($genero == "1") {
//     $g = "Mujer";
// }elseif($genero == "2"){
//     $g = "Mixto";
// }else{
//     $g = "Hombre";
// }

$lugar = $_POST["lugar"];
$grado = $_POST["grado"];





// $query = "INSERT INTO usuario (`nombre`, `genero`, `edad`, `lugar`) VALUES ('$nombre', '$g', $edad, '$lugar')";

$query = "INSERT INTO usuario (`edad`, `lugar`,`grado`) VALUES ( $edad, '$lugar', '$grado')";

$mysqli->query($query);

$last_id = $mysqli->insert_id;

$_SESSION['usuario_id']=$last_id;


// var_dump($_SESSION);
// die();
//return new JsonResponse(array("usuario" => $nombre));

//$output = array($nombre,$edad,$genero,$lugar);

//echo json_encode(array($result,$user));

header('location:/ecompa');


?>