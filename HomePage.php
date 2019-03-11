
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
        
        .userRegister h2{
            color: white;
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
                    <label for="password">Pass/word:</label>
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


<!-- Footer Starts -->
<footer class="footer-control">
    <h3>Sport Playmate helps you connect and share with the network of sports lovers in your community</h3>

    <h4>Connect and share with a network of sports lovers in your community</h4>
    <!--  <span>
          <li><a><i class="fab fa-facebook-square"></i></a></li>
          <l><a href="http://www.facebook.com"><img src="facebooklogo.png" alt="Facebook"</a></l>
          <li><a href="http://www.twitter.com"><img src="twitterlogo.png" alt="twitter"</a></li>
          <li><a href="http://www.linkedin.com"><img src="linkedinlogo.png" alt="linkedin"</a></li>
          <li><a href="http://www.googleplus.com"><img src="googlepluslogo.png" alt="Google+"</a></li>
          <li><a href="http://www.youtube.com"><img src="youtubelogo.png" alt="YouTube"</a></li>
      </span>-->
    <h4>Copyright &copy; 2019. Software Project Engineering (CMM004)</h4>
    <p>All Rights Reserved</p>
    <small> Developed and Maintain by <a href="#">Group A Team</a></small>
</footer>
<!-- Footer Ends -->

</body>
</html>
