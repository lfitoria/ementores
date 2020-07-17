<?php
session_start();
include '../connection/conexion.php';

mysqli_set_charset($mysqli, "utf8");

$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];

$last_id = $_SESSION['user']['id'];



// Actualiza un usuario (registro) y redirecciona a la página siguiente

$query = "UPDATE user set q1 = '$q1', q2 = '$q2', q3 = '$q3' where id = $last_id";

$mysqli->query($query);

//header("Location: ../../$url");
die();
?>