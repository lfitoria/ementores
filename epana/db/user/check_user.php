<?php
header("Content-Type: application/json");
session_start();
include '../connection/conexion.php';
mysqli_set_charset($mysqli, "utf8");

$email = $_POST["email"];

$query = "SELECT * FROM usuario WHERE lugar = '".$email."'";
$result_query = $mysqli->query($query);
$result = mysqli_fetch_assoc($result_query);

// var_dump($result["id"]);
// var_dump($query);
// var_dump($email);
// die();

$_SESSION['usuario_id']=$result["id"];
// var_dump($_SESSION);
// die();

$row_cnt = $result_query->num_rows;
// var_dump($row_cnt);
// var_dump($result);
// die();


if ($row_cnt > 0) {
    echo json_encode($result);
}else{
    // echo json_encode(array($result["error"] = false));
    echo json_encode($result["error"] = false);
}

// return new JsonResponse(array("usuario" => $result));

