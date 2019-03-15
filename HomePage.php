
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/pstyle.css">
    <link rel="stylesheet" href="css/unsemantic-grid-responsive-tablet.css">
    <style>
        body{
            background-size: cover;
            background-repeat: no-repeat;
            background-image: url("images/sports.jpg");
            background-color: black;
            background-attachment: scroll;
        }
        header{
            background: #000;
            height: 100px;
        }
        .userRegister h2{
            color: white;
        }

        p{
            width: 450px;
            color: white;
        }

        .form{
            float: left;
            position: relative;
            right: 1000px;
            top: -100px;
            background-color: turquoise;
        }


    </style>
</head>

<?php
require "Header.php";
?>


<!-- Main Starts -->

<main class="content-control">
 <!--<img id="Sportbanner" src="images/sports.jpg" alt="Sports Home">-->
    <section class="boxregister">
<!--Section 1 DESCRIPTION-->
    <section id="AppDescription" class="grid-100">
       <h2> Making it easier to find people around you to organize and play your sport </h2>
        <p> QUICK PLAYs
            Smart way to find members willing to play a sport and arrange activities with each other
            TEAM MANAGEMENT
            Join one or more teams and schedule your matches in order to no overlap. Feed you app with the amount of minutes you played in the match or if you score some points
            EVENTS AND COMPETITIONS
            Create a quick event of event run for a competition, leagues or tournaments.
            Organize one-off or recurring activities, event or training sessions
            Accept new entries
        </p> </section><br><br>
    </section>
            <form id="register" method="post" action="register.php" >

<section  class="grid-60">
    <div class="form">
                <div class="userRegister">
                    <h2>Sign Up</h2>
                    <h2>Cost-Free! Anyone can join</h2><br><br>
                    <label for="username">User Name:</label>
                    <Input type="text" placeholder="Enter username" name="username" class="inputbox" required><br>
                    <label for="email">Email:</label>
                    <Input type="email" placeholder="Enter email" name="email" class="inputbox" required><br>
                    <label for="password">Password:</label>
                    <input type="password" placeholder="Enter Password" name="password" class="inputbox" required><br>

                    <div id="submit">
                    <button type="submit" value="Register" name="registerButton" class="btn">Register</button>
                </div>
                        <h3>Health Is Wealth!</h3>
              </div>
            </form>

    </section>


</main>
<!-- Main Ends -->

</body>
</html>
