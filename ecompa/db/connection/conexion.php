<?php
$mysqli = new mysqli("localhost", "root", "root", "ementores_jovenes");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$mysqli->set_charset("utf8");

?>