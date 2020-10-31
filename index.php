<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/all.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

    <title>TERMO DINAMIC</title>
</head>

<body>
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 fixed-top">
        <a href="index.php" class="navbar-brand">Termo Dinamic</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myMenu">
            <ul class="navbar-nav pl-5 custom-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Registration">Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navigation -->

    <!-- Start Header Jumbotron -->
    <header class="jumbotron back-image" style="background-image: url(img/banner2.jpg);">
        <div class="mainHeading">
            <h1 class="text-uppercase text-danger font-weight-bold">Welcome to TERMO DINAMIC</h1>
            <p class="font-italic">High Quality Works</p>
            <a href="#" class="btn btn-success mr-4">Login</a>
            <a href="#" class="btn btn-danger mr-4">Sign Up</a>
        </div>
    </header>
    <!-- End Header Jumbotron -->

    <!-- Start Introduction Jumbotron -->
    <div class="container">
        <div class="jumbotron">
            <h3 class="text-center text-uppercase">Termo Dinamic Services</h3>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,aspera ad astra.</p>
        </div>
    </div>
    <!-- End Introduction Jumbotron -->

    <!-- Start Service Section -->
    <div class="container text-center border-bottom">
        <h2>Our Services</h2>
        <div class="row mt-4">
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
                <h4 class="mt-4">Electronic Appliances</h4>
            </div>
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
                <h4 class="mt-4">Preventive Maintenance</h4>
            </div>
            <div class="col-sm-4 mb-4">
                <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
                <h4 class="mt-4">Fault Repair</h4>
            </div>
        </div>
    </div>
    <!-- End Service Section -->

    <!-- Start Registration Section -->
    <div class="container pt-5">
        <h2 class="text-center">Create an Account</h2>
        <div class="row mt-4 mb-4">
            <div class="col-md-6 offset-md-3">
                <form action="" class="shadow-lg p-4" method="POST">
                    <div class="form-group">
                        <i class="fas fa-user"></i> <label for="name" class="font-weight-bold pl-2">Name</label>
                        <input type="text" class="form-control" placeholder="Name" name="rName">
                    </div>
                    <div class="form-group">
                    <i class="fas fa-envelope"></i> <label for="email" class="font-weight-bold pl-2">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="rEmail">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i> <label for="pass" class="font-weight-bold pl-2">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="rPassword">
                    </div>
                    <button type="submit" class="btn btn-dark mt-5 btn-block shadow-sm font-weight-bold" name="rSignup">Sign Up</button>
                    <em style="font-size: 10px;">Note - By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy</em>
                </form>
            </div>
        </div>
    </div>
    <!-- End Registration Section -->

    <!-- Start Review Section -->
    <div class="jumbotron bg-dark">
        <div class="container">
            <h2 class="text-center text-white">Customers Review</h2>
            <div class="row mt-5">
                 <div class="col-lg-3 col-sm-6"> <!-- Start 1st column -->
                    <div class="card text-center shadow-lg mb-2">
                        <div class="card-body">
                            <i class="fas fa-user fa-8x" style="border-radius: 100px;"></i>
                            <!-- <img src="https://via.placeholder.com/150" alt="avt1" class="img-fluid" style="border-radius: 100px;"> -->
                            <h4 class="card-title" style="margin-top: 10px;">John Doe</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                        </div>
                    </div>
                </div> <!-- End 1st column -->
                <div class="col-lg-3 col-sm-6"> <!-- Start 2st column -->
                    <div class="card text-center shadow-lg mb-2">
                        <div class="card-body">
                            <i class="fas fa-user fa-8x" style="border-radius: 100px;"></i>
                            <!-- <img src="https://via.placeholder.com/150" alt="avt2" class="img-fluid" style="border-radius: 100px;"> -->
                            <h4 class="card-title" style="margin-top: 10px;">John Doe</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                        </div>
                    </div>
                </div> <!-- End 2st column -->
                <div class="col-lg-3 col-sm-6"> <!-- Start 3st column -->
                    <div class="card text-center shadow-lg mb-2">
                        <div class="card-body">
                            <i class="fas fa-user fa-8x" style="border-radius: 100px;"></i>
                            <!-- <img src="https://via.placeholder.com/150" alt="avt3" class="img-fluid" style="border-radius: 100px;"> -->
                            <h4 class="card-title" style="margin-top: 10px;">John Doe</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                        </div>
                    </div>
                </div> <!-- End 3st column -->
                <div class="col-lg-3 col-sm-6"> <!-- Start 4st column -->
                    <div class="card text-center shadow-lg mb-2">
                        <div class="card-body">
                            <i class="fas fa-user fa-8x" style="border-radius: 100px;"></i>
                            <!-- <img src="https://via.placeholder.com/150" alt="avt4" class="img-fluid" style="border-radius: 100px;"> -->
                            <h4 class="card-title" style="margin-top: 10px;">John Doe</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                        </div>
                    </div>
                </div> <!-- End 4st column -->
            </div>
        </div>
    </div>
    <!-- End Review Section -->

    <!-- Jquery -->
    <script src="js/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="js/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Font Awesome JS -->
    <script src="js/all.js"></script>
</body>
</html>