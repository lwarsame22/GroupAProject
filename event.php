
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event</title>
    <link rel="stylesheet" href="css/pstyle.css">
</head>
<body>
<?php
include_once('DBconnect.php');
session_start();
if ( isset($_SESSION['username'] )){
    $username=$_SESSION['username'];

    
    require "HeaderLoggedin.php";
}
else {
    header('Location: HomePage.php');
}
?>
    <main class="evntbakground">
    <div class="eventform">
    <h2>Create An Event</h2>
<form name="createEvent" method="post" action="createEvent.php">
    <label for="title">Event Title:</label><br>
    <Input type="text" placeholder="Enter Event Title" name="title" class="inputbox"><br>
    <label for="date">Event date:</label><br>
    <input type="date" placeholder="Enter Event date="name="date" class="inputbox"><br>
    <label for="description">Description: </label><br>
    <input type="text" placeholder="Enter Description" name="description" class="inputbox"><br>
    <label for="location">Location : </label><br>
    <input type="text" placeholder="Enter location" name="location" class="inputbox"><br>
    <select class="sportdropdown" name="sportName">
        <?php 
        $query2 = "SELECT * FROM sports";
        $result=mysqli_query($conn, $query2);

        while( $row = mysqli_fetch_array($result)){

                echo "<option value='".$row['s_ID']."'>".$row['s_name']."</option>";

        }



        ?>
        </select>
    <button type="submit" value="createEvent" name="eventButton" class="eventbtn">Create Event</button><br>
</form>
    </main>
        <!-- Main Ends -->
        <!-- Footer -->
        <footer class="control">

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
<!-- Footer ends -->
</body>
</html>




<!--
<select class="sportdropdown" name="sportName">

    $query2 = "SELECT s_ID FROM sports";
    $result=mysqli_query($conn, $query2);
    for($x=0; $x<mysqli_num_rows($result); $x++){
        while ($row= mysqli_fetch_assoc($result)){
            echo "<option value=".$row['s_ID']." name=".$row['s_ID'].">" . $row['s_ID'] . "</option>";
        }
    }

</select>  -->
