
<?php

include_once('login.php');
$username=$_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/pstyle.css">
    <style>
        body{
            background: black;
        }

        .menu-area {
            color: #ffffff;
            line-height: 30px;
            padding: 10px 15px;
            text-decoration: none;
            text-transform: uppercase;
            font-weight: bold;
        }
        h4{
            color: turquoise;
        }
        h1{
            color: white;
            font-weight: bold;
        }

    </style>
</head>
    <!--class="control" -->
<body>
 <header >
     <h1>Playmate</h1>
    <section >
            <nav class="grid-container">
                <ul>
                <li><a class="active" href="HomePage.php">Home</a> </li>

                    <div class="dropdown">

                <li><a class="dropbtn">Profile</a>
                    <ul>
                        <div class="dropdown-content">
                        <li><a href="viewProfile.php">View Profile</a></li>
                        <li><a href="profile.php">Edit Profile</a></li>
                        </div>
                    </ul>
                </li>
                    </div>


                    <li><a class="active" href="event.php">Event</a>
                    <ul>
                        <li><a href="event2.php">My events</a></li>
                        <li><a href="event.php">Create an event</a></li>
                    </ul>
                     </li>
                <li><a class="active" href="event2.php">Create an event</a> </li>


                    <!--

                             <div class="dropdown">
  <button class="dropbtn">Dropdown</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>

<section class="menu-area">


                            -->
                        </ul>
                    </li>

                </ul>
            </nav>
    </section>
   <!-- Main Section Begins -->
     <section class="echo"> <!-- This class name will enable the styling of output after logging in -->
         <h4>Welcome <?php echo $username ?></h4>
     </section>
     <img src="images/updateprofile.jpg">
     
    <section class="right">
        <form id = "logout"  method="post" action="logout.php">
            <button type="submit" value="Logout" name="logOutButton" class="btn"> Log out <br>
        </form>
    </section>
</header>
<!-- Header Ends -->

</body>
</html>
