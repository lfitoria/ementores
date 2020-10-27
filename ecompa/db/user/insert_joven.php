<?php

session_start();
 
    $session_value=$_POST["edad"];

    $_SESSION['usuario']=$session_value;


include '../connection/conexion.php';

mysqli_set_charset($mysqli, "utf8");

$edad = $session_value;


$lugar = $_POST["lugar"];
$grado = $_POST["grado"];




$query = "INSERT INTO usuario (`edad`, `lugar`,`grado`) VALUES ( $edad, '$lugar', '$grado')";

$mysqli->query($query);

$last_id = $mysqli->insert_id;

$_SESSION['usuario_id']=$last_id;



header('location:/ecompa');


?>