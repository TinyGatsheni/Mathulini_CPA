<?php

include '../functions.php';
$func = new Functions();

if (isset($_POST["register"])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $c_password = $_POST['confirmPassword'];
    $gender_id = $_POST['gender_id'];
    $id_number = $_POST['id_number'];

    if ($password == $c_password) {
        $sql = "INSERT INTO `users` 
                        (`user_id`,
                         `firstname`,
                         `lastname`,
                         `username`,
                         `password`,
                         `id_number`,
                         `bnk_details`,
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
                         `gender_id`) 
                         VALUES (
                            NULL,
                          '$fname',
                          '$lname',
                          '$username',
                           MD5('$password'),
                          '$id_number',
                          '$bnk_details',
                          '$dob',
                          '$address',
                          '$membership',
                          '$dividends',
                          '$benefits',
                          '$ddeclaration',
                          '$acceptance',
                          '1',
                          '1',
                          '000-000-0000',
                          '$gender_id');";

        $res = $func->executeNonQuery($sql);

        if ($res) {
            echo "Insert successfully";
            header("location:../../../../index.php");
        } else {
            header("location:../../../../pages/404.php");
        }
    }else{
        echo "passwords dont match";
    }

} else if (isset($_POST['login'])) {
    header("location:../../../../index.php");
}
