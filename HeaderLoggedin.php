
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
    
<body>
 <header class="control">
     <h1>Sport Playmate</h1>
    <section >
            <nav class="grid-container">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Games</a></li>
                    <li><a href="profile.php">My Profile</a></li>
                    <li><a href="event.php">Events</a></li>
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
