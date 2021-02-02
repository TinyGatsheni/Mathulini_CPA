<?php

include '../server/slim/inc/functions.php';
$func = new Functions();

    $sql = "SELECT * FROM users u,roles r,gender g WHERE r.role_id = u.role_id AND u.gender_id = g.gender_id AND r.role_id = '2'";

    $res = $func->executeQuery($sql);

    if ($res) {
        
        $res = json_decode($res);
        $rows = "";

        for($i = 0;$i < $res->rows;$i++){ 
            $rows .= "<tr>";
            $rows .= "<td>".($i+1)."</td>";
            $rows .= "<td>".$res->data[$i]->firstname."</td>";
            $rows .= "<td>".$res->data[$i]->lastname."</td>";
            $rows .= "<td>".$res->data[$i]->contact."</td>";
            $rows .= "<td>".$res->data[$i]->membership."</td>";
            $rows .= "<td>".$res->data[$i]->gender_name."</td>";
            $rows .= "<td> <a href='viewuser.php?user_id=".$res->data[$i]->user_id."' class='btn btn-sm btn-primary'>view</a></td>";
            // $rows .= "<td>".$res->data[$i]->role_name."</td>";
            // $rows .= "<td>".$res->data[$i]->id_number."</td>";
            // $rows .= "<td>".$res->data[$i]->dob."</td>";
            // $rows .= "<td>".$res->data[$i]->bnk_details."</td>";
            // $rows .= "<td>".$res->data[$i]->address."</td>";
            // $rows .= "<td>".$res->data[$i]->dividends."</td>";
            // $rows .= "<td>".$res->data[$i]->benefits."</td>";
            // $rows .= "<td>".$res->data[$i]->declaration."</td>";
            // $rows .= "<td>".$res->data[$i]->acceptance."</td>";
            $rows .= "</tr>";
        }
        echo $rows;
    } else {
        echo "<tr><td colspan='2'>No Data</td></tr>";
    }



?>
