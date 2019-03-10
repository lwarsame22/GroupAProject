
<?php

include_once('login.php');
$username=$_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/style.css">
</head>
    //class="control"
<body>
 <header >
     <h1>Playmate</h1>
    <section id="menu">
            <nav class="grid-container">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="viewProfile.php">Profile</a>
                        <ul>
                            <li><a href="viewProfile.php">View Profile</a></li>
                            <li><a href="profile.php">Edit Profile</a></li>
                        </ul>
                    </li>
                    <li><a href="event.php">Events</a>
                        <ul>
                            <li><a href="event.php">My events</a></li>
                            <li><a href="event.php">Create an event</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Contact Us</a>
                        <ul>
                            <li><a href="#">The Team</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
    </section>
   <!-- Main Section Begins -->
     <section class="echo"> <!-- This class name will enable the styling of output after logging in -->
         <h4>Welcome <?php echo $username ?></h4>
     </section>
     <img src="images/football.jpg">
     
    <section class="right">
        <form id = "logout"  method="post" action="logout.php">
            <button type="submit" value="Logout" name="logOutButton" class="btn"> Log out <br>
        </form>
    </section>
</header>
<!-- Header Ends -->

</body>
</html>
