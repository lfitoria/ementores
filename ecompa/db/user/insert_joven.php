<?php

session_start();
 
    $session_value=$_POST["nombre"];

    $_SESSION['usuario']=$session_value;


include '../connection/conexion.php';

mysqli_set_charset($mysqli, "utf8");

// $nombre = $_POST["nombre"];
$nombre = $session_value;

$edad = $_POST["edad"];
$genero = $_POST["genero"];

if ($genero == "1") {
    $g = "Mujer";
}elseif($genero == "2"){
    $g = "Mixto";
}else{
    $g = "Hombre";
}

$lugar = $_POST["lugar"];





$query = "INSERT INTO usuario (`nombre`, `genero`, `edad`, `lugar`) VALUES ('$nombre', '$g', $edad, '$lugar')";


$mysqli->query($query);

$last_id = $mysqli->insert_id;

$_SESSION['usuario_id']=$last_id;


// var_dump($last_id);
// die();
//return new JsonResponse(array("usuario" => $nombre));

//$output = array($nombre,$edad,$genero,$lugar);

//echo json_encode(array($result,$user));

header('location:/ecompa');


?>