<?php 
define ('TITLE', 'Change Password');
define ('PAGE', 'ChangePassword');
include('includes/header.php');
include('../db_connect.php');

session_start();

if($_SESSION['is_login']) {
    $rEmail = $_SESSION['rEmail'];
} else {
    echo "<script> location.href='requester_login.php'</script>";
}
$rEmail = $_SESSION['rEmail'];
if(isset($_REQUEST['passupdate'])) {
    if($_REQUEST['rPassword'] == "") {
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
    } else {
        $rPass = $_REQUEST['rPassword'];
        $sql = "UPDATE requesterlogin SET r_password = '$rPass' WHERE r_email = '$rEmail' ";
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
            <input class="form-control" type="email" id="inputEmail" value="<?php echo $rEmail ?>" readonly>
        </div>
        <div class="form-group">
            <label for="inputnewpassword">New Password</label>
            <input class="form-control" type="password" name="rPassword" id="inputnewpassword" placeholder="New Password">
        </div>
        <button type="submit" class="btn btn-dark mr-4 mt-4" name="passupdate">Update</button>
        <button type="reset" class="btn btn-secondary mt-4">Reset</button>
        <?php if(isset($passmsg)) { echo $passmsg; } ?>
    </form>
</div>


<?php 
include('includes/footer.php');
?>