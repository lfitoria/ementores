<?php
session_start();
include '../connection/conexion.php';

mysqli_set_charset($mysqli, "utf8");

$module = $_POST["module"];
$is_approved = $_POST["is_approved"];
$score = $_POST["score"];
$last_id = $_SESSION['user']["id"];


// Obtiene la actividad final de un módulo ($module) del usuario ($last_id) logueado 

$query1 = "SELECT * FROM activity WHERE user = $last_id and module = $module";

$result1 = $mysqli->query($query1);
$value1 = mysqli_fetch_assoc($result1);

// Si la nota es maypr a la anterior la acyualiza y cambia el estado de la prueba

if(intval($value1["score"]) < intval($score)){
    $query = "UPDATE activity set score = $score, is_approved = $is_approved  where user = $last_id and module = $module";
    $mysqli->query($query);
}



die();
?>