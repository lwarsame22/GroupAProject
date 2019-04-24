

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

<!-- Header content-control -->
<header class="masthead ">
    <div class="container d-flex h-100 align-items-center">
        <div class=" signup-section mx-auto text-center">
            <h1 class="mx-auto my-0 text-uppercase">Events</h1>
            <br>
            <!-- Events fgI am creating  class="grid-container"-->



        </div>



    </div>
</header>

<section  class="grid-container2 ">
    <div class="grid-45">
        <h2> Events I have created </h2>
        <?php
        $query2="SELECT * FROM events WHERE events.e_username='$username'AND events.e_date>=CURDATE() ";
        $result=mysqli_query($conn, $query2);

        $events="";

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
                $e_ID = $row['e_ID'];
                $e_title = $row['e_title'];
                $location = $row['e_location'];
                $e_date = $row['e_date'];
                $events .="<a href='viewMyEventDetails.php?eid=".$e_ID."' class = 'cat_links'>".$e_title." -<br> <font size='-3', color='#778899'>".$location."-</font><font class='edate' >.$e_date</font></a>";
            echo $events;
        } else {
            echo "<p>You have not created an Event yet</p>";
        }
        ?>
    </div>

    <!-- Events I am creating  </section> <section >class="grid-container"-->

    <div  class="grid-45">
        <h2> Events I am attending </h2>
        <?php
        $query3="SELECT * 
            FROM join_event j, events e 
            WHERE j.j_username='$username' AND e.e_ID =j.j_event AND events.e_date>=CURDATE()";
        $result2=mysqli_query($conn, $query3);

        $attendingevents="";

        if(!mysqli_query($conn, $query3) || mysqli_num_rows(mysqli_query($conn, $query3))== 0){
            echo "<p>You are not attending any Event yet</p>";
        }else{
            $row2 = mysqli_fetch_assoc(mysqli_query($conn, $query3));
                $e_ID = $row2['e_ID'];
                $e_title = $row2['e_title'];
                $location = $row2['e_location'];
                $e_date = $row2['e_date'];
                $attendingevents .= "<a href='viewEventDetails.php?eid=" . $e_ID . "' class = 'cat_links'>" . $e_title . " -<br> <font size='-3', color='#778899'>" . $location . "-</font><font class='edate' >.$e_date</font></a>";


            echo $attendingevents;
        }



        ?>

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