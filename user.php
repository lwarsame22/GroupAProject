
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>user</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/unsemantic-grid-responsive-tablet.css">

</head>
<body>


<!--This PHP IF logic is using a choosing a different header depending if the user is logged in or not -->

<?php
session_start();
if ( isset($_SESSION['username'] )){
    $username=$_SESSION['username'];

    require "HeaderLoggedin.php";
}
else {
    require "Header.php";
}

?>
<main>
   <div class="wrap">
    <div class="image-slider">
        <figure>
            <img src="images/americanball1.jpg" style="width: 800px"; height="400">
            <img src="images/basket_ball.jpg" style="width: 800px"; height="400px" alt="">
            <img src="images/cricket.jpg" style="width: 800px"; height="400px">
            <img src="images/racing.jpg" style="width: 800px"; height="400px">
            <img src="images/basket_ball.jpg" style="width: 800px"; height="400px">
            <img src="images/Hockey.jpg" style="width: 800px"; height="400px">
            <img src="images/cycling.jpg" style="width: 800px"; height="400px">
            <img src="images/football_net.jpg" style="width: 800px"; height="400px">
            <img src="images/TennisMatch.jpg" style="width: 800px"; height="400px">

        </figure>
    </div>
</div>

</div>

<!-- User page available sports -->
<section id="available-sports">
    <div class="available-sports">
        <h2 align="center">Available Sports</h2><br><br>
        <div class="fourcolumn">
            <div><img src="images/s.cricket.jpg" align="left">
            <h3>Cricket</h3>
            <p>Cricket is a bat-and-ball game played between two teams of eleven players on a field at the centre of which is a 20-metre (22-yard) pitch with a wicket at each end, each comprising two bails balanced on three stumps. The batting side scores runs by striking the ball bowled at the wicket with the bat, while the bowling and fielding side tries to prevent this and dismiss each player (so they are "out").
            </p><a href="event-edit.html">--Create An Event--</a> </div><br><br>

        <div><img src="images/americanball01s.jpg"><br><br>
            <h3>American Football</h3>
            <p>American football, referred to as football in the United States and Canada and also known as gridiron,[nb 1] is a team sport played by two teams of eleven players on a rectangular field with goalposts at each end. The offense, which is the team controlling the oval-shaped football, attempts to advance down the field by running with or passing the ball, while the defense, which is the team without control of the ball, aims to stop the offense's advance and aims to take control of the ball for themselves.</p>
            <a href="event-edit.html">--Create An Event--</a> </div><br><br>

        <div>
            <img src="images/sbasketball.jpg">
            <h3>Basketball</h3>
            <p>Basketball is a team sport in which two teams, most commonly of five players each, opposing one another on a rectangular court, compete with the primary objective of shooting a basketball (approximately 9.4 inches (24 cm) in diameter) through the defender's hoop (a basket 18 inches (46 cm) in diameter mounted 10 feet (3.048 m) high to a backboard at each end of the court) while preventing the opposing team from shooting through their own hoop.</p><a href="event-edit.html">--Create An Event--</a>
        </div>

        <div>
            <img src="images/sfootball_net.jpg">
            <h3>Football</h3>
            <p>Association football, more commonly known as football or soccer,[a] is a team sport played with a spherical ball between two teams of eleven players. It is played by 250 million players in over 200 countries and dependencies, making it the world's most popular sport.</p><a href="event-edit.html">--Create An Event--</a>
        </div>
    </div>
    </div>

    </section>
</main>
    <!-- End of Main -->

<!-- Footer -->


 <!-- Footer Ends -->

</body>
</html>
