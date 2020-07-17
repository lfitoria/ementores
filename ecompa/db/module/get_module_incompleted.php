<?php

/* 
 * Obtiene la cantidad deactividades incompletas de un módulo ($module) del usuario ($last_id) logueado 
 */
mysqli_set_charset($mysqli, "utf8");
function getIncompletedModule($last_id, $module){
    $query = "SELECT * FROM module where user = $last_id and module = $module";
    $result = $mysqli->query($query);

    $row_cnt = $result->num_rows;

    return $row_cnt;
}