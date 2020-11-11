!DOCTYPE html>
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

    <title><?php echo TITLE ?></title>
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
                            <a class="nav-link <?php if(PAGE == 'RequesterProfile') { echo 'active';} ?>" href="requester_profile.php"><i class="fas fa-user"></i> Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(PAGE == 'SubmitRequest') { echo 'active';} ?>" href="submit_request.php"><i class="fab fa-accessible-icon"></i> Submit Request</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(PAGE == 'CheckStatus') { echo 'active';} ?>" href="check_status.php"><i class="fas fa-align-center"></i> Service Status</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(PAGE == 'ChangePassword') { echo 'active';} ?>" href="change_password.php"><i class="fas fa-key"></i> Change Password</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </nav> <!-- /Sidebar -->