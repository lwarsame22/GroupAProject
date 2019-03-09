
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/unsemantic-grid-responsive-tablet.css">
</head>

<?php
require "Header.php";
?>


<!-- Main Starts -->

<main class="content-control">
 <img id="Sportbanner" src="images/sports.jpg" alt="Sports Home">
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
                <div class="userRegister">
                    <h2>Sign Up</h2>
                    <h2>Cost-Free! Anyone can join</h2><br><br>
                    <label for="username">User Name:</label>
                    <Input type="text" placeholder="Enter username" name="username" required><br>
                    <label for="email">Email:</label>
                    <Input type="text" placeholder="Enter email" name="email" required><br>
                    <label for="password">Pass/word:</label>
                    <input type="password" placeholder="Enter Password" name="password" required><br>

                    <div id="submit">
                    <button type="submit" value="Register" name="registerButton">Register</button>
                </div>
              </div>
            </form>

    </section>


</main>
<!-- Main Ends -->
<h3>Sport Playmate helps you connect and share with the network of sports lovers in your community</h3>

<!-- Footer Starts -->
<?php
require "Footer.php";
?>
<!-- Footer Ends -->

</body>
</html>
