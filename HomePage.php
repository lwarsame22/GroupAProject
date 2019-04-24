<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PlayMate</title>

    <!--  core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">

</head>


<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">PLAYMATE</a>

        <div class="collapse navbar-nav navbar-collapse  right" id="navbarResponsive">   <!-- <section class="right" aligns setion content to the right side of the header -->
            <form class=" ml-auto" id = "login"  method="post" action="login.php">


                <input type="text" placeholder="Username" name="username" class="inputtxt">
                <input type="password" placeholder="Password" name ="password" class="inputtxt">
                <button type="submit" value="Login" name="loginButton" class="btn">Login</button><br>
                <input type="checkbox"> <a> Keep me logged in </a>
                <a href="#">Forgotten Password</a>


            </form>
        </div>
    </div>
</nav>

<!-- Header content-control -->
<header class="masthead ">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            <h1 class="mx-auto my-0 text-uppercase">PlayMate</h1>
            <br>
            <section  class="grid-60 boxregister">
                <form id="register" method="post" action="register.php" >
                    <div class="form">
                        <div class="userRegister">
                            <h2 class="text-white-50 mx-auto mt-2 ">Sign Up</h2>
                            <h2 class="text-white-50 mx-auto  mb-5">Cost-Free! Anyone can join</h2><br>
                            <label class="text-white-50 mx-auto mt-2  for="username">User Name:</label>
                            <Input type="text" placeholder="Enter username" name="username" class="inputbox" required><br>
                            <label class="text-white-50 mx-auto mt-2 "  for="email">Email:</label>
                            <Input type="email" placeholder="Enter email" name="email" class="inputbox" required><br>
                            <label class="text-white-50 mx-auto mt-2 "  for="password">Password:</label>
                            <input type="password" placeholder="Enter Password" name="password" class="inputbox" required><br>

                            <div id="submit">
                                <button type="submit" value="Register" name="registerButton" class="btn-primary">Register</button>
                            </div>
                            <h1>Health Is Wealth!</h1>
                        </div>
                    </div>
                </form>

            </section>

        </div>



    </div>
</header>

<!-- About Section -->
<section id="about" class="about-section text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="text-white mb-4">This is for you, just give it a try</h2>
            </div>
        </div>
       </div>
</section>


<!-- Signup Section -->
<section id="signup" class="signup-section">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto text-center">

                <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                <h2 class="text-white mb-5">Subscribe to receive updates!</h2>

                <form class="form-inline d-flex">
                    <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address...">
                    <button type="submit" class="btn btn-primary mx-auto">Subscribe</button>
                </form>

            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section bg-black">
    <div class="container">

        <div class="row">

            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">UK</h4>
                        <hr class="my-4">
                        <div class="small text-black-50">RGU Aberdeen </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-envelope text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Email</h4>
                        <hr class="my-4">
                        <div class="small text-black-50">
                            <a href="#">playmate@rgu.ac.uk</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-mobile-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Phone</h4>
                        <hr class="my-4">
                        <div class="small text-black-50">902-8832</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="social d-flex justify-content-center">
            <a href="#" class="mx-2">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="mx-2">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="mx-2">
                <i class="fab fa-github"></i>
            </a>
        </div>

    </div>
</section>

<!-- Footer -->
<footer class="bg-black small text-center text-white-50">
    <div class="container">
        Copyright &copy; Group A for School Computing Science and Digital Media
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/grayscale.min.js"></script>

</body>

</html>
