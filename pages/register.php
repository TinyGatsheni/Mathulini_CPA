<?php
    include ('../components/header.php')
?>
<div class="overlay"></div>
    <div class="container">
        <div class="header" style="margin-top:40px">
            Mathulini CPA
        </div>
        <div class="form-wraaper" style="height: 440px;">
            <form action="../server/slim/inc/apis/register.php" method="post" id="register">
                <input name="fname" type="text" class="form-control" placeholder="First Name" />
                <input name="lname" type="text" class="form-control" placeholder="Last Name" />
                <input name="username" type="text" class="form-control" placeholder="Username" />
                <input name="id_number" type="text" class="form-control" placeholder="identity document number" />
                <select class="form-control" name="gender_id" id="gender_id">
                    <option value="">-- Select Gender --</option>
                    <?php include '../server/slim/inc/apis/getGender.php';  ?>
                </select>
                <input name="password" type="password" class="form-control" placeholder="Password" />
                <input name="confirmPassword" type="password" class="form-control" placeholder="Confirm Password" />
                <div class="btn-wrapper">
                    <input type="submit" name="register" class="btn btn-default" value="Register" />
                    <input type="submit" name="login" class="btn btn-primary" value="Login" />
                </div>
            </form>
        </div>
    </div>
 <?php
    include ('../components/footer.php')
?>