<?php
session_start();
include '../connection/conexion.php';

mysqli_set_charset($mysqli, "utf8");

$name = $_POST["name"];

$last_id = $_SESSION['user']['id'];


if(!empty($name))
    $name = $name;
else
    $name = 'Pipipi';


// Actualiza un usuario (registro) y redirecciona a la página siguiente

$query = "UPDATE user set certificate_name = '$name' where id = $last_id";

$mysqli->query($query);

header("Location: ../../$url");
die();
?>