
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User</title>

    <!--  core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/unsemantic-grid-responsive-tablet.css">


  <!--  <style>
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
<body>

<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">PLAYMATE</a>
        <section class="echo"> <!-- This class name will enable the styling of output after logging in -->
            <h4>Welcome <?php echo $username; ?></h4>
        </section>
        <div class = "navbar">


            <div class="dropdown">
                <a href="user.php">Home</a>
                <i class="fa fa-caret-down"></i>
            </div>

            <div class="dropdown">
                <button class="dropbtn">
                    <a href="viewProfile.php">Profile</a>
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="viewProfile.php">View</a>
                    <a href="profile.php">Edit Profile</a>
                    <a href="Skills.php">Edit Skills</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">
                    <a href="#">Messages</a>
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="Inbox.php">View My Inbox</a>
                    <a href="outbox.php">My Outbox</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">
                    <a href="event.php">Event</a>
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="viewallEvents.php">View All Events</a>
                    <a href="viewMyEvents.php">View My Events </a>
                    <a href="event.php">Create Event</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">
                    <a href="searchBySport.php">Search</a>
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="searchForUser.php">Search by user</a>
                    <a href="searchByLocation.php">Search by location</a>
                    <a href="searchBySport.php">Search by sport</a>
                </div>
            </div>



            <section class="right">
                <form id = "logout"  method="post" action="logout.php">
                    <button type="submit" value="Logout" name="logOutButton" class="btn"> Log out <br>
                </form>
            </section>
        </div>
           </div>
</nav>

<!--This PHP IF logic is using a choosing a different header depending if the user is logged in or not -->



<main>
   <div class="wrap">
    <div class="image-slider">
        <figure>
            <img src="Images/americanfootball3.png" style="width: 800px"; height="400">
            <img src="Images/basketball3.png" style="width: 800px"; height="400px" alt="">
            <img src="Images/cricket3.png" style="width: 800px"; height="400px">
            <img src="Images/cycling3.png" style="width: 800px"; height="400px">
            <img src="Images/footballinnet3.png" style="width: 800px"; height="400px">
            <img src="Images/hockey3.png" style="width: 800px"; height="400px">
            <img src="Images/racing3.png" style="width: 800px"; height="400px">
            <img src="Images/Tennis3.png" style="width: 800px"; height="400px">
            <img src="Images/wheelchairrugby3.png" style="width: 800px"; height="400px">

        </figure>
    </div>
</div>

</div>

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
           <!-- <div><img src="images/s.cricket.jpg" align="left">
            <h3>Cricket</h3>
            <p>Cricket is a bat-and-ball game played between two teams of eleven players on a field at the centre of which is a 20-metre (22-yard) pitch with a wicket at each end, each comprising two bails balanced on three stumps. The batting side scores runs by striking the ball bowled at the wicket with the bat, while the bowling and fielding side tries to prevent this and dismiss each player (so they are "out").
            </p><a href="event.php">--Create An Event--</a> </div><br><br>

        <div><img src="images/americanball01s.jpg"><br><br>
            <h3>American Football</h3>
            <p>American football, referred to as football in the United States and Canada and also known as gridiron,[nb 1] is a team sport played by two teams of eleven players on a rectangular field with goalposts at each end. The offense, which is the team controlling the oval-shaped football, attempts to advance down the field by running with or passing the ball, while the defense, which is the team without control of the ball, aims to stop the offense's advance and aims to take control of the ball for themselves.</p>
            <a href="event.php">--Create An Event--</a> </div><br><br>

        <div>
            <img src="images/sbasketball.jpg">
            <h3>Basketball</h3>
            <p>Basketball is a team sport in which two teams, most commonly of five players each, opposing one another on a rectangular court, compete with the primary objective of shooting a basketball (approximately 9.4 inches (24 cm) in diameter) through the defender's hoop (a basket 18 inches (46 cm) in diameter mounted 10 feet (3.048 m) high to a backboard at each end of the court) while preventing the opposing team from shooting through their own hoop.</p><a href="event.php">--Create An Event--</a>
        </div>

        <div>
            <img src="images/sfootball_net.jpg">
            <h3>Football</h3>
            <p>Association football, more commonly known as football or soccer,[a] is a team sport played with a spherical ball between two teams of eleven players. It is played by 250 million players in over 200 countries and dependencies, making it the world's most popular sport.</p><a href="event.php">--Create An Event--</a>
        </div>-->
    </div>
    </div>

    </section>





</main>
    <!-- End of Main -->

<!-- Footer -->


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
