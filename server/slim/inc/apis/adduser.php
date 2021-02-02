<?php

include '../functions.php';
$func = new Functions();

if (isset($_POST["register"])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $role_id = ((isset($_POST['role']))? $_POST['role'] : 2);
    $id_number = $_POST['id_number'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $bnk_name = $_POST['bnk_name'];
    $bnk_acc_no = $_POST['bnk_acc_no'];
    $bnk_acc_type = $_POST['bnk_acc_type'];
    $bnk_branch_code = $_POST['bnk_branch_code'];
    $membership = "";
    $benefits  = "";
    $declaration = "";
    $acceptance = "";
    $dob = $_POST['dob'];
    $gender_id  = $_POST['gender_id'];
    $username = time();
    $password = "1111";
    $date = date("Y-m-d");

    if (isset($fname) && isset($lname) && isset($role_id)) {
        $sql = "INSERT INTO `users` 
                        (`user_id`,
                         `firstname`,
                         `lastname`,
                         `username`,
                         `password`,
                         `id_number`,
                         `bnk_name`,
                         `bnk_acc_no`,
                         `bnk_acc_type`,
                         `bnk_branch_code`,
                         `dob`,
                         `address`,
                         `membership`,
                         `dividends`,
                         `benefits`,
                         `declaration`,
                         `acceptance`,
                         `role_id`,
                         `status_active`,
                         `contact`,
                         `gender_id`,
                         `user_reg_date`) 
                         VALUES (
                            NULL,
                          '$fname',
                          '$lname',
                          '$username',
                           MD5('$password'),
                          '$id_number',
                          '$bnk_name',
                          '$bnk_acc_no',
                          '$bnk_acc_type',
                          '$bnk_branch_code',
                          '$dob',
                          '$address',
                          '$membership',
                          '20 000',
                          '$benefits',
                          '$declaration',
                          '$acceptance',
                          '$role_id',
                          '1',
                          '$contact',
                          '$gender_id',
                          '$date');";
        // echo $sql."<br/>";
        $res = $func->executeNonQuery($sql);

        if ($res) {
            header("location:../../../../pages/addusers.php");
        } else {
            echo "Error";
        }
    }else{
        echo "all fields required";
    }

} else if (isset($_POST['login'])) {
    header("location:../../../../index.php");
}
