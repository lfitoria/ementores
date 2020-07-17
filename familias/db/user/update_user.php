<?php
session_start();
include '../connection/conexion.php';

mysqli_set_charset($mysqli, "utf8");

$data = $_POST["data"];
$step = $_POST["step"];
$last_id = $_SESSION['last_id'];

 //var_dump($data);
// var_dump($step);
//die();
        $type = $_POST["type"];
        
        $field = $type == "1"? "id_number":"email";

        if($type == "1"){
            $query2 = "UPDATE user set role = 'ROLE_ADMIN' where id = $last_id";
        }else{
            $query2 = "UPDATE user set role = 'ROLE_USER' where id = $last_id";
        }
        $data = "'" . $data . "'";
        $mysqli->query($query2);

        // $url = "0-05_registro_07.php";
        $url = "0-03_menu.php";
        
        $query1 = "SELECT * FROM user WHERE id = $last_id";
        
        $result1 = $mysqli->query($query1);
        $value1 = mysqli_fetch_assoc($result1);
        
        $_SESSION['user'] = $value1;

    
// Actualiza un usuario (registro) y redirecciona a la página siguiente


$sql = "SELECT * FROM user where $field = $data;";

// var_dump($sql);
// die();

$login = $mysqli->query($sql);

if (mysqli_num_rows($login) >= 1){

    $_SESSION['error_login'] = "Dato ingresado ya existe. Intente nuevamente";

    // var_dump($_SESSION['error_login']); 
    // die();
    header("Location: ../../0-05_registro_06.php?t=$type");
    die();

}else{

    $query = "UPDATE user set $field = $data where id = $last_id";

    
    // var_dump($query);
    // var_dump($query);
    // die();

    $mysqli->query($query);

    header("Location: ../../$url");
    die();
}
