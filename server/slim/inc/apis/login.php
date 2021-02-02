<?php

include '../functions.php';
$func = new Functions();

if (isset($_POST["login"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = md5('$password') and role_id = 1";

    $res = $func->executeQuery($sql);

    if ($res) {
        $_SEESION['user'] = $res;
        header("location:../../../../pages/viewusers.php");
    } else {
        echo "user not found";
        $_SESSION['user_not_found'] = true;
    }

}
?>
