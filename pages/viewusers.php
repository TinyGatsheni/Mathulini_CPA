<?php
include '../components/header.php';
include '../components/sub_header.php';
?>

            <div class="content">
                <div class="fix">
                    <h4>Beneficiaries</h4>
                </div>
                
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Contact</th>
                            <th>Membership No</th>
                            <th>Gender</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include '../server/slim/inc/apis/getUsers.php';  ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 <?php include '../components/footer.php'; ?>