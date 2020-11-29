<?php
define ('TITLE', 'Change Password');
define ('PAGE', 'ChangePass');
include('../db_connect.php');
include('includes/header.php');

session_start();

if($_SESSION['is_adminlogin']) {
    $aEmail = $_SESSION['aEmail'];
} else {
    echo "<script> location.href='requester_login.php'</script>";
}
$aEmail = $_SESSION['aEmail'];
if(isset($_REQUEST['passupdate'])) {
    if($_REQUEST['aPassword'] == "") {
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
    } else {
        $aPass = $_REQUEST['aPassword'];
        $sql = "UPDATE adminlogin SET a_password = '$aPass' WHERE a_email = '$aEmail' ";
        if($conn->query($sql) == TRUE) {
            $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Updated Successfully</div>';
        } else {
            $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Update</div>';
        }
    }
}
?>
<div class="col-sm-9 col-md-10">
    <form class="mt-5 mx-5" action="" method="POST">
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input class="form-control" type="email" id="inputEmail" value="<?php echo $aEmail ?>" readonly>
        </div>
        <div class="form-group">
            <label for="inputnewpassword">New Password</label>
            <input class="form-control" type="password" name="aPassword" id="inputnewpassword" placeholder="New Password">
        </div>
        <button type="submit" class="btn btn-dark mr-4 mt-4" name="passupdate">Update</button>
        <button type="reset" class="btn btn-secondary mt-4">Reset</button>
        <?php if(isset($passmsg)) { echo $passmsg; } ?>
    </form>
</div>


<?php 
include('includes/footer.php');
?>