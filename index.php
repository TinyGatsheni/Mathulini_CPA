<?php
include('components/header.php')
?>

<div class="overlay"></div>
<div class="container">
    <div class="header">
        Mathulini CPA
    </div>
    <div class="form-wraaper_login">
        <center>
            <h3>Admin</h3>
        </center>
        <form action="server/slim/inc/apis/login.php" method="post" id="login">
            <!-- <label for="username">username</label> -->
            <input name="username" type="text" class="form-control" placeholder="username" />
            <!-- <label for="username">username</label> -->
            <input name="password" type="password" class="form-control" placeholder="password" />
            <div class="btn-wrapper">
                <input type="submit" name="login" class="btn_login" value="Login" />
                <!-- <input type="submit" name="register" class="btn btn-default" value="Register" /> -->
            </div>
        </form>
    </div>
</div>

<?php
include('components/header.php')
?>