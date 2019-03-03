
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/unsemantic-grid-responsive-tablet.css">

</head>
<body>
<?php
$_SESSION['username'] = $username;

require "Header.php";
?>

<main class="grid-container">

    <!--Section 1 DESCRIPTION-->
    <section id="AppDescription" class="grid-100">
        <h1>    Playmate / Matchy / Sporty/ Kudofy  </h1>
        <img id= "Sportapp" src="Images/sportapp.jpg" alt="Sports App">
        <h2> Making it easier to find people around you to organize and play your sport </h2>
        <p> QUICK PLAYs
            Smart way to find members willing to play a sport and arrange activities with each other
            TEAM MANAGEMENT
            Join one or more teams and schedule your matches in order to no overlap. Feed you app with the amount of minutes you played in the match or if you score some points
            EVENTS AND COMPETITIONS
            Create a quick event of event run for a competition, leagues or tournaments.
            Organize one-off or recurring activities, event or training sessions
            Accept new entries
        </p>
    </section>

</main>
</body>
</html>
