<?php

// Borra la sesión y desloguea al usuario activo
session_start();

unset($_SESSION['user']);

header("Location: ../../0-02_login.php");

die();
