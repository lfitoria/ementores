<?php
session_start();
    $session_value=$_POST["nombre"];
    // $session_value=$_POST["edad"];
    $_SESSION['usuario']=$session_value;
include '../connection/conexion.php';

mysqli_set_charset($mysqli, "utf8");

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
$grado = $_POST["grado"];
$user_provincia = $_POST["user_provincia"];
$user_municipio = $_POST["user_municipio"];

$query = "SELECT * FROM usuario WHERE lugar = '".$lugar."'";
$result_query = $mysqli->query($query);
$result = mysqli_fetch_assoc($result_query);
$row_cnt = $result_query->num_rows;
if ($row_cnt > 0) {
    echo json_encode($result["error"] = false);
}else{
    $query = "INSERT INTO usuario (`nombre`, `genero`, `edad`, `lugar`,`grado`,`user_provincia`,`user_municipio`) VALUES ('$nombre', '$g', $edad, '$lugar','$grado','$user_provincia','$user_municipio')";
    $mysqli->query($query);
    $last_id = $mysqli->insert_id;
    $_SESSION['usuario_id']=$last_id;
    // header('location:/epana');
    echo json_encode($result["error"] = true);
    
}


//
// $query = "INSERT INTO usuario (`nombre`, `genero`, `edad`, `lugar`,`grado`,`user_provincia`,`user_municipio`) VALUES ('$nombre', '$g', $edad, '$lugar','$grado','$user_provincia','$user_municipio')";
// $mysqli->query($query);
// $last_id = $mysqli->insert_id;
// $_SESSION['usuario_id']=$last_id;
// header('location:/epana');


?>