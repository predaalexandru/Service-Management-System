<?php
include('../db_connect.php');
session_start();

if($_SESSION['is_login']) {
    $rEmail = $_SESSION['rEmail'];
} else {
    echo "<script> location.href='requester_login.php'</script>";
}

$sql = "SELECT r_name, r_email FROM requesterlogin WHERE r_email ='$rEmail'";
$result = $conn->query($sql);
 if($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $rName = $row['r_name'];
 }
 if(isset($_REQUEST['nameupdate'])) {
    if($_REQUEST['rName'] == "") {
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields</div>';
    } else {
        $rName = $_REQUEST['rName'];
        $sql = "UPDATE requesterlogin SET r_name = '$rName' WHERE r_email = '$rEmail'";
        if($conn->query($sql) == TRUE) {
            $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully</div>';
        } else {
            $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Update</div>';
        }
    }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../css/all.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <title>Profile</title>
</head>
<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="requester_profile.php">Termo Dinamic</a>
    </nav>

    <!-- Start Container -->
    <div class="container-fluid" style="margin-top: 40px;">
        <div class="row"> <!-- Start Row -->
            <nav class="col-sm-2 bg-light sidebar py-5"> <!-- Sidebar -->
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="requester_profile.php"><i class="fas fa-user"></i> Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fab fa-accessible-icon"></i> Submit Request</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-align center"></i> Service Status</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-key"></i> Change Password</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </nav> <!-- /Sidebar -->
            <div class="col-sm-6 mt-5"> <!-- Profile Area -->
                <form action="" method="POST" class="mx-5">
                    <div class="form-group">
                        <label for="rEmail">Email</label>
                        <input class="form-control" type="email" name="rEmail" id="rEmail" value="<?php echo $rEmail ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="rName">Name</label>
                        <input class="form-control" type="text" name="rName" id="rName" value="<?php echo $rName ?>">
                    </div>
                    <button type="submit" class="btn btn-dark" name="nameupdate">Update</button>
                    <?php if(isset($passmsg)) { echo $passmsg; } ?>
                </form>
            </div> <!-- /Profile Area -->
        </div> <!-- End Row -->
    </div> <!-- End Container -->
    
     <!-- Jquery -->
     <script src="../js/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="../js/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Font Awesome JS -->
    <script src="../js/all.js"></script>

</body>
</html>