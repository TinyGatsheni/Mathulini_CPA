<?php

include '../server/slim/inc/functions.php';
$func = new Functions();


    $sql = "SELECT * FROM gender WHERE status = 1";

    $res = $func->executeQuery($sql);

    $rows = "";
    if ($res) {
        $res = json_decode($res);
        for($i = 0;$i < $res->rows;$i++){ 
            
            $rows .= "<option value='".$res->data[$i]->gender_id."'>".$res->data[$i]->gender_name."</option>";
           
        }
        echo $rows;
    }else{
        echo "error";
    }


?>
