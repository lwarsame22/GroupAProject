
<?php
session_start();
include_once('DBConnect.php');
if(isset($_SESSION['username'])) {
    $username=$_SESSION['username'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User</title>

    <!--  core CSS -->
    <link href="startbootstrap-sb-admin-gh-pages/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">
    <!--   <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/unsemantic-grid-responsive-tablet.css">


    <style>
         .wrap{
     width: 800px;
     height: 400px;
     margin-left: auto;
     margin-right:auto;
     background: white;
     padding: 20px 50px;
 }
     </style>
 -->
</head>

<body id="page-top">

<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <section class="echo"> <!-- This class name will enable the styling of output after logging in -->
                <h4>Welcome <?php echo $username; ?></h4>
            </section></a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">

            <div class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="user.php">Home</a>
                    <div class="dropdown-content">
                        <a href="#"></a><br>
                        <a href="#"> </a><br>
                        <a href="#"></a><br>
                    </div>
                </li>
            </div>

            <div class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="viewProfile.php">Profile</a>
                    <div class="dropdown-content">
                        <a href="profile.php">Edit Profile</a><br>
                        <a href="Skills.php">Edit Skills</a><br>
                        <a href="#"></a><br>
                    </div>
                </li>
            </div>


            <div class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="Inbox.php">Messages</a>
                    <div class="dropdown-content">
                        <a href="Inbox.php">My Inbox</a><br>
                        <a href="outbox.php">My Outbox</a><br>
                        <a href="#"></a><br>
                    </div>
                </li>
            </div>

            <div class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="event.php">Event</a>
                    <div class="dropdown-content">
                        <a href="viewallEvents.php">All Events</a><br>
                        <a href="viewMyEvents.php">My Events </a><br>
                        <a href="event.php">Create Event</a><br>
                        <a href="review.php">Review Event</a><br>
                    </div>
                </li>
            </div>
            <div class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="searchBySport.php">Search</a>
                    <div class="dropdown-content">
                        <a href="searchForUser.php">By user</a><br>
                        <a href="searchByLocation.php">By location</a><br>
                        <a href="searchBySport.php">By sport</a><br>
                    </div>
                </li>
            </div>


            <section class="right">
                <form id = "logout"  method="post" action="logout.php">
                    <button type="submit" value="Logout" name="logOutButton" class="btn-primary"> Log out <br>
                </form>
            </section>
        </div>

      </div>
</nav>

<!--This PHP IF logic is using a choosing a different header depending if the user is logged in or not -->
<!-- Header content-control -->
<header class="masthead">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            <h1 class="mx-auto my-0 text-uppercase">Welcome</h1>
            <<br>
            <section  class="grid-60 boxregister">
                <div class="wrap">


            </section>

        </div>



    </div>
</header>





<!-- User page available sports -->
<section id="available-sports">
    <div class="available-sports">
        <h2 align="center">Some Available Sports</h2><br><br>
        <div class="fourcolumn">
            <table>
                <tr>
                    <td><img src="images/s.cricket.jpg" align="left"></td>
                    <td><img src="images/americanball01s.jpg"></td>
                    <td><img src="images/sbasketball.jpg"></td>
                </tr>
                <td><h3>Cricket</h3>
                    <p>Cricket is a bat-and-ball game played between two teams of eleven players on a field at the centre of which is a 20-metre (22-yard) pitch with a wicket at each end, each comprising two bails balanced on three stumps. The batting side scores runs by striking the ball bowled at the wicket with the bat, while the bowling and fielding side tries to prevent this and dismiss each player (so they are "out").
                    </p><a href="event.php" style="color: white;text-decoration: none">--Create An Event--</a> </td>
                <td><h3>American Football</h3>
                    <p>American football, referred to as football in the United States and Canada and also known as gridiron,[nb 1] is a team sport played by two teams of eleven players on a rectangular field with goalposts at each end. The offense, which is the team controlling the oval-shaped football, attempts to advance down the field by running with or passing the ball, while the defense, which is the team without control of the ball, aims to stop the offense's advance and aims to take control of the ball for themselves.</p>
                    <a href="event.php" style="color: white;text-decoration: none">--Create An Event--</a></td>
                <td><h3>Basketball</h3>
                    <p>Basketball is a team sport in which two teams, most commonly of five players each, opposing one another on a rectangular court, compete with the primary objective of shooting a basketball (approximately 9.4 inches (24 cm) in diameter) through the defender's hoop (a basket 18 inches (46 cm) in diameter mounted 10 feet (3.048 m) high to a backboard at each end of the court) while preventing the opposing team from shooting through their own hoop.</p><a href="event.php" style="color: white;text-decoration: none">--Create An Event--</a>
                </td>
                <tr>

                </tr>
            </table>

    </div>
    </div>

    </section>

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
 <!-- Footer Ends -->



<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/grayscale.min.js"></script>

</body>
</html>
