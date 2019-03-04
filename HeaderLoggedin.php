
<?php

include_once('login.php');
$username=$_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/homeStyle.css">
</head>
<body>


<header class="control">

    <section >

            <h4>Welcome <?php echo $username ?></h4>
            <nav class="grid-container">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Games</a></li>
                    <li><a href="profile.php">My Profile</a></li>
                    <li><a href="#">Events</a></li>

                </ul>
            </nav>


    </section>

    <section class="right">
        <form id = "logout"  method="post" action="logout.php">
            <button type="submit" value="Logout" name="logOutButton" class="btn"> Log out <br>
        </form>
    </section>
</header>







</body>
</html>