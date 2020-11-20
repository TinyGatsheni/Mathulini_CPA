<?php

include '../functions.php';
$func = new Functions();

if (isset($_POST["register"])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $c_password = $_POST['confirmPassword'];

    if ($password == $c_password) {
        $sql = "INSERT INTO users VALUES('','$fname','$lname','$username',md5('$password'),'1')";

        $res = $func->executeNonQuery($sql);

        if ($res) {
            echo "Insert successfully";
        } else {
            echo "Error";
        }
    }else{
        echo "passwords dont match";
    }

} else if (isset($_POST['login'])) {
    header("location:../../../../index.php");
}
