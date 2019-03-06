
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
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
    <div class="slide-container"> <!-- This slide-container div will hold all our slide sheets/clips and slide buttons-->
    <span id="slider-image-1"></span><!-- We add 9 <span> for the 9images, this will be used to move the image container to the left side of the screen using the CSS left property-->
    <span id="slider-image-2"></span>
    <span id="slider-image-3"></span>
    <span id="slider-image-4"></span>
    <span id="slider-image-5"></span>
    <span id="slider-image-6"></span>
    <span id="slider-image-7"></span>
    <span id="slider-image-8"></span>
    <span id="slider-image-9"></span>

    <div class="image-container"> <!-- This container will contain all the images-->
        <img src="images1/americanball1.jpg" class="slider-image"> <!-- All images with the same class for styling -->
        <img src="images1/basket ball.jpg" class="slider-image">
        <img src="images1/cricket.jpg" class="slider-image">
        <img src="images1/cycling.jpg" class="slider-image">
        <img src="images1/football_net.jpg" class="slider-image">
        <img src="images1/Hockey.jpg" class="slider-image">
        <img src="images1/racing.jpg" class="slider-image">
        <img src="images1/Tennis Match.jpg" class="slider-image">
        <img src="images1/wheelchair rugby.jpg" class="slider-image">
    </div>

    <div class="button-container"> <!-- This Container will hold all our link buttons --> <!-- We create the actual links below -->
        <a href="#slider-image-1" class="slider-button"></a>
        <a href="#slider-image-2" class="slider-button"></a>
        <a href="#slider-image-3" class="slider-button"></a>
        <a href="#slider-image-4" class="slider-button"></a>
        <a href="#slider-image-5" class="slider-button"></a>
        <a href="#slider-image-6" class="slider-button"></a>
        <a href="#slider-image-7" class="slider-button"></a>
        <a href="#slider-image-8" class="slider-button"></a>
        <a href="#slider-image-9" class="slider-button"></a>

    </div>

</div>
    <!-- User page available sports -->
    <section id="available-sports">
        <div class="">
            <h2>Available Sports</h2>
            <div class="four column"> <img src="images1/s.cricket.jpg">
                <h3>Cricket</h3>
            <h4><a href="#"> Cricket is a bat-and-ball game played between two teams of eleven players on a field at the centre of which is a 20-metre (22-yard) pitch with a wicket at each end, each comprising two bails balanced on three stumps. The batting side scores runs by striking the ball bowled at the wicket with the bat, while the bowling and fielding side tries to prevent this and dismiss each player (so they are "out").
            </a></h4></div>

            <div><img src="images1/americanball01s.jpg">
                <h3>American Football</h3>
                <h4><a href="#"> American football, referred to as football in the United States and Canada and also known as gridiron,[nb 1] is a team sport played by two teams of eleven players on a rectangular field with goalposts at each end. The offense, which is the team controlling the oval-shaped football, attempts to advance down the field by running with or passing the ball, while the defense, which is the team without control of the ball, aims to stop the offense's advance and aims to take control of the ball for themselves.</a></h4>
            </div>

            <div>
                <img src="images1/sbasketball.jpg">
                <h3>Basketball</h3>
                <h4><a href="#">Basketball is a team sport in which two teams, most commonly of five players each, opposing one another on a rectangular court, compete with the primary objective of shooting a basketball (approximately 9.4 inches (24 cm) in diameter) through the defender's hoop (a basket 18 inches (46 cm) in diameter mounted 10 feet (3.048 m) high to a backboard at each end of the court) while preventing the opposing team from shooting through their own hoop.</a> </h4>
            </div>
        </div>
    </section>
    <!-- End of Main -->

<!-- Begin Footer -->
    <?php
    require "Footer.php";
    ?>
<!-- Footer Ends -->

</body>
</html>
