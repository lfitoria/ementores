<?php

include '../connection/conexion.php';

mysqli_set_charset($mysqli, "utf8");

$nombre = $_POST["nombre"];
$genero = $_POST["genero"];
$edad = $_POST["edad"];
$lugar = $_POST["lugar"];



// $query = "INSERT INTO usuario (`nombre`, `genero`, `edad`, `lugar`) VALUES ($nombre, $genero, $edad, $lugar)";


// $mysqli->query($query);

return new JsonResponse(array("usuario" => $nombre));

?>