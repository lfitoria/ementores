<?php


 
    $q1=$_POST["q1"];
    $q2=$_POST["q2"];
    $text=$_POST["q3"];
    $user_id=$_POST["user_id"];

    


include '../connection/conexion.php';

mysqli_set_charset($mysqli, "utf8");

$query = "INSERT INTO encuesta (`q1`, `q2`, `text`, `user_id`) VALUES ($q1, $q2, '$text', $user_id)";

 var_dump($query);
 var_dump($q1);
 var_dump($q2);
 var_dump($text);
 var_dump($user_id);

// die();

$mysqli->query($query);

$last_id = $mysqli->insert_id;


// var_dump($last_id);
// die();

if (!empty($last_id)) {
    // return new JsonResponse(array("last_id" => $last_id));
    echo json_encode(array("last_id" => $last_id));
}else{
    // return new JsonResponse(array("last_id" => false));
    echo json_encode(array("last_id" => false));
}



?>