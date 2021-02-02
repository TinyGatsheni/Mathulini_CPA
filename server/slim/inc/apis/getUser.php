<?php

include '../server/slim/inc/functions.php';
$func = new Functions();

$sql = "SELECT * FROM users u,roles r,gender g WHERE r.role_id = u.role_id AND g.gender_id = u.gender_id AND user_id = ".$_GET['user_id'];

    $res = $func->executeQuery($sql);

    if ($res) {
        
        $res = json_decode($res);
        $rows = "";

        for($i = 0;$i < $res->rows;$i++){
            
            // $rows .= "<tr>";
            // $rows .= "<th>First Name</td>";
            // $rows .= "<td>".$res->data[$i]->firstname."</td>";
            // $rows .= "</tr>";

            // $rows .= "<tr>";
            // $rows .= "<th>Last Name</td>";
            // $rows .= "<td>".$res->data[$i]->lastname."</td>";
            // $rows .= "</tr>";

            // $rows .= "<tr>";
            // $rows .= "<th>Role</td>";
            // $rows .= "<td>".$res->data[$i]->role_name."</td>";
            // $rows .= "</tr>";

            // $rows .= "<tr>";
            // $rows .= "<th>ID Number</td>";
            // $rows .= "<td>".$res->data[$i]->id_number."</td>";
            // $rows .= "</tr>";

            // $rows .= "<tr>";
            // $rows .= "<th>Banking Details</td>";
            // $rows .= "<td>".$res->data[$i]->bnk_details."</td>";
            // $rows .= "</tr>";

            // $rows .= "<tr>";
            // $rows .= "<th>Date Of Birth</td>";
            // $rows .= "<td>".$res->data[$i]->dob."</td>";
            // $rows .= "</tr>";

            // $rows .= "<tr>";
            // $rows .= "<th>Address</td>";
            // $rows .= "<td>".$res->data[$i]->address."</td>";
            // $rows .= "</tr>";

            // $rows .= "<tr>";
            // $rows .= "<th>Membership Info</td>";
            // $rows .= "<td>".$res->data[$i]->membership."</td>";
            // $rows .= "</tr>";

            // $rows .= "<tr>";
            // $rows .= "<th>Dividends</td>";
            // $rows .= "<td>".$res->data[$i]->dividends."</td>";
            // $rows .= "</tr>";

            // $rows .= "<tr>";
            // $rows .= "<th>Other Benefits</td>";
            // $rows .= "<td>".$res->data[$i]->benefits."</td>";
            // $rows .= "</tr>";

            // $rows .= "<tr>";
            // $rows .= "<th>Declaration</td>";
            // $rows .= "<td>".$res->data[$i]->declaration."</td>";
            // $rows .= "</tr>";

            // $rows .= "<tr>";
            // $rows .= "<th>Acceptance</td>";
            // $rows .= "<td>".$res->data[$i]->acceptance."</td>";
            // $rows .= "</tr>";
        }
        // echo $rows;
    } else {
        echo "No Data";
    }


?>
