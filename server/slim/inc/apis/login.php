<?php

include '../functions.php';
$func = new Functions();

if (isset($_POST["login"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = md5('$password')";

    $res = $func->executeQuery($sql);

    if ($res) {
        print_r($res);
    } else {
        echo "user not found";
    }

} else if (isset($_POST['register'])) {
    header("location:../../../../pages/register.php");
}
