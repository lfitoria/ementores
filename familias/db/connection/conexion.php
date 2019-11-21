<?php
$mysqli = new mysqli("localhost", "ementor1_familia", "3men7oreS%", "ementor1_familias");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$mysqli->set_charset("utf8");
?>