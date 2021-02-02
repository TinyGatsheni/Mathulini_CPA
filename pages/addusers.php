<?php
include '../components/header.php';
include '../components/sub_header.php';
?>

            <div class="content">
                <h4>Add Beneficiaries</h4>
                <div class="form-wraaper">
                    <form action="../server/slim/inc/apis/adduser.php" method="post" id="register">
                        <h5>Personal Details</h5>
                        <input name="fname" type="text" class="form-control" placeholder="First Name" />
                        <input name="lname" type="text" class="form-control" placeholder="Last Name" />
                        <input name="id_number" type="text" class="form-control" placeholder="ID Number" />
                        <input name="dob" type="date" class="form-control" />
                        <select name="role" class="form-control">
                            <option value=""> Select Role</option>
                            <option value="1">Admin</option>
                            <option value="2">Beneficiary</option>
                        </select>
                        <select class="form-control" name="gender_id" id="gender_id">
                            <option value="">-- Select Gender --</option>
                            <?php include '../server/slim/inc/apis/getGender.php';?>
                        </select><br>
                        <h5>Contact Details</h5>
                        <input name="contact" type="text" class="form-control" placeholder="Phone Number" />
                        <input name="address" type="text" class="form-control" placeholder="Address" />
                        <br>
                        <h5>Bank Details</h5>
                        <input name="bnk_name" type="text" class="form-control" placeholder="Bank Name" />
                        <input name="bnk_acc_no" type="text" class="form-control" placeholder="Account Number" />
                        <input name="bnk_acc_type" type="text" class="form-control" placeholder="Account Type" />
                        <input name="bnk_branch_code" type="text" class="form-control" placeholder="Branch Code" />
                        <div class="btn-wrapper">
                            <input type="submit" name="register" class="btn btn-primary" value="Add User" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 <?php include '../components/footer.php';?>